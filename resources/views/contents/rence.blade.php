
@extends('caringal.index')

@section('title', 'Home Page')

@section('content')
    <!-- Page Header -->
    <header class="header" id="home">
        <div class="container">
            <div class="infos">
                <h6 class="subtitle">hello,I'm</h6>
                <h6 class="title">Martin Caringal</h6>
                <div class="animated-text">
                <p class="text">Information Technology</p>
                <p class="text">Cloud Computing Enthusiast</p>
                <p class="text">Arduino Embedded Enthusiast</p>
                </div>


                <div class="buttons pt-3">
                 <a href="{{ asset('assets/cv/CV_Martin_Caringal_3-8-24.pdf') }}" download class="btn btn-dark rounded">DOWNLOAD CV</a>
                </div>
     

                <div class="socials mt-4">
                    <a class="social-item" href="https://www.facebook.com/martinlawrence.caringal"><i class="ti-facebook"></i></a>
                    <a class="social-item" href="https://github.com/CaringalML"><i class="ti-github"></i></a>

                    <a class="social-item" href="https://hub.docker.com/u/rencecaringal000">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAW5JREFUSEvtlTFuAjEQRT9FTgAHIGfgAuQkBClVekQJtOEMKOEStEmaVNwBOhpOQAP70QwawM56Nk5WkXC16/X6+X9/jxuoqTVq4uIG/jPn/53VHQBfYs8zgJnXqqqKCV4K7Om3wG0BrAHocxPAg/Rvi/633IofAbzKpBMAI3kmiN/Y+hEwF8nFBluZ1VXBYwA9WdRHiBwCc6VdYy8nYLOK5zIx+xmslozZAVgU31ayLVR8nwq2Kq2lMasHAKYy+RDAiwGzW/f/sxBE9Uf7Q4qp9j2g0gPm/+qaFcxAHq23YFqsgfGG9E5+oOUbE0I7z1kILZiB0NR6wbHxVEenrgJmwdbiXGAGK3ikLq1mGnM1hor2Jp3jfS6qHKPkAhJLo3c9p/SmKs6xz7ESeraG0Dn+SbpLlSo9Vqs9cO4jSyjDFN3TS8u/uyS0Zmut5ru9cXg2WQbdV2KsZHqDVGl82bVYadKUn27gFJeyjKnN6gM3t0YfrKzvcgAAAABJRU5ErkJggg==" alt="Docker Hub" style="height: 24px; width: 24px;">
</a>


                    <a class="social-item" href="https://www.youtube.com/@Caringal_Tech" style="display: flex; justify-content: center; align-items: center;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAARdJREFUSEvtltENwjAMRN1JgE1gE5gEmAQ2gU2ATeirYhTSijgkbfpRS1VV1fH5zo6TRipZUwlXFuDJlJ+d1HtHfS0iK08Gvn/Z0/18uTffPPdwUciYwJfWcVtYc4APLokudAh8GwFUOVwdeA8Yto/CTMNwG2XtM0ZeGI9pO623D0xDUd+YIRlJxhptKA51Zv1XjU8icoyhtmvOrQ++JIp/SgJFgDVH3QWWBDTpLMa+OEgP+9g2LA5s3f9Fga29gUKDwNauzmmuLGCdu7F6mrdTtQEyxcj8DKzwkGBWW/ajYc70XCgRI3PwdAKUeV0aPHosakLUW5tHLwKWZPQiQBz/MtDNZ99md/X5p4ZJaxbGSXLlOFeT+g0yJDgffjlehQAAAABJRU5ErkJggg==" alt="YouTube"></a>

                </div>

            </div>              
            <div class="img-holder">
            <img src="{{ asset('assets/imgs/martindev.jpg') }}" alt="">
            </div>      
        </div>  

        <!-- Header-widget -->
        <div class="widget">
            <div class="widget-item">
                <h2>24</h2>
                <p>Age</p>
            </div>
            <div class="widget-item">
                <h2>Resident</h2>
                <p>Visa Status</p>
            </div>
            <div class="widget-item">
                <h2>7</h2>
                <p>Level</p>
            </div>
        </div>
    </header>
    <!-- End of Page Header -->
    
    <!-- About section -->
    <section id="about" class="section mt-3">
        <div class="container mt-5">
            <div class="row text-center text-md-left">
                <div class="col-md-3">
                <img src="{{ asset('assets/imgs/barong.JPG') }}" alt="" class="img-thumbnail mb-4">
                </div>
                <div class="pl-md-4 col-md-9">
                    <h6 class="title">Martin Lawrence M. Caringal</h6>
                    <p class="subtitle">Cloud Computing Enthusiast</p>
                    <p>As a recent graduate with a Bachelor of Science in Information Technology from Mindoro State University and an NZQA Level 7 qualification, I am excited to embark on a career in cloud computing, with a particular focus on AWS. I am proud to be an AWS Certified Cloud Practitioner, which has equipped me with a strong understanding of cloud concepts, AWS services, and best practices.</p>
                    <p>Although my background is not in the tech industry, I have invested significant time and effort into understanding the fundamentals of cloud computing and AWS services. Through self-study and hands-on practice, I have developed a solid foundation in cloud architecture, security, and deployment.</p>
                    <p>I am currently on a journey to achieve my next AWS certifications: AWS Solutions Architect and AWS DevOps Engineer. My enthusiasm for cloud computing drives me to continuously seek out new learning opportunities and challenges. I am confident that my strong analytical skills, attention to detail, and ability to quickly adapt to new technologies will enable me to excel in this field. I am eager to bring my skills and passion for AWS to your team and contribute to your organization's success.</p>


                    
                <div class="buttons pt-3">
                 <a href="{{ asset('assets/cv/CV_Martin_Caringal_3-8-24.pdf') }}" download class="btn btn-dark rounded">DOWNLOAD CV</a>
                </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Service section -->
    <section id="service" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Service</h6>
            <h6 class="section-title mb-4">What I Do</h6>
            <p class="mb-5 pb-4">As a self-taught developer, I have gained hands-on experience with Amazon Web Services (AWS) deployment, covering orchestration, platform as a service, storage, content delivery networks (CDNs), networking, security, and compliance. I continuously learn frameworks essential for configuring Dockerized Linux environments. The frameworks I have Dockerized include Laravel, Laravel API, Express API, and ASP.NET API. I also have experience in DNS management, Git version control, continuous integration and deployment (CI/CD), and unit testing. My database expertise includes Aurora PostgreSQL, Microsoft SQL Server, MongoDB, and MySQL.

