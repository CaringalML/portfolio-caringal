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

    <a class="navbar-brand" href="{{ route('home') }}">
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
                        <a class="nav-link" href="#testmonial">Certificates</a>
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

    @yield('content')





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
