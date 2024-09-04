# # Used for prod build.
# FROM php:8.2-fpm as php

# # Set environment variables
# ENV PHP_OPCACHE_ENABLE=1
# ENV PHP_OPCACHE_ENABLE_CLI=0
# ENV PHP_OPCACHE_VALIDATE_TIMESTAMPS=1
# ENV PHP_OPCACHE_REVALIDATE_FREQ=1

# # Install dependencies.
# RUN apt-get update && apt-get install -y unzip libpq-dev libcurl4-gnutls-dev nginx libonig-dev

# # Install PHP extensions.
# RUN docker-php-ext-install mysqli pdo pdo_mysql bcmath curl opcache mbstring

# # Copy composer executable.
# COPY --from=composer:2.3.5 /usr/bin/composer /usr/bin/composer

# # Copy configuration files.
# COPY ./docker/php/php.ini /usr/local/etc/php/php.ini
# COPY ./docker/php/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf
# COPY ./docker/nginx/nginx.conf /etc/nginx/nginx.conf

# # Set working directory to /var/www.
# WORKDIR /var/www

# # Copy files from the current folder to the container's current folder (set in workdir).
# COPY --chown=www-data:www-data . .

# # Create laravel caching folders.
# RUN mkdir -p /var/www/storage/framework
# RUN mkdir -p /var/www/storage/framework/cache
# RUN mkdir -p /var/www/storage/framework/testing
# RUN mkdir -p /var/www/storage/framework/sessions
# RUN mkdir -p /var/www/storage/framework/views

# # Fix files ownership.
# RUN chown -R www-data /var/www/storage
# RUN chown -R www-data /var/www/storage/framework
# RUN chown -R www-data /var/www/storage/framework/sessions

# # Set correct permissions.
# RUN chmod -R 755 /var/www/storage
# RUN chmod -R 755 /var/www/storage/logs
# RUN chmod -R 755 /var/www/storage/framework
# RUN chmod -R 755 /var/www/storage/framework/sessions
# RUN chmod -R 755 /var/www/bootstrap

# # Adjust user permission & group
# RUN usermod --uid 1000 www-data
# RUN groupmod --gid 1001 www-data

# # Fix permissions denied
# RUN chown -R daemon:www-data storage
# RUN chown -R daemon:www-data bootstrap/cache
# RUN chmod -R 775 storage
# RUN chmod -R 775 bootstrap/cache


# RUN chmod +x docker/entrypoint.sh

# # Run the entrypoint file.
# ENTRYPOINT [ "docker/entrypoint.sh" ]


# Used for prod build.
FROM php:8.2-fpm as php

# Set environment variables
ENV PHP_OPCACHE_ENABLE=1
ENV PHP_OPCACHE_ENABLE_CLI=0
ENV PHP_OPCACHE_VALIDATE_TIMESTAMPS=1
ENV PHP_OPCACHE_REVALIDATE_FREQ=1

# Install dependencies.
RUN apt-get update && apt-get install -y unzip libpq-dev libcurl4-gnutls-dev nginx libonig-dev

# Install PHP extensions.
RUN docker-php-ext-install mysqli pdo pdo_mysql bcmath curl opcache mbstring

# Copy composer executable.
COPY --from=composer:2.3.5 /usr/bin/composer /usr/bin/composer

# Copy configuration files.
COPY ./docker/php/php.ini /usr/local/etc/php/php.ini
COPY ./docker/php/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf
COPY ./docker/nginx/nginx.conf /etc/nginx/nginx.conf

# Set working directory to /var/www.
WORKDIR /var/www

# Copy composer files first to leverage Docker cache
COPY composer.json composer.lock ./

# Install composer dependencies
RUN composer install --no-scripts --no-autoloader

# Copy the rest of the application code
COPY . .

# Generate optimized autoloader
RUN composer dump-autoload --optimize

# Create Laravel storage directory structure if not exists
RUN mkdir -p /var/www/storage/framework/{sessions,views,cache}

# Set permissions
RUN chown -R www-data:www-data /var/www
RUN chmod -R 755 /var/www
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Make sure the entrypoint script is executable
RUN chmod +x docker/entrypoint.sh

# Switch to www-data user
USER www-data

# Run the entrypoint file.
ENTRYPOINT ["docker/entrypoint.sh"]