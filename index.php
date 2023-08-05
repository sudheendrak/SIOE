<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="a School of Industry Oriented Engineering and Solutions, Academics, Education">
    <meta name="author" content="Sudheendra">


    <title>a School of Industry Oriented Engineering</title>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="js/Nivo-Lightbox-master/nivo-lightbox.css" rel="stylesheet" type="text/css">
    <link href="js/Nivo-Lightbox-master/themes/default/default.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <link rel="stylesheet" media="screen" href="css/aileron.css" type="text/css" />
    <!-- Fonts -->

    <link href="//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Animation-->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="js/vegas/vegas.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!--<body data-spy="scroll" data-target=".main-nav">-->

<body>
    <!--    <div class="row">          
        <div class="col-lg-12 text-center">
          <img class="img-responsive img-full" src="img/office.jpg" alt="">
        </div>
    </div>

    <div class="brand">
        <img src="images/logo_new.png" alt="logo">
            a School of <span>Industry Oriented Engineering</span>-->
    <!--  <hr class="tagline-divider">
           <h2>
                <small>
                    <strong>Aim To Be Engineer!</strong>
                </small>
            </h2>
      </div>-->

    <div class="row">
        <div class="navbar navbar-default main-nav" id="main-navid" role="navigation">
            <div class="brand col-md-3 col-sm-3 ">
                <a href="index.php"> <img src="images/logo_new.png" alt=""></a>
                <!--a School of <span>Industry Oriented Engineering</span>-->
                <!--  <hr class="tagline-divider">
                <h2>
                        <small>
                            <strong>Aim To Be Engineer!</strong>
                        </small>
                    </h2>-->
            </div>
            <div class="container ">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand"> <img class="img-responsive" src="images/logo_menu.png" alt=""></a>
                    <button class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div> <!-- navbar-header end -->
                <!-- main nav  -->

                <div class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home </a></li>
                        <li><a href="aboutus.html"><span class="glyphicon glyphicon-user"></span>About Us</a></li>
                        <li><a href="offerings.html"><span class="glyphicon glyphicon-education"></span>Offerings </a></li>
                        <li><a href="benefits.html"><span class="glyphicon glyphicon-briefcase"></span>Benefits </a></li>
                        <li><a href="testimonial.php"><span class="glyphicon glyphicon-check"></span>Testimonials </a></li>
                        <li><a href="contact.html"><span class="glyphicon glyphicon-envelope"></span>Contact us </a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </div>
    </div>

    <!-- <section id="section-banner">-->
    <div class="row ">
        <div class=" corner text-justify">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
                <!-- Indicators -->
                <?php
                // $images=preg_grep('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $files);
                $count = 0;
                if ($handle = opendir('images/slider')) {
                    while (false !== ($entry = readdir($handle))) {
                        $files[] = $entry;
                    }
                    sort($files);
                    $images = preg_grep('/\.(jpg|jpeg|png|gif)$/i', $files);
                    $count = count($images);
                    echo '<ol class="carousel-indicators">';
                    echo "\r\n";
                    for ($i = 0; $i < $count; $i++) {
                        echo '<li data-target="#myCarousel" data-slide-to="' . $i . '"></li>';
                        echo "\r\n";
                    }
                    echo '</ol>';
                    echo "\r\n";
                    echo '<!-- Wrapper for slides -->';
                    echo '<div class="carousel-inner" role="listbox">';
                    echo "\r\n";
                    $count = 0;
                    foreach ($images as $image) {
                        $count++;
                        if ($count == 1) {
                            echo '<div class="item active">
                                                <img src="images/slider/' . $image . '" >
                                        </div>';
                        } else {
                            echo '<div class="item">
                                                <img src="images/slider/' . $image . '">
                                            </div>';
                        }
                        echo "\r\n";
                    }
                    closedir($handle);
                }
                ?>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="corner col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12  text-justify animated fadeInLeft">
            <div class="popover-title">
                ABOUT THE INITIATIVE
            </div>
            <hr class="visible-xs">
            <h2 class="intro-text mobile text-center">ABOUT THE INITIATIVE</h2>
            <hr class="visible-xs">
            <div class="rounded col-md-9 col-sm-9 col-lg-9 col-xl-6 col-xxl-6">
                <p>
                    <b>‘a School of Industry Oriented Engineering and Solutions’</b>- an initiative conceptualized in May 2016 and officially established in June 2018. Our primary aim is to mentor engineering students, graduates, and working professionals in Core Engineering domains. The penultimate purpose of this nation- building activity is to guide and mentor passionate engineers by according relevant knowledge of engineering fundamentals and hands-on experience as per the global industry standards and requirements.
                </p>
                <p>Design is not just an activity of using CAD or CAE software. Design is a process of understanding the effect of loads, selecting the materials, determining dimensions, and validating them through analysis. We adopt a unique methodology to coach participants – from the fundamentals to various breath-taking innovations – through highly interactive brainstorming sessions. This inculcates a mind-set to make the designs and products better for the future, which will remain the key objective of our establishment.
                <p>Our programs have helped enhance participants' self-confidence and prepared them to seek employment in core engineering companies. We believe that to have a successful career; the focus should be on planning and preparing for long-term employment rather than just landing a job.
                <p class="readeraction">
                    <i> <strong>If you are an engineering student/ graduate/ professional passionate about building a successful career in design engineering, our team would be glad to extend the necessary mentorship through our value-added programs.
                        </strong></i>
                </p>
            </div>
            <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 col-xxl-3 text-center homepagesidebar ">
                <br><br>
                <a class="nlb" data-lightbox-gallery="background" href="images/bacground.png">
                    <img src="images/bacground.png" alt="Backgroound" class="center-block img-responsive rounded img-center1">
                </a>
                <br><br>
                <a class="nlb" data-lightbox-gallery="background" href="images/whychoose1.png">
                    <img src="images/whychoose1.png" alt="Backgroound" class="center-block img-responsive rounded img-center1">
                </a></br></br>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="corner col-md-12 col-sm-12 text-justify animated fadeInLeft">
            <div class=" popover-title">
                WHY CHOOSE US ?
            </div>
            <hr class="visible-xs">
            <h2 class="intro-text mobile text-center">WHY CHOOSE US ?</h2>
            <hr class="visible-xs">
            <div class=" col-md-12 col-sm-12 text-justify">
                <div class="rounded col-md-9 col-sm-12">
                    <p>Our team consists of industry experts who have extensive experience working for numerous International and Domestic Programs in the Aerospace and Mechanical domain. We are committed to delivering high-quality mentorship programs consisting of contemporary technical concepts coupled with the best practices taught via solving real-world problems as per the global industry standards and customer expectations. Our team is at the forefront of offering unique programs in crucial Mechanical and Aerospace industries.
                    </p>

                </div>
                <div class="rounded col-md-3 col-sm-12">

                </div>
            </div>
            <div class=" col-md-12 col-sm-12 text-justify">
                <div class="rounded col-md-9 col-sm-12  valign">
                    <!--<p><strong>How do our programs benefit ongoing  Engineering Students?</strong></br>
                        </p>The core engineering job expectations in the Aerospace and Mechanical domains are very different from IT job requirements. The gap between 'Academia and Industry' is quite significant compared  to what the field  requires; Beginning the preparations to enter the industry during the academic period will prove to be a substantial  advantage for engineering students. This will help the participants gain a significant head-start in building their career in the Design Engineering domain.
                        </p> 
                        </p><strong>How do our programs benefit recent Engineering graduates?</strong></br>
                        </p>The hiring process of engineering companies has undergone a massive shift when compared to a few years back. Design organizations are keen on hiring graduates who know the  day-to-day practical challenges arising in the projects and can deliver solutions successfully. The current hiring trend  throws light on the  fact that engineering companies are hesitant to invest  their time and money in training the hired candidates. They prefer hiring a ready-to-work/ job-ready graduate (a  ‘Beginner’) over a fresh-out-of-college graduate who has no clue  how to work.
			</p>Our Mentorship programs help transform a ‘Fresher’ into a ‘Beginner’, which will act as a catalyst in assisting  them in seeking  employment in organizations, thus gaining a competitive edge.

                        </p>
                   <p><strong>Why should working professionals consider us?</strong></br>
                        Due to the challenging nature of projects/work being awarded to engineering companies today, experienced working professionals need to demonstrate new technical expertise and the required skills.  Our programs help professionals  strengthen their technical knowledge, build sufficient confidence to handle crucial projects, and deliver them successfully. Consistent performance and successful delivery of projects will garner an  immeasurable reputation at their organization, ensuring a long-term successful career.
                    </p>-->
                    <div class="rounded">
                        <p class="" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <strong>How do our programs benefit on-going Engineering Students?</strong>
                            <img alt="Click here" src="images/clickhere.png" class="visible-lg-inline visible-md-inline visible-sm-inline visible-xs-inline img-responsive clickhere" />
                        </p>
                        <!--<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                              Click to Expand
                            </button>-->
                        <div class="collapse" id="collapseExample1">
                            <p class="">
                                The core engineering job expectations in the Aerospace and Mechanical domains are very different from IT job requirements. The gap between 'Academia and Industry' is quite significant compared to what the field requires; Beginning the preparations to enter the industry during the academic period will prove to be a substantial advantage for engineering students. This will help the participants gain a significant head-start in building their career in the Design Engineering domain.
                            </p>
                        </div>
                    </div>
                    <div class="rounded">
                        <p class="" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <strong>How do our programs benefit recent Engineering graduates?</strong>
                            <img alt="Click here" src="images/clickhere.png" class="visible-lg-inline visible-md-inline visible-sm-inline visible-xs-inline img-responsive clickhere" />
                        </p>
                        <!--<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                              Click to Expand
                            </button>-->
                        <div class="collapse" id="collapseExample2">
                            <p>
                                The hiring process of engineering companies has undergone a massive shift when compared to a few years back. Design organizations are keen on hiring graduates who know the day-to-day practical challenges arising in the projects and can deliver solutions successfully. The current hiring trend throws light on the fact that engineering companies are hesitant to invest their time and money in training the hired candidates. They prefer hiring a ready-to-work/ job-ready graduate (a ‘Beginner’) over a fresh-out-of-college graduate who has no clue how to work.
                            </p>
                            <p>
                                Our Mentorship programs help transform a ‘Fresher’ into a ‘Beginner’, which will act as a catalyst in assisting them in seeking employment in organizations , thus gaining a competitive edge.
                            </p>
                        </div>
                    </div>
                    <div class="rounded">
                        <p class="" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <strong>How do our programs benefit students aspiring to pursue MS in Foreign Universities?</strong>
                            <img alt="Click here" src="images/clickhere.png" class="visible-lg-inline visible-md-inline visible-sm-inline visible-xs-inline img-responsive clickhere" />
                        </p>
                        <!--<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                              Click to Expand
                            </button>-->
                        <div class="collapse" id="collapseExample3">
                            <p>
                                The number of students going abroad to pursue their masters in various fields has increased year on year. However, the students planning on pursuing their Masters in any of the core engineering design specializations - be it Mechanical or Aerospace Engineering - should do enough groundwork and preparation on relevant technical knowledge and competencies even before thinking about applying to Universities.
                            </p>
                            <p>
                                The curriculum and course structure for a Master's in foreign universities are mainly different from students' exposure during their undergraduate studies. Apart from the cultural challenges, students also face difficulties knowing what they should do during studies and how to plan for their careers after completing their Master's Degree to achieve success in the domain.
                            </p>
                            <p>
                                Our programs help students gain widespread knowledge and exposure towards practicing applicative engineering, which ultimately aids students in selecting the right internship and career opportunities.
                            </p>
                        </div>
                    </div>
                    <div class="rounded">
                        <p class="" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <strong>How do our programs benefit Working Professionals?</strong>
                            <img alt="Click here" src="images/clickhere.png" class="visible-lg-inline visible-md-inline visible-sm-inline visible-xs-inline img-responsive clickhere" />
                        </p>
                        <!--<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                              Click to Expand
                            </button>-->
                        <div class="collapse" id="collapseExample4">
                            <p>
                                Due to the challenging nature of projects/work being awarded to engineering companies today, experienced working professionals need to demonstrate new technical expertise and the required skills. Our programs help professionals strengthen their technical knowledge, build sufficient confidence to handle crucial projects, and deliver them successfully. Consistent performance and successful delivery of projects will garner an immeasurable reputation at their organization, ensuring a long-term successful career.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="rounded col-md-3 col-sm-12 homepagesidebar">
                    <a class="nlb valign" data-lightbox-gallery="whychooseus" href="images/whychoose2.png" title="Level of Learning">
                        <img src="images/whychoose2.png" alt="Our Methodology" class="center-block img-responsive rounded">
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="corner col-md-12 col-sm-12 text-justify animated fadeInLeft">
            <div class=" popover-title">
                TESTIMONIALS
            </div>
            <hr class="visible-xs">
            <h2 class="intro-text mobile text-center">TESTIMONIALS</h2>
            <hr class="visible-xs">
            <div class="rounded">
                <div class="cover-container">
                    <figure>
                        <ul class="nospace clear">
                            <li class="testimonial">
                                <a class="nlb" data-lightbox-gallery="homepage" href="images/testimonials/1.png">
                                    <img class="borderedbox" src="images/testimonials/1.png" alt="">
                                </a>
                            </li>
                            <li class="testimonial">
                                <a class="nlb" data-lightbox-gallery="homepage" href="images/testimonials/9.png">
                                    <img class="borderedbox" src="images/testimonials/9.png" alt="">
                                </a>
                            </li>
                            <li class="testimonial">
                                <a class="nlb" data-lightbox-gallery="homepage" href="images/testimonials/13.png">
                                    <img class="borderedbox" src="images/testimonials/13.png" alt="">
                                </a>
                            </li>
                            <li class="testimonial">
                                <a class="nlb" data-lightbox-gallery="homepage" href="images/testimonials/21.jpg">
                                    <img class="borderedbox" src="images/testimonials/21.jpg" alt="">
                                </a>
                            </li>
                            <li class="testimonial">
                                <a class="nlb" data-lightbox-gallery="homepage" href="images/testimonials/2.png">
                                    <img class="borderedbox" src="images/testimonials/2.png" alt="">
                                </a>
                            </li>

                        </ul>
                        <figcaption></figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="corner col-lg-12 animated fadeInLeft">
                <div class="text-center">
                    <div class="copyright">Copyright &copy; - All Rights Reserved - a School of Industry Oriented Engineering & Solutions</div>
                    <ul class="socail-link list-inline">
                        <li><a target="_blank" href="https://www.linkedin.com/company/a-school-of-industry-oriented-engineering-and-solutions/"><i class="fa fa-linkedin-square fa-3x"></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/channel/UCd9VCqzlUJku6JlOSBTEoXw/"><i class="fa fa-youtube-square fa-3x"></i></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/aSchoolofIndustryOrientedEngineering/"><i class="fa fa-facebook-official fa-3x"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/industry_oriented_engineering/"><i class="fa fa-instagram fa-3x"></i></a></li>
                    </ul>
                    <div class="fl_right">
                        <p>Developed By <a target="_blank" href="http://services.naagandige.net/" title="Web Services">Anagatha</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div>
        <!--Add the following script at the bottom of the web page (before </body></html>)-->
        <script type="text/javascript">
            function add_chatinline() {
                var hccid = 42405718;
                var nt = document.createElement("script");
                nt.async = true;
                nt.src = "https://mylivechat.com/chatinline.aspx?hccid=" + hccid;
                var ct = document.getElementsByTagName("script")[0];
                ct.parentNode.insertBefore(nt, ct);
            }
            add_chatinline();
        </script>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Anagata",
            "url": "\/\/old.naagandige.net",
        }
    </script>
    <script>
        $(document).ready(function() {
            $('a').nivoLightbox();
        });
        $('a').nivoLightbox({
            // The effect to use when showing the lightbox
            // fade, fadeScale, slideLeft, slideRight, slideUp, slideDown, fall
            effect: 'fade',
            // The lightbox theme to use
            theme: 'default',
            // Enable/Disable keyboard navigation
            keyboardNav: true,
            // Click image to close
            clickImgToClose: false,
            // Click overlay to close
            clickOverlayToClose: true,
            // Callback functions
            onInit: function() {},
            beforeShowLightbox: function() {},
            afterShowLightbox: function(lightbox) {},
            beforeHideLightbox: function() {},
            afterHideLightbox: function() {},
            beforePrev: function(element) {},
            onPrev: function(element) {},
            beforeNext: function(element) {},
            onNext: function(element) {},
            // Error message
            errorMessage: 'The requested content cannot be loaded. Please try again later.'
        });
    </script>
    <script src="js/Nivo-Lightbox-master/nivo-lightbox.min.js"></script>
    <!--<script src="js/vegas/vegas.min.js"></script>
<script src="js/background_slides.js"></script>-->
    <script src="js/jquery.sticky.js"></script>
    <script>
        $(".main-nav").sticky();
        $(".valign").css({
            'margin-top': ($(".valign1").height() + 'px')
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113860701-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-113860701-1');
    </script>
</body>

</html>