In addition, I am proficient with Microsoft 365 tools, including Word, Excel, and PowerPoint. As an Arduino firmware developer and electronics hobbyist, I work on embedded systems and hardware projects. I am passionate about serverless computing and cloud automation, always eager to enhance my skills. Though still growing in this field, I am committed to designing and managing secure cloud solutions and look forward to contributing to new projects as I continue to learn.
</p>





            <div class="row">
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                        <i class="icon ti-cloud"></i>  <!-- Cloud symbol representing cloud services or computing -->
                            <h5>AWS Architecture</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                        <i class="icon ti-file"></i>  <!-- Document or file icon -->
                            <h5>Microsoft 365</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                        <i class="icon ti-plug"></i>  <!-- Plug icon representing electronics -->
                            <h5>Arduino Embedded Electronics</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                        <i class="icon ti-infinite"></i>  <!-- Infinity symbol representing endless or continuous processes -->
                            <h5>CI/CD</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End of Sectoin -->

    <!-- Skills section -->
    <section class="section">
        <div class="container text-center">
            <h6 class="subtitle">Cloud Skills</h6>
            <h6 class="section-title mb-4">AWS Architecture Diagram</h6>
            <p class="mb-5 pb-4">🔹 From Local Development to Production: Experience fluid transitions from local machine development environments straight to AWS-powered production using industry-standard tools like GitHub Actions for continuous integration.<br>

🔹 Seamless Version Control: Keep your codebase organized and up-to-date with integrated version control via GitHub, ensuring smooth collaboration across teams while maintaining a clean and optimized repository. <br>

🔹 Securing Docker Images: Deploy applications with confidence. I prioritize security, implementing best practices for containerization by securing Docker images to protect your assets from vulnerabilities and risks. <br>

