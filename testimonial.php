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
    <link href="css/animate.css" rel="stylesheet" >
    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/customstyle.css" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="css/aileron.css" type="text/css"/>
    <link href="js/Nivo-Lightbox-master/nivo-lightbox.css" rel="stylesheet" type="text/css">
    <link href="js/Nivo-Lightbox-master/themes/default/default.css" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  </head>

<body data-spy="scroll" data-target=".main-nav">
            <!--<div class="row">
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-full" src="img/office.jpg1" alt="">
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
          <div class="navbar navbar-default main-nav" id="scroll" role="navigation" >
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
              <div class="container " >
                <div class="navbar-header">
                  <a href="#" class="navbar-brand"> <img src="images/logo_menu.png" alt=""></a>
                  <button class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>  <!-- navbar-header end -->
                <!-- main nav  -->

                <div class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
                <ul class="nav navbar-nav navbar-left">
                        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home </a></li>
                        <li><a href="aboutus.html"><span class="glyphicon glyphicon-user"></span>About Us</a></li>
                        <li><a href="offerings.html"><span class="glyphicon glyphicon-education"></span>Offerings </a></li>
                        <li><a href="benefits.html"><span class="glyphicon glyphicon-briefcase"></span>Benefits </a></li>
                        <li class="active"><a href="testimonial.php"><span class="glyphicon glyphicon-check"></span>Testimonials</a></li>
                        <li><a href="contact.html"><span class="glyphicon glyphicon-envelope"></span>Contact us </a></li>
                      </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </div>
        </div>     
        <div class="row">
            <div class="corner col-md-12 col-sm-12 text-justify">
              <div class="col-md-12 col-sm-12 popover-title">
                Long-Term Programs
              </div>
              <hr class="visible-xs">
              <h2 class="intro-text mobile text-center">Long-Term Programs</h2>
              <hr class="visible-xs">
              <div class="col-lg-12 text-center">
                  <div class="rounded">
                        <div class="cover-container">
                          <figure>
                            <ul class="nospace clear">
                                <?php
                                  $count = 0;
                                  $files = [];
                                  if ($handle = opendir('images/testimonials/Long-Term')) {
                                    while (false !== ($entry = readdir($handle))) {
                                        $files[] = $entry;
                                    }
                                    sort($files);
                                    $images=preg_grep('/\.(jpg|jpeg|png|gif)$/i', $files);
                                    $count = count($images);
                                    foreach($images as $image)
                                    {
                                        $count++;
                                        echo '<li class="testimonial page">
                                                <a class="nlb" data-lightbox-gallery="longterm" href="images/testimonials/Long-Term/'.$image.'">
                                                    <img class="borderedbox" src="images/testimonials/Long-Term/'.$image.'" alt="">
                                                </a>
                                            </li>';
                                        echo "\r\n";
                                    }
                                    closedir($handle);
                                  }
                                ?>
                            </ul>
                            <figcaption></figcaption>
                          </figure>
                        </div>
                  </div>
              </div>
            </div>
        </div> 
        <div class="row">
            <div class="corner col-md-12 col-sm-12 text-justify">
              <div class="col-md-12 col-sm-12 popover-title">
                Short-Term Programs
              </div>
              <hr class="visible-xs">
              <h2 class="intro-text mobile text-center">Short-Term Programs</h2>
              <hr class="visible-xs">
              <div class="col-lg-12 text-center">
                  <div class="rounded">
                        <div class="cover-container">
                          <figure>
                          <ul class="nospace clear">
                            <?php
                                  $count = 0;$files = [];
                                  if ($handle = opendir('images/testimonials/Short-Term')) {
                                    while (false !== ($entry = readdir($handle))) {
                                        $files[] = $entry;
                                    }
                                    sort($files);
                                    $images=preg_grep('/\.(jpg|jpeg|png|gif)$/i', $files);
                                    $count = count($images);
                                    foreach($images as $image)
                                    {
                                        $count++;
                                        echo '<li class="testimonial page">
                                                <a class="nlb" data-lightbox-gallery="shortterm" href="images/testimonials/Short-Term/'.$image.'" >
                                                    <img class="borderedbox" src="images/testimonials/Short-Term/'.$image.'" alt="">
                                                </a>
                                            </li>';
                                        echo "\r\n";
                                    }
                                    closedir($handle);
                                  }
                              ?>
                          </ul>
                          <figcaption></figcaption>
                          </figure>
                        </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="corner col-md-12 col-sm-12 text-justify">
              <div class="col-md-12 col-sm-12 popover-title">
                Academic Internship Program
              </div>
              <hr class="visible-xs">
              <h2 class="intro-text mobile text-center">Academic Internship Program</h2>
              <hr class="visible-xs">
              <div class="col-lg-12 text-center">
                  <div class="round">
                        <div class="cover-container">
                          <figure>
                          <ul class="nospace clear">
                            <?php
                                  $count = 0;$files = [];
                                  if ($handle = opendir('images/testimonials/Academic_Internship')) {
                                    while (false !== ($entry = readdir($handle))) {
                                        $files[] = $entry;
                                    }
                                    sort($files);
                                    $images=preg_grep('/\.(jpg|jpeg|png|gif)$/i', $files);
                                    $count = count($images);
                                    foreach($images as $image)
                                    {
                                        $count++;
                                        echo '<li class="testimonial page">
                                                <a class="nlb" data-lightbox-gallery="academic" href="images/testimonials/Academic_Internship/'.$image.'">
                                                    <img class="borderedbox" src="images/testimonials/Academic_Internship/'.$image.'" alt="">
                                                </a>
                                            </li>';
                                        echo "\r\n";
                                    }
                                    closedir($handle);
                                  }
                              ?>
                          </ul>
                          <figcaption></figcaption>
                          </figure>
                        </div>
                  </div>
              </div>
            </div>
          </div>

          <div class="row animated fadeInLeft">
                <div class="corner col-md-12 col-sm-12 text-justify">
                    <div class="popover-title">
                        VIDEO FEEDBACK
                    </div>
                    <hr class="visible-xs">
                    <h2 class="intro-text mobile text-center">VIDEO FEEDBACK</h2>
                    <hr class="visible-xs">
                    <div class="rounded col-md-12 col-sm-12">
                        <div class="col-md-4 col-sm-4 col-lg-4">
                          <iframe height="300px" src="https://www.youtube.com/embed/SSojb2YMFog" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-4 col-sm-4 col-lg-4">
                          <iframe height="300px" src="https://www.youtube.com/embed/peu7vWvVF8M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-4 col-sm-4 col-lg-4">
                          <iframe height="300px" src="https://www.youtube.com/embed/TmB3oMhi9ww" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
          
    <footer>
      <div class="container">
        <div class="row rollOut">
            <div class="col-lg-12 text-center">
                    <div class="copyright">Copyright &copy; - All Rights Reserved - a School of Industry Oriented Engineering & Solutions</div>
                    <ul class="socail-link list-inline">
                        <li><a target="_blank" href="https://www.linkedin.com/company/a-school-of-industry-oriented-engineering-and-solutions/"><i class="fa fa-linkedin-square fa-3x"></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/channel/UCd9VCqzlUJku6JlOSBTEoXw/"><i class="fa fa-youtube-square fa-3x"></i></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/aSchoolofIndustryOrientedEngineering/"><i class="fa fa-facebook-official fa-3x"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/industry_oriented_engineering/"><i class="fa fa-instagram fa-3x"></i></a></li>
                    </ul>
                <div class="fl_right">Developed By <a target="_blank" href="http://services.naagandige.net/" title="Web Services">Anagatha</a> </div>
            </div>
        </div>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/Nivo-Lightbox-master/nivo-lightbox.min.js"></script>
    <script>
      $(document).ready(function(){
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
       onInit: function(){},
       beforeShowLightbox: function(){},
       afterShowLightbox: function(lightbox){},
       beforeHideLightbox: function(){},
       afterHideLightbox: function(){},
       beforePrev: function(element){},
       onPrev: function(element){},
       beforeNext: function(element){},
       onNext: function(element){},
       // Error message
       errorMessage: 'The requested content cannot be loaded. Please try again later.'
     });
   </script>
   
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script>
        $(".main-nav").sticky();
   </script>
    

    <script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "Organization",
      "name" : "Anagata",
      "url" : "\/\/old.naagandige.net",
    }
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113860701-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-113860701-1');
</script>
<div>
            <!--Add the following script at the bottom of the web page (before </body></html>)-->
            <script type="text/javascript">function add_chatinline(){var hccid=42405718;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
                add_chatinline();</script>
        </div>
</body>

</html>
