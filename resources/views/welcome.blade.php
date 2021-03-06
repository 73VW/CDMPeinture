<!doctype html>
<?php

//Variables
$brand = "CDM Peinture";
$services = "Prestations";
$portfolio = "Realisations";
$about = "À Propos";
$team = "Notre Équipe";
$contact = "Contact";

?>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CDM - Peinture</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/agency.css') }}">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
</head>
<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="/images/Logo_definitif.gif" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services"><?=$services?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio"><?=$portfolio?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about"><?=$about?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#team"><?=$team?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact"><?=$contact?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Bienvenue sur notre site internet!</div>
                <div class="intro-heading">Nous sommes ravis de vous intéresser</div>
                <a class="btn btn-xl js-scroll-trigger" href="#services">En savoir plus</a>
            </div>
        </div>
    </header>

    <!-- Services -->
    <section  class="bg-light" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?=$services?></h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                @include('realisation', ['title' => 'Peinture', 'subtitle' => '', 'img_path' => 'img/portfolio/01-thumbnail.jpg'])
                @include('realisation', ['title' => 'Plâtrerie', 'subtitle' => '', 'img_path' => 'img/portfolio/02-thumbnail.jpg'])
                @include('realisation', ['title' => 'Décoration', 'subtitle' => '', 'img_path' => 'img/portfolio/03-thumbnail.jpg'])
                @include('realisation', ['title' => 'Façades', 'subtitle' => '', 'img_path' => 'img/portfolio/04-thumbnail.jpg'])
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?=$portfolio?></h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                @include('realisation', ['title' => 'Threads', 'subtitle' => 'Illustration', 'img_path' => 'img/portfolio/01-thumbnail.jpg'])
                @include('realisation', ['title' => 'Explore', 'subtitle' => 'Graphic Design', 'img_path' => 'img/portfolio/02-thumbnail.jpg'])
                @include('realisation', ['title' => 'Finish', 'subtitle' => 'Identity', 'img_path' => 'img/portfolio/03-thumbnail.jpg'])
                @include('realisation', ['title' => 'Lines', 'subtitle' => 'Branding', 'img_path' => 'img/portfolio/04-thumbnail.jpg'])
                @include('realisation', ['title' => 'Southwest', 'subtitle' => 'Website Design', 'img_path' => 'img/portfolio/05-thumbnail.jpg'])
                @include('realisation', ['title' => 'Windows', 'subtitle' => 'Photography', 'img_path' => 'img/portfolio/06-thumbnail.jpg'])
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?=$about?></h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2017</h4>
                                    <h4 class="subheading">Lancement de l'entreprise</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Faites partie de notre histoire!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?=$team?></h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <span class="fa-stack fa-5x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-user-circle fa-stack-1x fa-inverse"></i>
                        </span>

                        <h4>Manuel Costa</h4>
                        <p class="text-muted">PDG</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <span class="fa-stack fa-5x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-user-circle fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4>Domingo Costa</h4>
                        <p class="text-muted">Responsable commercial</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <span class="fa-stack fa-5x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-user-circle fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4>Pedro Costa</h4>
                        <p class="text-muted">Webmaster</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?=$contact?></h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage" novalidate>
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-xl" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Peinture</h2>
                                <p class="item-intro text-muted">C'est ici que vous trouverez les informations sur nos spécialités concernant la peinture.</p>
                                <h3>Peinture à l'eau</h3>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                                <h3>Peinture anti graffitis</h3>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <h3>Peinture</h3>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Threads</li>
                                    <li>Category: Illustration</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fa fa-times"></i>
                                    Fermer le projet</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2>Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2017</li>
                                        <li>Client: Explore</li>
                                        <li>Category: Graphic Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fa fa-times"></i>
                                        Close Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 3 -->
            <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl"></div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here -->
                                        <h2>Project Name</h2>
                                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class="list-inline">
                                            <li>Date: January 2017</li>
                                            <li>Client: Finish</li>
                                            <li>Category: Identity</li>
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fa fa-times"></i>
                                            Close Project</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal 4 -->
                <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-dismiss="modal">
                                <div class="lr">
                                    <div class="rl"></div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 mx-auto">
                                        <div class="modal-body">
                                            <!-- Project Details Go Here -->
                                            <h2>Project Name</h2>
                                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                            <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                            <ul class="list-inline">
                                                <li>Date: January 2017</li>
                                                <li>Client: Lines</li>
                                                <li>Category: Branding</li>
                                            </ul>
                                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                <i class="fa fa-times"></i>
                                                Close Project</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal 5 -->
                    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="close-modal" data-dismiss="modal">
                                    <div class="lr">
                                        <div class="rl"></div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 mx-auto">
                                            <div class="modal-body">
                                                <!-- Project Details Go Here -->
                                                <h2>Project Name</h2>
                                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                                <ul class="list-inline">
                                                    <li>Date: January 2017</li>
                                                    <li>Client: Southwest</li>
                                                    <li>Category: Website Design</li>
                                                </ul>
                                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                    <i class="fa fa-times"></i>
                                                    Close Project</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal 6 -->
                        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="close-modal" data-dismiss="modal">
                                        <div class="lr">
                                            <div class="rl"></div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-8 mx-auto">
                                                <div class="modal-body">
                                                    <!-- Project Details Go Here -->
                                                    <h2>Project Name</h2>
                                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                                    <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                                    <ul class="list-inline">
                                                        <li>Date: January 2017</li>
                                                        <li>Client: Window</li>
                                                        <li>Category: Photography</li>
                                                    </ul>
                                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                        <i class="fa fa-times"></i>
                                                        Close Project</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bootstrap core JavaScript -->
                            <script src="{{ asset('js/jquery.js') }}"></script>
                            <script src="{{ asset('js/app.js') }}"></script>
                            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
                            <script src="{{ asset('js/jquery.easing.min.js') }}"></script>

                            <!-- Plugin JavaScript -->
                            <script src="{{ asset('js/agency/jqBootstrapValidation.js') }}"></script>
                            <script src="{{ asset('js/agency/contact_me.js') }}"></script>
                            <script src="{{ asset('js/agency/agency.min.js') }}"></script>


                        </body>

                        </html>