🔹 Serverless Computing: Harness the power of AWS Lambda and Fargate for serverless computing. I create cost-efficient, highly scalable solutions that eliminate the need to manage servers, providing more flexibility for your application needs.</p>

            <div class="centered-image-wrapper">
        <div class="image-container">
            <img src="{{ asset('assets/imgs/architecture.png') }}" alt="AWS Architecture Diagram">
        </div>
    </div>

        </div>
    </section>
    <!-- End of Skills sections -->

    <!-- Portfolio section -->
    <section id="portfolio" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Portfolio</h6>
            <h6 class="section-title mb-4">Check My Wonderful Works</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>

            <div class="row">
                <div class="col-sm-4">
                    <div class="img-wrapper">
                    <img src="{{ asset('assets/imgs/folio-1.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>  
                        </div>
                    </div>
                    <div class="img-wrapper">
                    <img src="{{ asset('assets/imgs/folio-2.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>                              
                        </div>
                    </div>                  
                </div>
                <div class="col-sm-4">
                    <div class="img-wrapper">
                    <img src="{{ asset('assets/imgs/folio-3.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>  
                        </div>
                    </div>
                    <div class="img-wrapper">
                    <img src="{{ asset('assets/imgs/folio-4.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>                              
                        </div>
                    </div>                  
                </div>
                <div class="col-sm-4">
                    <div class="img-wrapper">
                    <img src="{{ asset('assets/imgs/folio-5.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>  
                        </div>
                    </div>
                    <div class="img-wrapper">
                    <img src="{{ asset('assets/imgs/folio-6.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>                              
                        </div>
                    </div>                  
                </div>
            </div>

        </div>
    </section>
    <!-- End of portfolio section -->

    <!-- Testmonial Section -->
    <section id="testmonial" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Certificates</h6>
            <h6 class="section-title mb-4">Information Technology Certifications</h6>
            <!-- <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p> -->


            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card testmonial-card border">
                        <div class="card-body" style="padding: 0;">
                        <div data-iframe-width="650" data-iframe-height="270" data-share-badge-id="b08c2526-a7ed-429c-bcc1-bfaa0fca90f3" data-share-badge-host="https://www.credly.com"></div><script type="text/javascript" async src="//cdn.credly.com/assets/utilities/embed.js"></script>
                            <img src="{{ asset('assets/imgs/practitioner.png') }}" alt="" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0;">
                            <h1 class="title">Amazon Web Services</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card testmonial-card border">
                        <div class="card-body" style="padding: 0;">
                        <img src="{{ asset('assets/imgs/iqa.png') }}" alt="" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0;">
                            <h1 class="title">International Qualifications Recognition Statement </h1>
                            
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <div class="card testmonial-card border">
                        <div class="card-body" style="padding: 0;">
                            <img src="{{ asset('assets/imgs/avatar-3.jpg') }}" alt="" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0;">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                            <h1 class="title">Michael Abra</h1>
                            <h1 class="subtitle">Web Developer</h1>
                        </div>
                    </div>
                </div> -->
            </div>

            </div>
            
        </div>
    </section>
    <!-- End of testmonial section -->

    <!-- Blog Section -->
    <section id="blog" class="section">
        <div class="container text-center">
            <h6 class="subtitle">My Documentation</h6>
            <h6 class="section-title mb-4">Latest Projects</h6>
            <p class="mb-5 pb-4">This demonstrates the hard work and dedication involved in building the backbone of IT infrastructure, <br> from development preparation to the production environment.</p>

            <div class="row text-left">
                <div class="col-md-4">
                    <div class="card border mb-4">
                    <img src="{{ asset('assets/imgs/ang.png') }}" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Angular and ASP .NET RESTful API CRUD Deployment in AWS</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted: 22 September 2024</a>
                                <!-- <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a> -->
                            </div>
                            <p>The image above shows the overall infrastructure of both the frontend and backend deployments in AWS. It adheres to the principles of Operational Excellence, Security, Reliability, Performance Efficiency, Cost Optimization, and Sustainability.</p>
                            <a href="{{ route('blog1') }}">Read More..</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border mb-4">
                    <img src="{{ asset('assets/imgs/blog-2.jpg') }}" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Web Layouts</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: Admin</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                            <a href="javascript:void(0)">Read More..</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border mb-4">
                    <img src="{{ asset('assets/imgs/blog-3.jpg') }}" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Bootstrap Framework</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: Admin</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                            <a href="javascript:void(0)">Read More..</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hire me section -->
    <section class="bg-gray p-0 section">
        <div class="container">
            <div class="card bg-primary">
                <div class="card-body text-light">
                    <div class="row align-items-center">
                        <div class="col-sm-9 text-center text-sm-left">
                            <h5 class="mt-3">Hire Me For Your Project</h5>
                            <p class="mb-3">Accusantium labore nostrum similique quisquam.</p>
                        </div>
                        <div class="col-sm-3 text-center text-sm-right">
                            <button class="btn btn-light rounded">Hire Me!</button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>      
    <!-- End od Hire me section. -->

    

<!-- Contact Section -->
<section id="contact" class="position-relative section">
    <div class="container text-center">
        <h6 class="subtitle">Contact</h6>
        <h6 class="section-title mb-4">Get In Touch With Me</h6>
        <p class="mb-5 pb-4">I am available at your convenience and would welcome the opportunity to discuss any potential opportunities or inquiries. Thank you for your time and consideration.</p>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="contact text-left">
            <div class="form">
                <h6 class="subtitle">Available 24/7</h6>
                <h6 class="section-title mb-4">Get In Touch</h6>
                <form method="POST" action="{{ route('submit.message') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                    </div>
                    <div class="form-group">
                        <textarea name="contact-message" id="" cols="30" rows="5" class="form-control" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block rounded w-lg custom-hover">Send Message</button>
                </form>
            </div>
            <div class="contact-infos">
                <div class="item">
                    <i class="ti-location-pin"></i>
                    <div>
                        <h5>Location</h5>
                        <p> 310 River Rd, Claudelands, Hamilton 3214, Waikato, New Zealand</p>
                    </div>                          
                </div>
                <div class="item">
                    <i class="ti-mobile"></i>
                    <div>
                        <h5>Phone Number</h5>
                        <p>022 124 8553</p>
                    </div>                          
                </div>
                <div class="item">
                    <i class="ti-email"></i>
                    <div class="mb-0">
                        <h5>Email Address</h5>
                        <p>caringallawrence5@gmail.com</p>
                    </div>
                </div>
            </div>                  
        </div>
    </div>  
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6306.977719397844!2d175.27985387569302!3d-37.77858167198434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d6d18a2ab6f0a15%3A0x5d99b3ae099b9f7c!2s310%20River%20Road%2C%20Claudelands%2C%20Hamilton%203214!5e0!3m2!1sen!2snz!4v1721428192550!5m2!1sen!2snz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>       
</section>
<!-- End of Contact Section -->
@endsection
