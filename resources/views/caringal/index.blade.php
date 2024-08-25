<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title>Martin Lawrence Caringal</title>

    <!-- favicon -->
<link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAT5JREFUSEvFluERwiAMRuMmOok6iTqJOok6iTqJjqLPKx5S0rQEj/zqXds8vvCRMJNGMWvEFQ28FZF5pUU937nOaa4c+Coiq0rQkOYmIus4ZwpG5aMyNKQDzAI+kYJRiuJ/RBXwUUTYO2L5fsYTVrjBPwk62pgtcoFx506RdjKUu8BAe0ejW4jlDxc4V+ZQAPYZ1Vq4wM1KjZNxdFpuq8xUwaWYBMBpBPfI0XvrLNUAj2BkP3Erbgam1Jeu3GGCbUYMlmLFAPk5tMpUOYugz2vjtAjcG2tKvYFylnNjtQg81DjSNWhHqwhcaqj4v2bgReyP3A1E2yOPagwJ+Bu5OxcGoeEz4HPO1VxL8pzj6XCHNNHU6612ZHqKrPJMBZMvhU+GkqQEHMN5/tk7S2l4XwoOcK2LmXwP2Ew+9EEz8Au/S1Afip4pOQAAAABJRU5ErkJggg==" type="image/png">


    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/themify-icons/css/themify-icons.css') }}">
    <!-- Bootstrap + Steller main styles -->
	<link rel="stylesheet" href="{{ asset('assets/css/steller.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-spy="affix" data-offset-top="0">
        
    <div class="container">

    <a class="navbar-brand" href="{{ route('caringal') }}">
    <img src="{{ asset('assets/imgs/martinc.jpg') }}" alt="" style="height: 50px; width: auto;">
</a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testmonial">Testmonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                   
                </ul>
            </div>
        </div>          
    </nav>
    <!-- End of page navibation -->

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
                <h2>5'6</h2>
                <p>Height</p>
            </div>
        </div>
    </header>
    <!-- End of Page Header -->
    
    <!-- About section -->
    <section id="about" class="section mt-3">
        <div class="container mt-5">
            <div class="row text-center text-md-left">
                <div class="col-md-3">
                <img src="{{ asset('assets/imgs/martin_barong.jpg') }}" alt="" class="img-thumbnail mb-4">
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
            <p class="mb-5 pb-4">I specialize in virtualization, programming languages such as PHP and C#, containerization, DNS management, security, and prompt engineering. Additionally, I am a big fan of serverless computing and automation in the cloud. My diverse skill set enables me to design, develop, and manage robust and secure cloud solutions.</p>

            <div class="row">
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-crown"></i>
                            <h5>AWS Architecture</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-desktop"></i>
                            <h5>Web Design</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-mobile"></i>
                            <h5>App Design</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-bar-chart"></i>
                            <h5>SEO</h5>
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
            <h6 class="subtitle">Skills</h6>
            <h6 class="section-title mb-4">Why Choose me</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>

            <div class="row text-left">
                <div class="col-sm-6">
                    <h6 class="mb-3">Photoshop</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>89%</span></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h6 class="mb-3">Web Design</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 83%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>83%</span></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h6 class="mb-3">App Design</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>95%</span></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h6 class="mb-3">SEO</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
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
            <h6 class="subtitle">Testmonial</h6>
            <h6 class="section-title mb-4">What People Say About Me</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>


            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                            <img src="{{ asset('assets/imgs/avatar-1.jpg') }}" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                                <h1 class="title">Emma Re</h1>
                                <h1 class="subtitle">Graphic Designer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                            <img src="{{ asset('assets/imgs/avatar-2.jpg') }}" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                                <h1 class="title">James Bert</h1>
                                <h1 class="subtitle">Web Designer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                            <img src="{{ asset('assets/imgs/avatar-3.jpg') }}" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                                <h1 class="title">Michael Abra</h1>
                                <h1 class="subtitle">Web Developer</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of testmonial section -->

    <!-- Blog Section -->
    <section id="blog" class="section">
        <div class="container text-center">
            <h6 class="subtitle">My Blogs</h6>
            <h6 class="section-title mb-4">Latest News</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>

            <div class="row text-left">
                <div class="col-md-4">
                    <div class="card border mb-4">
                    <img src="{{ asset('assets/imgs/blog-1.jpg') }}" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Designe for Everyone</h5>
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
        <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>

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

