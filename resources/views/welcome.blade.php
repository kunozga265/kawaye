<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kane - Creative Portfolio Showcase Template">
    <meta name="keywords" content="personal, portfolio new, html, one page, bootstrap, new html template, design, creative, onepage, clean, modern">
    <meta name="author" content="Tanvir Hossain">
    <!-- PAGE TITLE -->
    <title>Patrick Kawaye - Personal Portfolio</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/favicon.png')}}">
    <!-- ALL GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="{{asset('assets/fonts/remixicon.css')}}" />
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- NICE SELECT CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}" />
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" />
    <!-- SLICK CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}" />
    <!-- SPACING CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/spacing.css')}}" />
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- START PRELOADER AREA-->
<div id="preloader-area">
    <div class="loader">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- END PRELOADER AREA -->
<!-- START MENU DESIGN AREA -->
<header class="main-header">
    <div class="header-upper">
        <div class="container">
            <div class="header-inner d-flex align-items-center">
                <!-- START LOGO DESIGN AREA -->
                <div class="logo-outer">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{asset('assets/images/logo.svg')}}" alt="Logo" title="Logo" /></a>
                    </div>
                </div>
                <!-- / END LOGO DESIGN AREA -->
                <!-- START NAV DESIGN AREA -->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <div class="mobile-logo">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('assets/images/logo.png')}}" alt="Logo" title="Logo" />
                                </a>
                            </div>
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="navigation onepage clearfix">
                                <li><a class="nav-link-click" href="#home">Home</a></li>
                                <li><a class="nav-link-click" href="#about">about</a></li>
                                <li><a class="nav-link-click" href="#services">Skills</a></li>
                                <li><a class="nav-link-click" href="#resume">Resume</a></li>
                                <li><a class="nav-link-click" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- / END NAV DESIGN AREA -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- / END MENU DESIGN AREA -->
<!-- START HEADER DESIGN AREA -->
<section id="home" class="main-hero-area">
    <div class="container">
        <div class="container-inner">
            <div class="row align-items-center">
                <div class="col-lg-12 col-sm-12">
                    <!-- START HERO DESIGN AREA -->
                    <div class="hero-content rmb-25 wow fadeInUp delay-0-2s text-center">
                        <h1>I'm Patrick Kawaye <span>Chimseu</span></h1>
                        <div class="job">
                            <span>Innovator</span>
                            <span>Economist</span>
                            <span>Researcher</span>
{{--                            <span>Honest</span>--}}
{{--                            <span>Innovative</span>--}}
{{--                            <span>Loyal</span>--}}
{{--                            <span>Hardworking</span>--}}
{{--                            <span>Friendly</span>--}}
                        </div>
                    </div>
                    <!-- / END HERO DESIGN AREA -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / END HEADER DESIGN AREA -->
