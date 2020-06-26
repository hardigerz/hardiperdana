<?php
date_default_timezone_set("asia/bangkok");
error_reporting(0)
?>
<!DOCTYPE html>
<html lang="en">
<head><title>Eric Anthony</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Eric Anthony">
    <link rel="stylesheet" href="https://ericanthony.tech/assets_user/css/animate.css">
    <link rel="stylesheet" href="https://ericanthony.tech/assets_user/css/flexslider.css">
    <link rel="stylesheet" href="https://ericanthony.tech/assets_user/fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://ericanthony.tech/assets_user/css/bootstrap.css">
    <link rel="stylesheet" href="https://ericanthony.tech/assets_user/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">
    <link rel="shortcut icon" href="https://ericanthony.tech/assets_user/logo.png"/>
</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
<nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light" id="pb-navbar">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
        <a class="navbar-brand" href="#">Eric Anthony</a>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="" data-go="#section-home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="" data-go="#section-about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="" data-go="#section-portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="" data-go="#section-resume">Resume</a></li>
                <li class="nav-item"><a class="nav-link" href="" data-go="#section-contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<section class="site-hero"
         style="background-image: url(assets_user/images/home-bg.jpg);background-attachment: fixed;"
         id="section-home" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row intro-text align-items-center justify-content-center">
            <div class="col-md-10 text-center"><h1 class="site-heading site-animate">Hello, I'm <strong>Hardi
                        Perdana</strong></h1>
                <p class="lead site-subheading mb-4 site-animate">An android developer currently working
                    at <a
                            target="_blank"
                            href="http://www.thefusion.co.id">PT. Inovatif Digital Solusindo</a>.
                    I'm <?= date('Y') - 1994 ?> Years old with code enthusiasm</p>
                <p><a href="#section-about" class="smoothscroll btn btn-primary px-4 py-3">More On Me</a></p></div>
        </div>
    </div>