<style>
.custom-hover:hover {
    background-color: black;
    border-color: black;
}
</style>

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






    <!-- Page Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <p>Copyright <script>document.write(new Date().getFullYear())</script> &copy; <p>CaringalDev</p></p>
                </div>
                <div class="col-sm-6">
                    <div class="socials">
                    <a class="social-item" href="https://www.facebook.com/martinlawrence.caringal"><i class="ti-facebook"></i></a>
                    <a class="social-item" href="https://github.com/CaringalML"><i class="ti-github"></i></a>
                    <a class="social-item" href="https://hub.docker.com/u/rencecaringal000">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAW5JREFUSEvtlTFuAjEQRT9FTgAHIGfgAuQkBClVekQJtOEMKOEStEmaVNwBOhpOQAP70QwawM56Nk5WkXC16/X6+X9/jxuoqTVq4uIG/jPn/53VHQBfYs8zgJnXqqqKCV4K7Om3wG0BrAHocxPAg/Rvi/633IofAbzKpBMAI3kmiN/Y+hEwF8nFBluZ1VXBYwA9WdRHiBwCc6VdYy8nYLOK5zIx+xmslozZAVgU31ayLVR8nwq2Kq2lMasHAKYy+RDAiwGzW/f/sxBE9Uf7Q4qp9j2g0gPm/+qaFcxAHq23YFqsgfGG9E5+oOUbE0I7z1kILZiB0NR6wbHxVEenrgJmwdbiXGAGK3ikLq1mGnM1hor2Jp3jfS6qHKPkAhJLo3c9p/SmKs6xz7ESeraG0Dn+SbpLlSo9Vqs9cO4jSyjDFN3TS8u/uyS0Zmut5ru9cXg2WQbdV2KsZHqDVGl82bVYadKUn27gFJeyjKnN6gM3t0YfrKzvcgAAAABJRU5ErkJggg==" alt="Docker Hub" style="height: 24px; width: 24px;">
</a>
                    <a class="social-item" href="https://www.youtube.com/@Caringal_Tech" style="display: flex; justify-content: center; align-items: center;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAARdJREFUSEvtltENwjAMRN1JgE1gE5gEmAQ2gU2ATeirYhTSijgkbfpRS1VV1fH5zo6TRipZUwlXFuDJlJ+d1HtHfS0iK08Gvn/Z0/18uTffPPdwUciYwJfWcVtYc4APLokudAh8GwFUOVwdeA8Yto/CTMNwG2XtM0ZeGI9pO623D0xDUd+YIRlJxhptKA51Zv1XjU8icoyhtmvOrQ++JIp/SgJFgDVH3QWWBDTpLMa+OEgP+9g2LA5s3f9Fga29gUKDwNauzmmuLGCdu7F6mrdTtQEyxcj8DKzwkGBWW/ajYc70XCgRI3PwdAKUeV0aPHosakLUW5tHLwKWZPQiQBz/MtDNZ99md/X5p4ZJaxbGSXLlOFeT+g0yJDgffjlehQAAAABJRU5ErkJggg==" alt="YouTube"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer> 
    <!-- End of page footer -->
	
<!-- Core JavaScript Files -->
<script src="{{ asset('assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>
<!-- Bootstrap 3 Affix -->
<script src="{{ asset('assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>
<!-- Steller JavaScript -->
<script src="{{ asset('assets/js/steller.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>


</body>
</html>