<!-- START ABOUT DESIGN AREA -->
<section id="about" class="about-area">
    <div class="container">
        <div class="row align-items-center">
            <!-- START ABOUT IMAGE DESIGN AREA -->
            <div class="col-lg-5">
                <div class="about-image-part wow fadeInUp delay-0-3s">
                    <img src="{{asset('assets/images/profile.jpg')}}" alt="About Me" />
                    <h2>Patrick Kawaye Chimseu</h2>
                    <div class="about-btn btn-one text-center">
                        <h6>Available for Work</h6>
                        <div class="circle pulse color-pulse"></div>
                    </div>
                    <div class="about-social text-center">
                        <ul>
                            <li><a href=""><i class="ri-facebook-circle-fill"></i></a></li>
                            <li><a href=""><i class="ri-twitter-x-line"></i></a></li>
                            <li><a href=""><i class="ri-linkedin-fill"></i></a></li>
                            <li><a href=""><i class="ri-github-line"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- / END ABOUT IMAGE DESIGN AREA -->
            <!-- START ABOUT TEXT DESIGN AREA -->
            <div class="col-lg-7">
                <div class="about-content-part wow fadeInUp delay-0-2s">
                    <h2>
                        Hello, I’m Patrick, an <span>Innovative</span> and <span>Pro-Active Economist</span> with vast experience in <span>Research</span>, <span>Innovation</span> and <span>Development Work</span>.
                    </h2>
                    <div class="hero-btns">
                        <a href="{{asset("assets/files/PatrickKawayeCV.pdf")}}" class="theme-btn" target="_blank">Download CV <i class="ri-download-line"></i></a>
                    </div>
                    <ul class="list-style-one two-column wow fadeInUp delay-0-2s">
                        <li><i class="ri-arrow-right-up-line"></i>Honest</li>
                        <li><i class="ri-arrow-right-up-line"></i>Innovative</li>
                        <li><i class="ri-arrow-right-up-line"></i>Loyal</li>
                        <li><i class="ri-arrow-right-up-line"></i>Hardworking</li>
                        <li><i class="ri-arrow-right-up-line"></i>Friendly</li>
{{--                        <li><i class="ri-arrow-right-up-line"></i>Data Analysis & Machine Learning</li>--}}
{{--                        <li><i class="ri-arrow-right-up-line"></i>Software Development & Design</li>--}}
{{--                        <li><i class="ri-arrow-right-up-line"></i>Strong Analytical & Writing Skills</li>--}}
{{--                        <li><i class="ri-arrow-right-up-line"></i>Legal & Documentation Knowledge</li>--}}
{{--                        <li><i class="ri-arrow-right-up-line"></i>Training & Manual Development</li>--}}
{{--                        <li><i class="ri-arrow-right-up-line"></i>Graphic Design Proficiency </li>--}}
{{--                        <li><i class="ri-arrow-right-up-line"></i>Multilingual & Communication Skills </li>--}}
{{--                        <li><i class="ri-arrow-right-up-line"></i>Team Leadership & Adaptability</li>--}}
{{--                        <li><i class="ri-arrow-right-up-line"></i>Microsoft Office Expertise</li>--}}
{{--                    </ul>--}}
                </div>
            </div>
            <!-- / END ABOUT TEXT DESIGN AREA -->
        </div>
    </div>
</section>
<!-- / END ABOUT DESIGN AREA -->
<!-- START SERVICE DESIGN AREA -->
<section id="services" class="services-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="section-title text-center wow fadeInUp delay-0-2s">
                    <p>Skills</p>
                    <h2>Core Competencies</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- START SINGLE SERVICE DESIGN AREA -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp delay-0-2s">
                    <i class="ri-global-fill"></i>
                    <h4>Proficient in Research Tools</h4>
                    <p>Skilled in various research and data collection tools like Google Colab, R, Python, Stata, NVivo, and Kobo Collect.</p>
                </div>
            </div>
            <!-- / END SINGLE SERVICE DESIGN AREA -->
            <!-- START SINGLE SERVICE DESIGN AREA -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp delay-0-4s">
                    <i class="ri-line-chart-fill"></i>
                    <h4>Data Analysis & Machine Learning Expertise </h4>
                    <p>Strong ability in data analysis, monitoring & evaluation, and machine learning modeling.</p>
                </div>
            </div>
            <!-- / END SINGLE SERVICE DESIGN AREA -->
            <!-- START SINGLE SERVICE DESIGN AREA -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp delay-0-6s">
                    <i class="ri-code-s-slash-line"></i>
                    <h4>Software Development & Design</h4>
                    <p>Experience in software development using Kotlin, Flutter, and Agile methodologies.</p>
                </div>
            </div>
            <!-- / END SINGLE SERVICE DESIGN AREA -->
            <!-- START SINGLE SERVICE DESIGN AREA -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp delay-0-6s">
                    <i class="ri-ball-pen-fill"></i>
                    <h4>Strong Analytical & Writing Skills</h4>
                    <p>Excellent at analyzing information, managing data, and writing reports.</p>
                </div>
            </div>
            <!-- / END SINGLE SERVICE DESIGN AREA -->
            <!-- START SINGLE SERVICE DESIGN AREA -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp delay-0-6s">
                    <i class="ri-pantone-fill"></i>
                    <h4>Legal & Documentation Knowledge</h4>
                    <p>Capable of drafting Memorandums of Understanding (MOUs).</p>
                </div>
            </div>
            <!-- / END SINGLE SERVICE DESIGN AREA -->
            <!-- START SINGLE SERVICE DESIGN AREA -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp delay-0-6s">
                    <i class="ri-pages-line"></i>
                    <h4>Training & Manual Development</h4>
                    <p>Skilled in conducting training sessions, developing manuals, and report writing.</p>
                </div>
            </div>
            <!-- / END SINGLE SERVICE DESIGN AREA -->
            <!-- START SINGLE SERVICE DESIGN AREA -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp delay-0-6s">
                    <i class="ri-palette-line"></i>
                    <h4>Graphic Design Proficiency</h4>
                    <p>Experienced in designing graphics using Adobe software.</p>
                </div>
            </div>
            <!-- / END SINGLE SERVICE DESIGN AREA -->
            <!-- START SINGLE SERVICE DESIGN AREA -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp delay-0-6s">
                    <i class="ri-speak-line"></i>
                    <h4>Multilingual & Communication Skills</h4>
                    <p>Fluent in English and Chichewa, with strong interpersonal skills.</p>
                </div>
            </div>
            <!-- / END SINGLE SERVICE DESIGN AREA -->
            <!-- START SINGLE SERVICE DESIGN AREA -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp delay-0-6s">
                    <i class="ri-team-fill"></i>
                    <h4>Team Leadership & Adaptability</h4>
                    <p>A quick learner, team builder, and able to work with minimal supervision.</p>
                </div>
            </div>
            <!-- / END SINGLE SERVICE DESIGN AREA -->
        </div>
    </div>