</section>
<section class="site-section" id="section-about">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0"><img src="assets_user/images/me.jpeg" style="width: 80%"
                                                            alt="Image placeholder"
                                                            class="img-fluid"></div>
            <div class="col-lg-5 pl-lg-5">
                <div class="section-heading"><h2>About <strong>Me</strong></h2></div>
                <p class="lead">I'm <?= date('Y') - 1994 ?> Years old. I
                    have <?= date('Y') - 2016 ?> years experiences in IT Industry </p>
                <p class="mb-5 "> Hi! I'm a Mobile developer with <?= date('Y') - 2018 ?> also I have experience in
                    banking industry and IT consultant firm for <?= date('Y') - 2015 ?>. I'm a Hard-worker, dicipline,
                    truthful, easy-going, have a high responsibility in what I'm doing, and also can work for team.
                </p>
                <p><a href="#section-contact" class="btn btn-primary px-4 py-2 btn-sm smoothscroll">Hire Me</a></p>
                <div class="LI-profile-badge" data-version="v1" data-size="medium" data-locale="in_ID"
                     data-type="vertical" data-theme="light" data-vanity="hardi-perdana-b4070068"><a
                            class="LI-simple-link"
                            href='https://id.linkedin.com/in/hardi-perdana-b4070068?trk=profile-badge'>Hardi Perdana</a>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-3 mb-3">
                <div class="section-heading"><h2>My <strong>Skills</strong></h2></div>
            </div>
            <div class="col-md-9">
                <div id="skill-1" class="skill"><h3>Android</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                             aria-valuemin="0" aria-valuemax="100"><span>0%</span></div>
                    </div>
                </div>
                <div id="skill-2" class="skill"><h3>Java</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                             aria-valuemin="0" aria-valuemax="100"><span>0%</span></div>
                    </div>
                </div>
                <div id="skill-3" class="skill"><h3>Git</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                             aria-valuemin="0" aria-valuemax="100"><span>0%</span></div>
                    </div>
                </div>
                <div id="skill-4" class="skill"><h3>Retrofit</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                             aria-valuemin="0" aria-valuemax="100"><span>0%</span></div>
                    </div>
                </div>
                <div id="skill-5" class="skill"><h3>Kotlin</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                             aria-valuemin="0" aria-valuemax="100"><span>0%</span></div>
                    </div>
                </div>
                <div id="skill-6" class="skill"><h3>XML</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                             aria-valuemin="0" aria-valuemax="100"><span>0%</span></div>
                    </div>
                </div>
                <div id="skill-7" class="skill"><h3>SQlite</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                             aria-valuemin="0" aria-valuemax="100"><span>0%</span></div>
                    </div>
                </div>
                <div id="skill-8" class="skill"><h3>Android Studio</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                             aria-valuemin="0" aria-valuemax="100"><span>0%</span></div>
                    </div>
                </div>
                <div id="skill-9" class="skill"><h3>Scrum</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                             aria-valuemin="0" aria-valuemax="100"><span>0%</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="site-section" id="section-portfolio">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center col-md-12"><h2>Featured <strong>Portfolio</strong></h2></div>
        </div>
        <div class="filters">
            <ul>
                <li class="active" data-filter="*">All</li>
                <li data-filter=".cms">Content Management System with Rest API</li>
                <li data-filter=".webapp">Web Application</li>
                <li data-filter=".compro">Company Profile</li>
                <li data-filter=".mobile">Fullstack Mobile</li>
            </ul>
        </div>
        <div class="filters-content">
            <div class="row grid">
                <div class="single-portfolio col-sm-4 all compro">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <a href="https://thefusion.co.id" target="_blank" title="Click for more info!"><img
                                        class="image img-fluid" src="assets_user/porto/1.JPG" alt=""></a></div>
                    </div>
                    <div class="p-inner"><h4>TheFusion's Company Profile with Content Management System</h4>
                        <div class="cat">Company Profile</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all cms">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <a href="assets_user/porto/2.JPG" title="Click for more info!" target="_blank"> <img
                                        class="image img-fluid" src="assets_user/porto/2.JPG" alt=""> </a></div>
                    </div>
                    <div class="p-inner"><h4>Keraton's Rest API with CMS</h4>
                        <div class="cat">Content Management System with Rest API</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all webapp">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <a>
                                <video controls class="image img-fluid">
                                    <source src="portofolio/procurement.mp4" type="video/mp4">
                                </video>
                            </a></div>
                    </div>
                    <div class="p-inner"><h4>Procurement, Marketplace's admin web application with Raja Ongkir API</h4>
                        <div class="cat">Content Management System Web Application</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all webapp">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <a>
                                <video controls class="image img-fluid">
                                    <source src="portofolio/uh_shop.mp4" type="video/mp4">
                                </video>
                            </a></div>
                    </div>
                    <div class="p-inner"><h4>Eccomerce with inventory web application as CMS</h4>
                        <div class="cat">Eccomerce with inventory</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all webapp">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <a href="assets_user/porto/sosmed.png" target="_blank" title="Click for more info!"><img
                                        class="image img-fluid" src="assets_user/porto/sosmed.png" alt=""></a></div>
                    </div>
                    <div class="p-inner"><h4>Sosial Media</h4>
                        <div class="cat">
                            <div style="text-align: left;color:black">
                                Instagram Clone with :
                                <ul style="padding-left: 0">
                                    <li>Realtime Chat and Realtime Notifications using Socket IO</li>
                                    <li>Google emoticons for comment, chat and post's caption using emoji-market</li>
                                    <li>Searching with Elastic search</li>
                                    <li>Backend with Express JS</li>
                                    <li>Frontend Using React</li>
                                    <li>Tag people with autocomplete as well</li>
                                </ul>
                            </div>
                            Source code: <a href="https://github.com/ericanthonywu/TA-Purwadhika">My GitHub</a>
                        </div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all compro">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <a href="https://pt-perkebunan-sumut.co.id/" target="_blank"
                               title="Click for more info!"><img
                                        class="image img-fluid" src="assets_user/porto/sumut.png" alt=""></a></div>
                    </div>
                    <div class="p-inner"><h4>PT. Perkebunan Sumut's company profile with Content Management System</h4>
                        <div class="cat">
                            Company profile with CMS using laravel and jquery
                        </div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all cms">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <a href="https://7queue.net" title="Click for more info!" target="_blank"> <img
                                        class="image img-fluid" src="assets_user/porto/7queue.png" alt=""> </a></div>
                    </div>
                    <div class="p-inner"><h4>7Queue's Rest API with CMS</h4>
                        <div class="cat">Content Management System with Rest API</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all mobile">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <a href="https://play.google.com/store/apps/details?id=com.jargas&hl=in"
                               title="Click for more info!" target="_blank"> <img
                                        class="image img-fluid" src="assets_user/porto/jargas.jpg" alt=""> </a></div>
                    </div>
                    <div class="p-inner"><h4>PGN's internal Application</h4>
                        <div class="cat">Mobile Application for Surveying</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all mobile">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <a href="http://tailandtale.com" title="Click for more info!" target="_blank"> <img
                                        class="image img-fluid" src="assets_user/porto/TNT.jpg" alt=""> </a></div>
                    </div>
                    <div class="p-inner"><h4>Tail and Tales application</h4>
                        <div class="cat">Booking system for vet and user with realtime chat using socket IO</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="site-section bg-light " id="section-resume">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="section-heading text-center"><h2>My <strong>Resume</strong></h2></div>
            </div>
            <div class="col-md-6"><h2 class="mb-5">Education</h2>
                <a href="http://www.smkimmanuel.sch.id" target="_blank">
                    <div class="resume-item mb-4"><span class="date"><span class="icon-calendar"></span> July 2016 - March 2019</span>
                        <h3>SMK Kristen Immanuel Pontianak</h3> <span class="school">Jurusan Teknologi Jaringan</span>
                    </div>
                </a>
                <a href="https://purwadhika.com" target="_blank">
                    <div class="resume-item mb-4"><span class="date"><span class="icon-calendar"></span> July 2019 - November 2019</span>
                        <h3>Purwadhika, Startup and Coding School</h3> <span class="school">Web and mobile developer Job Connector Program</span>
                    </div>
                </a>
                <a href="http://www.tarumanagara.ac.id" target="_blank">
                    <div class="resume-item mb-4"><span class="date"><span class="icon-calendar"></span> Aug 2020 - Now </span>
                        <h3>Universitas Tarumanegara</h3> <span class="school">Bachelor of Information Technology</span>
                    </div>
                </a>
            </div>
            <div class="col-md-6"><h2 class="mb-5">Experience</h2>
                <a href="https://thefusion.co.id" target="_blank">
                    <div class="resume-item mb-4"><span class="date"><span class="icon-calendar"></span> April 2019 - August 2019</span>
                        <h3>Backend Developer</h3>
                        <p>Making CMS and RestAPI for android application</p><span
                                class="school">PT Inovatif Digital Solusindo</span></div>
                </a>
                <a href="http://www.danamon.co.id" target="_blank">
                    <div class="resume-item mb-4"><span class="date"><span class="icon-calendar"></span> Jan 2020 - Mar 2020 </span>
                        <h3>HC Branding and Communication</h3>
                        <p>Researcher analyst about virtual job fair, UX Researcher, UX Design, Frontend developer </p>
                        <span
                                class="school">PT Bank Danamon Indonesia, TBK</span></div>
                </a>
                <a href="http://www.halodoc.com" target="_blank">
                    <div class="resume-item mb-4"><span class="date"><span class="icon-calendar"></span> Mar 2020 - Now </span>
                        <h3>Senior Fullstack Developer</h3>
                        <span class="school">Halodoc ID</span></div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="site-section bg-light" id="section-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="section-heading text-center"><h2>Wanna <strong>Start Work</strong> With Me?</h2></div>
            </div>
            <div class="col-md-7 mb-5 mb-md-0">
                <form class="site-form"><h3 class="mb-5">Get In Touch</h3>
                    <div class="form-group"><input type="text" class="form-control px-3 py-4" name="name" id="name"
                                                   placeholder="Your Name"> <span id="nameerror"
                                                                                  style="color: #ff5a37;display: none;">I dont know who you are if you don't fill this :(</span>
                    </div>
                    <div class="form-group"><input type="text" class="form-control px-3 py-4" name="email" id="email"
                                                   placeholder="Your Email"> <span id="emailerror"
                                                                                   style="color: #ff5a37;display: none;">How can i contact you if you don't entered the correct email :(</span>
                    </div>
                    <div class="form-group mb-5"><textarea class="form-control px-3 py-4" style="overflow: hidden;"
                                                           cols="30" name="message" id="message" rows="10"
                                                           placeholder="Write a Message"></textarea> <span
                                id="messageerror" style="color: #ff5a37;display: none;">I need to know your purpose in contacting me, so please fill it :(</span>
                    </div>
                    <div class="form-group"><input type="submit" class="btn btn-primary px-4 py-3" value="Send Message">
                    </div>
                </form>
            </div>
            <div class="col-md-5 pl-md-5"><h3 class="mb-5">My Contact Details</h3>
                <ul class="site-contact-details">
                    <li><span class="text-uppercase"><i class="icon icon-envelope"></i> &nbsp; Email</span> <a
                                href="mailto:ericanthonywu89@gmail.com" class="text-primary" target="_blank"
                                rel="nofollow">ericanthonywu89@gmail.com</a></li>
                    <?php
                    /*
                    <li><span class="text-uppercase"><i class="icon icon-whatsapp"></i> &nbsp; Whatsapp</span> <a
                                href="https://api.whatsapp.com/send?phone=6281236391375" target="_blank" rel="nofollow"
                                class="text-primary">+6281236391375</a></li>
                    <li><span class="text-uppercase"><i class="icon icon-phone2"></i> &nbsp; Phone</span> <a
                                href="tel:+6281236391375" target="_blank" rel="nofollow" class="text-primary">+6281236391375</a>
                    </li>
                    */
                    ?>
                    <li><span class="text-uppercase"><i class="icon icon-telegram"></i> &nbsp; Telegram</span> <a
                                href="https://t.me/EricAnthonywu/" rel="nofollow" target="_blank">Eric Anthony </a></li>
                    <li><span class="text-uppercase"><img src="https://img.icons8.com/ios/50/000000/line-me.png"
                                                          draggable="false" class="icon" width="17" height="17">&nbsp;Line ID</span>
                        <a href="line://ti/p/ericyahoo" rel="nofollow" target="_blank">ericyahoo</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<footer class="site-footer">
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-12 text-center"><p><a href="https://linkedin.com/in/ericanthonywu/"
                                                     target="_blank"
                                                     class="social-item"><span class="icon-linkedin"></span></a> <a
                            href="https://instagram.com/eric_anthony_wuu" target="_blank" class="social-item"><span
                                class="icon-instagram2"></span></a></p></div>
        </div>
        <div class="row"><p class="col-12 text-center"> Copyright &copy; 2018 - <?= date('Y') ?> All rights
                reserved </p></div>
    </div>
</footer>
<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
<script src="https://ericanthony.tech/assets_user/js/vendor/jquery.min.js"></script>
<script src="https://ericanthony.tech/assets_user/js/vendor/popper.min.js"></script>
<script src="https://ericanthony.tech/assets_user/js/vendor/bootstrap.min.js"></script>
<script src="https://ericanthony.tech/assets_user/js/vendor/jquery.easing.1.3.js"></script>
<script src="https://ericanthony.tech/assets_user/js/vendor/jquery.stellar.min.js"></script>
<script src="https://ericanthony.tech/assets_user/js/vendor/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="https://ericanthony.tech/assets_user/js/custom.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150961132-1"></script>
<script>
    console.clear()
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-150961132-1');
</script>

</body>
</html>