</section>
<!-- / END SERVICE DESIGN AREA -->
<!-- START RESUME EXPERIENCE DESIGN AREA -->
<section id="resume" class="resume-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="section-title text-center wow fadeInUp delay-0-2s">
                    <p>Experience</p>
                    <h2> Professional Resume</h2>
                </div>
            </div>
        </div>
        <div class="resume-items">
            <div class="row">
                <!-- START EXPERIENCE RESUME DESIGN AREA -->
                <div class="col-xl-6 col-md-6">
                    <div class="experience-list">
                        <!-- START SINGLE RESUME DESIGN AREA -->
                        <div class="resume-item wow fadeInUp delay-0-3s">
                            <div class="icon">
                                <i class="ri-book-line"></i>
                            </div>
                            <div class="content">
                                <span class="years">2024 </span>
                                <h4>Research Fellow</h4>
                                <span class="company">LUANAR Center for Agricultural Research and Development</span>
                            </div>
                        </div>
                        <!-- / END SINGLE RESUME DESIGN AREA -->
                        <!-- START SINGLE RESUME DESIGN AREA -->
                        <div class="resume-item wow fadeInUp delay-0-3s">
                            <div class="icon">
                                <i class="ri-book-line"></i>
                            </div>
                            <div class="content">
                                <span class="years">2023</span>
                                <h4>Project Officer & Research Fellow</h4>
                                <span class="company">Malawi University of Science and Technology</span>
                            </div>
                        </div>
                        <!-- / END SINGLE RESUME DESIGN AREA -->
                        <!-- START SINGLE RESUME DESIGN AREA -->
                        <div class="resume-item wow fadeInUp delay-0-3s">
                            <div class="icon">
                                <i class="ri-book-line"></i>
                            </div>
                            <div class="content">
                                <span class="years">2020 - 2023</span>
                                <h4>Intern</h4>
                                <span class="company">LUANAR (Directorate of Research and Agribusiness Department)</span>
                            </div>
                        </div>
                        <!-- / END SINGLE RESUME DESIGN AREA -->
                    </div>
                </div>
                <!-- // END EXPERIENCE RESUME DESIGN AREA -->
                <!-- START EDUCATION RESUME DESIGN AREA -->
                <div class="col-xl-6 col-md-6">
                    <div class="experience-list">
                        <!-- START SINGLE RESUME DESIGN AREA -->
                        <div class="resume-item wow fadeInUp delay-0-3s">
                            <div class="icon">
                                <i class="ri-book-line"></i>
                            </div>
                            <div class="content">
                                <span class="years">2018 – 2020</span>
                                <h4>Agribusiness Lecture</h4>
                                <span class="company">Mwimba College of Agriculture</span>
                            </div>
                        </div>
                        <!-- / END SINGLE RESUME DESIGN AREA -->
                        <!-- START SINGLE RESUME DESIGN AREA -->
                        <div class="resume-item wow fadeInUp delay-0-3s">
                            <div class="icon">
                                <i class="ri-book-line"></i>
                            </div>
                            <div class="content">
                                <span class="years">2017 - 2018</span>
                                <h4>Marketing and Trade Officer</h4>
                                <span class="company">Farm Concern International</span>
                            </div>
                        </div>
                        <!-- / END SINGLE RESUME DESIGN AREA -->

                    </div>
                </div>
                <!-- // END EDUCATION RESUME DESIGN AREA -->
            </div>
        </div>
    </div>
</section>
<!-- / END RESUME EXPERIENCE DESIGN AREA -->
<!-- START CONTACT DESIGN AREA -->
<section id="contact" class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="section-title text-center wow fadeInUp delay-0-2s">
                    <p>contact</p>
                    <h2>Get in Touch with Me!</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-content-part  wow fadeInUp delay-0-2s">
                    <!-- START CONTACT SINGLEDESIGN AREA -->
                    <div class="single-contact wow fadeInUp" data-wow-delay=".2s">
                        <div class="contact-icon">
                            <i class="ri-map-pin-line"></i>
                        </div>
                        <h2>Address:</h2>
                        <p>CARD,
                            Lilongwe University of Agriculture and Natural Resources <br>
                            P. O. Box 219 <br>
                            Lilongwe, Malawi
                        </p>
                    </div>
                    <!-- / END CONTACT SINGLEDESIGN AREA -->
                    <!-- START CONTACT SINGLEDESIGN AREA -->
                    <div class="single-contact wow fadeInUp" data-wow-delay=".4s">
                        <div class="contact-icon">
                            <i class="ri-phone-line"></i>
                        </div>
                        <h2>contact number:</h2>
                        <a href="tel:+265888119947">+ 265 888 11 99 47</a>
                    </div>
                    <!-- / END CONTACT SINGLEDESIGN AREA -->
                    <!-- START CONTACT SINGLEDESIGN AREA -->
                    <div class="single-contact wow fadeInUp" data-wow-delay=".6s">
                        <div class="contact-icon">
                            <i class="ri-mail-line"></i>
                        </div>
                        <h2>Email Address:</h2>
                        <a href="mailto:pchimseu@luanar.ac.mw">pchimseu@luanar.ac.mw</a>
                        <a href="mailto:pkkchimseu@gmail.com">pkkchimseu@gmail.com</a>
                    </div>
                    <!-- / END CONTACT SINGLEDESIGN AREA -->
                </div>
            </div>
            <!-- START CONTACT FORM DESIGN AREA -->
            <div class="col-lg-8">
                <div class="contact-form contact-form-area wow fadeInUp delay-0-4s">
                    <form  class="contact-form"  action="{{route('send-message')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" id="name" name="name" class="form-control" value="" placeholder="Enter Your Name" required="" data-error="Please enter your Name" />
                                    <label for="name" class="for-icon"><i class="far fa-user"></i></label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control" value="" placeholder="Enter Your Email Address" required="" data-error="Please enter your Email" />
                                    <label for="email" class="for-icon"><i class="far fa-envelope"></i></label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" id="subject" name="subject" class="form-control" value="" placeholder="Enter Your Subject" required="" data-error="Please enter your Subject" />
                                    <label for="email" class="for-icon"><i class="far fa-envelope"></i></label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message">Your Message</label>
                                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write Your message" required="" data-error="Please Write your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <button type="submit" class="theme-btn">
                                        Send Me Message <i class="ri-mail-line"></i>
                                    </button>
                                    <div id="msgSubmit" class="hidden"></div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                @if($message=Session::get('success'))
                                    <p class="input-success">We have received your mail, We will get back to you soon!</p>
                                @endif
{{--                                <p class="input-error">Sorry, Message could not send! Please try again.</p>--}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- / END CONTACT FORM DESIGN AREA -->
        </div>
    </div>
</section>
<!-- / END CONTACT DESIGN AREA -->
<!-- START FOOTER DESIGN AREA -->
<footer class="main-footer">
    <div class="footer-bottom pt-50 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p>
                            Copyright <a href="{{route('home')}}">Patrick Kawaye</a> All
                            Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / END FOOTER DESIGN AREA -->
<!-- START SCROOL UP DESIGN AREA -->
<div class="progress-wrap cursor-pointer">
    <i class="ri-arrow-up-double-line"></i>
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- / END SCROOL UP DESIGN AREA -->
<!-- JQUERY JS -->
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<!-- BOOTSTRAP JS-->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- APPEAR JS -->
<script src="{{asset('assets/js/appear.min.js')}}"></script>
<!-- MAGNIFICANT JS -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- SLICK JS-->
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<!-- NICE SELECT JS-->
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<!-- IMAGE LOADER JS-->
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- ISOTOPE JS-->
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<!--  WOW ANIMATION JS-->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- SCRIPT JS-->
<script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>
