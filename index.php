<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>a School of Industry Oriented Engineering</title>

    <!-- Mobile Specific Metas
  ================================================== -->

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script src="https://code.jquery.com/jquery-latest.js"></script>

<link rel="stylesheet" type="text/css" href="css/style-circular.css">
<link href="css/custom.css" rel="stylesheet" type="text/css" media="all">

    <!-- CSS
  ================================================== -->
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Prettyphoto -->
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
   <body data-spy="scroll" data-target=".main-nav">

    <section id="section-banner">
    	<div class="container">
    	<!--	<div class="row">
    			<div class="banner-content text-center">
    				<h2 class="title">
	    				<div class="line-top"></div>
	    					Welcome to Hotel
						<div class="line-btm"></div>
    				</h2>

    				<a href="#section-contact" class="btn btn-default">Contact Me</a>
    			</div>
    		</div>-->
    		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
								<!-- Indicators -->
			<?php
      $images=preg_grep('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $files);
$count=0;
if ($handle = opendir('images/slider')) {

    while (false !== ($entry = readdir($handle))) {
        $files[] = $entry;
    }
    $images=preg_grep('/\.(jpg|jpeg|png|gif)$/i', $files);

    $count = count($images);
    				echo '<ol class="carousel-indicators">';
    				echo "\r\n";
    for($i = 0; $i < $count; $i++) {
    				echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';
    				echo "\r\n";
	}
					echo '</ol>';echo "\r\n";
    				echo '<!-- Wrapper for slides -->';
					echo '<div class="carousel-inner" role="listbox">';echo "\r\n";
	$count = 0;
    foreach($images as $image)
    {
    	$count++;
			if ($count == 1) {
    					echo '<div class="item active">
    								<img src="images/slider/'.$image.'" >
    							</div>';

    		} else {
    										echo '<div class="item">
    								<img src="images/slider/'.$image.'">
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
    </section>

    <!-- section menu start -->

    <section class="section-menu">
    	<div class="navbar navbar-default main-nav" role="navigation" >
    		<div class="container" >
    			<div class="navbar-header">
    				<button class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse">
    					<span class="sr-only"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    				</button>

					<a href="#" class="navbar-brand"> <img src="images/logo_new.png" alt=""><!--a School of <span>Industry Oriented Engineering</span>--></a>
    			</div>  <!-- navbar-header end -->
    			<!-- main nav  -->

    			<div class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
    				<ul class="nav navbar-nav navbar-right">
    					<li class="active"><a href="#section-banner">Home </a></li>
					<li><a href="#section-profile">About Us</a></li>
						<li><a href="#section-offerings">Offerings </a></li>
    					<!--<li><a href="#section-offering-circular">Our Works </a></li>-->
						<li><a href="#program-benefits">Benifits </a></li>
    					<li><a href="#section-testimonial">Testimonials </a></li>

    					<li><a href="#section-contact">Contact us </a></li>
    				</ul>
    			</div><!-- /.navbar-collapse -->
    		</div><!-- /.container-fluid -->
    	</div>
    </section>
    <!-- section menu end -->

	<section id="section-overview" class="section-padding">
		<div class="container">
			<div class="row borderedbox homeinfo text-center rounded ">
				<img src="images/sponsership.png" alt="" height="400px" class="center-block img-responsive">
				<h4 class="heading-title">Grab your Opportunity!</h4>	
				<p>Sponsorship Program for Certified Course. <a target="_blank" href="/Sponsorship Program [Mar 2020].pdf"><button type="button" class="btn "><strong>Click Here </strong></button></a> to read brochure before Applying </p>
				<p><a href="/registration.php"><button type="button" class="btn "><strong>Click Here </strong></button></a> to Register for the Course.</p>					
			</div>
			<div class="row borderedbox rounded col-md-12 col-sm-12">
			<h3 class="heading-title">BACKGROUND INFORMATION</h3>
				<div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-delay=".2s">
						<div class="homeinfo text-justify">
							<p> As part of initiative <span>‘Knowledge-Building and Skill-Development’</span> we are working on concept <b style="font-size=1.1em;">“a School of Industry Oriented Engineering and Solutions”</b>. Our primary aim is to strengthen the understanding of working professionals and engineering graduates on core engineering knowledge along with skills. This helps to increase the self-confidence of an individual and make them confident to work on national and international projects/programs.</p>
							<p>We strongly feel that, Design is not just alone an action to do some activities using CAD & CAE software. Design is a process of thinking to make the product better, lighter and smarter for the future.</p>
							<p>To build our own products, to make our designs and to sustain long term employment it’s very essential to have right amount of engineering knowledge along with necessary skills.</p>
						</div>
				</div>

				<div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-delay=".4s">

						<div class="homeinfo text-justify">
						<p>We, extensive experienced and passionate team are committed to provide good quality programs to both working professionals and engineering graduate students through technical talks/ technical workshops/ internship programs/ design engineering courses in aerospace and mechanical engineering domain.</p>
 						</br>
						<i style="color:#be0308;">We look forward to collaborate with Universities/ Engineering Colleges/ Design Organisations/ MRO Centres. </i>
	  					</div>

				</div> <!-- col-md-4 end -->


			</div>

			<div class="row borderedbox rounded col-md-12 col-sm-12">

									<h3 class="heading-title">Why Choose Us ?</h3>
									<div class="col-md-6 col-sm-6 col-lg-6 text-justify">
								  	<p>The team consists of industry experts having extensive experience in both International and Domestic Programs in aerospace and mechanical domain. We are committed to provide high quality coaching coupled with best practices through real world problems as per global industry standards and customer expectations. We are the first team to offer high quality programs in key domains.
								  	</p>
								  	<p>We adopt a very unique methodology of coaching for our participants. We prepared our syllabus in structured way by consulting industry experts. We have good proven track record in offering these programs.
								  	</p>
								  	<p>
								  	Course subject matches with the top Universities and helps graduates to get admitted to best Universities for their MS Program.
								  	</p>
								  	<p>
										Programs content are aligned as per global industry requirements & expectations, this helps to get into quality jobs in high profile companies like MNCs, Design Organizations, R&D Centres, Core Engineering Companies etc.
								  	</p>
		  							</div>
									<div class="col-md-6 col-sm-6 pull-left wow fadeInDown" data-wow-delay=".6s">

					<div class="overview-box">
						<img src="images/Our Methodology.jpg" alt="" class="center-block img-responsive">
						<div class="image-overlay text-center">
							<a href="images/Our Methodology.jpg" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
						</div>
					</div>


				</div> <!--col-md-4 end -->

			</div>
			<div class="row borderedbox rounded col-md-12 col-sm-12">
						<h3 class="heading-title">VIDEOS</h3>
						<div class="col-md-4 col-sm-4 col-lg-4">
							<iframe  height="250px"  src="https://www.youtube.com/embed/UIDUzBh7pqk" frameborder="0"></iframe>
		  				</div>
		  				<!--<div class="col-md-6 col-sm-6 col-lg-6">
						<iframe height="250px" src="https://www.youtube.com/embed/SSojb2YMFog" frameborder="0"></iframe>
		  				</div>-->
		  				<div class="col-md-4 col-sm-4 col-lg-4">
						<iframe height="250px" src="https://www.youtube.com/embed/w80UJTo_UVU" frameborder="0"></iframe>
		  				</div>
              <div class="col-md-4 col-sm-4 col-lg-4">
						<iframe height="250px" src="https://www.youtube.com/embed/8YGGFQC-Yhw" frameborder="0"></iframe>		  	
		  				</div>
			</div>
		</div>
	</section>
	<!-- section overview end -->


	<!-- section profile start -->

	<section id="section-profile" class="section-padding">
	<!--	<div class="profile-bg visible-md visible-lg"></div>-->
		<div class="container">
			<div class="row rounded borderedbox">
			<h2 class="heading-title">About Us</h2>
				<div class="profile-desc  wow fadeInRight">
					<div class="col-md-12 col-sm-12">
                  <div class="col-md-4 col-sm-4 borderedbox rounded" >
			  				<img src="images/askokpp.jpeg" class="img-responsive rounded mb-0"  align="center" alt="">
			  				<!--<h5 align="center"></h5>-->
			  			</div>
         	<div class="col-md-8 col-sm-8 text-justify pull-right">
			  		<p> <b>Ashok Sanmani (Ashok) </b>is a passionate engineer with extensive
			  			experience in aerospace engineering domain and founder of <b>“a School of Industry Oriented Engineering and Solutions”</b>.
			 			Ashok holds a bachelor degree in Mechanical Engineering from Karnataka University Dharawad. Ashok worked with premier engineering services companies includes Cades Digitech, TCS, Quest Global and Tech Mahindra. He was part of core team and has impressive track record in building successful teams and competencies in all the companies he worked.
			  		</p><p>Ashok has 19 plus years of experience in aircraft structures and interiors; with well-versed knowledge and experience on advanced metallic and composite materials.
			  		He has worked on Airbus (A380, A400M & A350), Boeing (787) and Domestic (IJT-36, SARAS) programs/projects.
			  		He has delivered and managed technically complex projects right from concept to certification phase to Indian aerospace companies and various global aerospace customers.
			  		His international experience includes Airbus Germany, Magellan Aerospace UK, GKN Aerospace UK and Saab Sweden.</p>
				</div>
            		<div class="col-md-12 col-sm-12">
            			<i style="color:#be0308;">
          					His team includes extensive experienced, passionate engineers who are specialized in different domains and skills; and are aspired to deliver to best to their ability.
          				<p>	&nbsp;&nbsp;&nbsp;&nbsp;</p>
							</i>
						</div>

					</div>

				</div>
				<div class="borderedbox rounded text-justify col-md-12 col-sm-12">
							<div class="vision col-md-6 col-sm-6 wow fadeInRight" data-wow-delay=".5s">
								<h3 class="heading-title">Vision</h3>
								<div class="">
									<p>"Make engineering graduates / working professionals
Knowledgeable, Skilled and Increase Self-Confidence level to make them know about present and future technologies
as per global standards in Aerospace and Mechanical Engineering domains"</p>
								</div>
							</div>  <!-- service -inner  -->
							<div class="mision col-md-6 col-sm-6 wow fadeInRight" data-wow-delay=".8s">
								<h3 class="heading-title">Mission</h3>
								<div class="">
									<p>"Provide Knowledge Before Industry and Minimize gap between academia and industry" </p>
								</div>
							</div>
						</div><p>	&nbsp;&nbsp;&nbsp;&nbsp;</p>
						<div class="overview-box borderedbox rounded text-justify col-md-12 col-sm-12">
						<h3 class="heading-title">Associated Partners:</h3>
						<div class="associated text-justify">

				From our experience we understand that, to work successfully in aerospace,
				automobile and other mechanical engineering domain it is very important to have good visualization and practical
				experience about engineering drawings, models, test set-ups, tool & jigs, production facility etc.
				With an intention to provide better insight towards engineering, fabrication and machining,
				we have associated with small size engineering solutions and manufacturing companies.
				</div></br>
				<ul class="featured">
				<li class="client-name">* Riotech Engineering Solutions Pvt. Ltd.</li>
    			<li class="client-name">* Designs Simulation Engineering Solutions Pvt. Ltd. (DESSIM)</li>
    			<li class="client-name">* Maruti Technologies</li>
				</ul>
						</div>

				</div><!-- row end -->

		</div><!-- container end -->
	</section>
	<!-- section profile end -->

	<!-- section skill start -->

	<section id="section-offerings" class="section-padding ">
		<div class="container">
			<div class="row borderedbox rounded">
			<h2 class="heading-title">Our Offerings</h2>
			<div class="rounded col-md-12 col-sm-12">
				<div class="service-box text-justify">
					We have wide range of customized programs on core engineering domains which are suitable for working professionals/ engineering graduates and engineering students. Programs and Courses are available from 3 Days to 6 Months. Technical Workshops are structured for 3-6 days and detailed courses are available from 2 to 6 months.
				</div>

				<div id="myModal2" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">
									<span class="sr-only">Close</span>
								</button>
								<h4 class="modal-title">Product Design Engineering</h4>
							</div>
							<div class="modal-body col-md-12 col-sm-12">
								<div class="col-md-6 col-sm-6">
								<!--<h3 class="heading-title">Product Design Engineering:</h3>-->
									<div  class="text-justify">This is an extensive course perfectly designed to bridge a gap between Academia and Industry.
									This course focuses on building core engineering knowledge that helps to approach Industry as a Beginner for wider opportunities right from Design to Aftermarket services in different domains like Aerospace, Rail, Transport, Heavy Engineering and Ship Industry.
									Course makes you to think like engineer. 
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<img src="images/Product Design Engineering.jpg" alt="" class="center-block img-responsive">
									<div class="image-overlay text-center">
										<a href="images/Product Design Engineering.jpg" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
									</div>
								</div>
			 					<h4>Course Content:</h4>
								<ul class="flowermark">
									<li>	Engineering design, design process & design life cycle  </li>
									<li>	Selection of suitable cross section based on design requirements  </li>
									<li>	Engineering design calculations using classical approach  </li>
									<li>	Selection of material as per international industry standards  </li>
									<li>	Composite materials; stacking sequence formation & hands-on experience </li>
									<li>	Realistic industry problems will be considered for demonstration & practice</li>
									<li>	Design & analysis will be carried out both using metallic & composite materials  </li>
									<li>  Hands-on experience on CAD modeling, FE modeling, FE analysis & Sub-modeling </li>
								</ul>
      						</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
    					</div>
  					</div>
				</div>
<div id="myModal1" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span class="sr-only">Close</span>
       </button>
        <h3 class="modal-title">Design of Composite Aerostructures</h3>
      </div>
      <div class="modal-body col-md-12 col-sm-12">
        	<div class="col-md-6 col-sm-6">
			<!--<h3 class="heading-title">Design of Composite Aerostructures:</h3>-->
			<div  class="text-justify">
				This course provides extensive knowledge on the basics of design engineering, insight to composite materials, design considerations, methodology and certification requirements from conceptual phase to certification phase.
			 </div>
			 </div>
			<div class="col-md-6 col-sm-6">
						<img src="images/Design of Composite Aerostructures.jpg" alt="" class="center-block img-responsive">
						<div class="image-overlay text-center">
							<a href="images/Design of Composite Aerostructures.jpg" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
						</div>
			</div>
			<h4>Course Content:</h4>
			<ul class="flowermark">
						<li>	Engineering design, design process & design life cycle  </li>
						<li>	Selection of suitable cross section based on type of loading  </li>
						<li>	GFEM build techniques, structural idealization and validation of GFEM  </li>
						<li>	Concept design of horizontal tail & vertical tail to fuselage interface  </li>
						<li>	Sizing of lug; design of shear & bending fittings for intact & fail-safe design considerations </li>
						<li>	Different structural configurations like MSD & ISP designs</li>
						<li>	Sizing and analysis of flat & curved panels and integrally stiffened panels  </li>
						<li>  Composite materials; stacking sequence formation guidelines & compliance verification </li>
						<li> Effective estimation techniques to work on fixed-bid projects  </li>
			</ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="myModal3" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span class="sr-only">Close</span>
       </button>
        <h3 class="modal-title">Profile Building For MS Abroad</h3>
      </div>
      <div class="modal-body col-md-12 col-sm-12">
        	<div class="col-md-6 col-sm-6">
			<!--<h3 class="heading-title">Profile Building for MS Abroad:</h3>-->
			<div  class="text-justify">
				The program is exclusively planned & designed to get students an exposure to Global Standards and Procedures.
				This program aims at providing hands-on experience on realistic problems to build a profile,
				so students can choose better University.
			 </div>
			 </div>
			<div class="col-md-6 col-sm-6">
						<img src="images/Profile Building for MS Abroad.jpg" alt="" class="center-block img-responsive">
						<div class="image-overlay text-center">
							<a href="images/Profile Building for MS Abroad.jpg" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
						</div>
			</div>
			<h4>Program Content:</h4>
			<ul class="flowermark">
						<li>	Get insight about the factors driving engineering industry & future technologies  </li>
						<li>	Strengthen your profile with increased knowledge & skill  </li>
						<li>	Gain hands-on experience by working on realistic projects  </li>
						<li>	Work on project right from problem statement to report preparation</li>
    <li>	Select the course of your interest</li>
    <li>	Guidance to work on research papers</li>
    <li>	Assistance to take up standard exams & profile mentoring</li>
			</ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="myModal4" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span class="sr-only">Close</span>
       </button>
        <h3 class="modal-title">Technical Workshops</h3>
      </div>
      <div class="modal-body col-md-12 col-sm-12">
        	<div class="col-md-6 col-sm-6">
			<!--<h3 class="heading-title">Technical Workshops:</h3>-->
			<div  class="text-justify">
				We offer 3-6 day workshops for students, graduates & working professionals. We deliver workshops on different subjects. These classes’ aims at provide an exposure about engineering industry requirements and expectations. This helps the attendees to figure out their interest and accordingly plan for the future.
			 </div>
			 </div>
			<div class="col-md-6 col-sm-6">
						<img src="images/Technical Workshops.jpg" alt="" class="center-block img-responsive">
						<div class="image-overlay text-center">
							<a href="images/Technical Workshops.jpg" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
						</div>
			</div>
			<h4>Workshop Content:</h4>
			<ul class="flowermark">

						<li>Systems Engineering Overview & Design Life Cycle</li>
<li>Present Situation in Engineering and Future Technologies</li>
<li>Engineering Design Calculations</li>
<li>FEM & FEA as per global industry requirements</li>
<li>Engineering materials and their selection criteria</li>
<li>Composite materials & design considerations</li>
<li>Mechanical structural joints</li>
<li>Aeromodelling</li>
<li>Interview preparation techniques, mock-up tests & interviews</li>
			</ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="myModal5" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span class="sr-only">Close</span>
       </button>
        <h3 class="modal-title">Aero Modelling</h3>
      </div>
      <div class="modal-body col-md-12 col-sm-12">
        	<div class="col-md-6 col-sm-6">
			<!--<h3 class="heading-title">Aeromodelling:</h3>-->
			<div  class="text-justify">
				The workshop gives an idea about the working of fixed wing aircraft and multi-copters. The course involves building of RC plane and quad-copter from scratch giving hands-on experience to the basics of flight, dimensioning, electronic requirements and flying.
			 </div>
			 </div>
			<div class="col-md-6 col-sm-6">
						<img src="images/Aeromodelling.jpg" alt="" class="center-block img-responsive">
						<div class="image-overlay text-center">
							<a href="images/Aeromodelling.jpg" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
						</div>
			</div>
			<h4>The course covers:</h6>
			<ul class="flowermark">
						<li>Introduction to basics of flight</li>
<li>Design concepts and considerations</li>
<li>Different systems, electronics for control & stability</li>
<li>Learn about fixed wing aircraft and multi-copters</li>
<li>Role of lightweight materials and electronics in making lighter and efficient products</li>
<li>Build & fly your planes & copters</li>
			</ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="myModal6" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span class="sr-only">Close</span>
       </button>
        <h3 class="modal-title">Academic Internships</h3>
      </div>
      <div class="modal-body col-md-12 col-sm-12">
        	<div class="col-md-6 col-sm-6">
			<!--<h3 class="heading-title">Academic Internships:</h3>-->
			<div  class="text-justify">
				Our Internship program will help the students to get an exposure to engineering industry as per global industry standards and requirements. Students get an insight about the industry requirements, get hands-on experience on live industry problems, understand engineering concepts and work according to global approved methods and standards. This program also helps students to choose good quality academic projects in design engineering domain and increases their confidence.
			 </div>
			 </div>
			<div class="col-md-6 col-sm-6">
						<img src="images/Academic Internship.jpg" alt="" class="center-block img-responsive">
						<div class="image-overlay text-center">
							<a href="images/Academic Internship.jpg" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
						</div>
			</div>
			<div class="col-md-12 col-sm-12">
			<h4>Internship Topics:</h4>
			<ul class="flowermark">

<li>Engineering design, design process & design life cycle</li>
<li>Roles and responsibilities of engineer</li>
<li>Design and validation of structural beam and Industrial frame structure</li>
<li>Introduction to design of primary and secondary structures & design criteria</li>
<li>Role of FEM, FEA & Selection of materials in real life designs</li>
<li>Introduction to engineering materials including composites</li>
<li>Sub-modelling, cut-out and reinforcement analysis</li>
			</ul>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="myModal7" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span class="sr-only">Close</span>
       </button>
        <h3 class="modal-title">Academic Projects</h3>
      </div>
      <div class="modal-body col-md-12 col-sm-12">
        	<div class="col-md-6 col-sm-6">
			<!--<h3 class="heading-title">Academic Projects:</h3>-->
			<div  class="text-justify">
				Project is not just another academic activity... It’s an opportunity to showcase and demonstrate your area of interest to get into specific job of your choice. Working on a good academic project will add value to the profile and always build the confidence in students in attending interviews, approaching different domains for a job. We assist students to work on different projects according to the International standards in core engineering that helps to connect the theories studied to actual industrial problems.
			 </div>
			 </div>
			<div class="col-md-6 col-sm-6">
						<img src="images/Academic Projects.jpg" alt="" class="center-block img-responsive">
						<div class="image-overlay text-center">
							<a href="images/Academic Projects.jpg" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
						</div>
			</div>
			<div class="col-md-12 col-sm-12">
			<h4>Sample projects:</h4>
			<ul class="flowermark">
	<li>Design and Validation of Structural Beam/Spar</li>
<li>Design of Skin-stringer Panels for Different Structural Configurations</li>
<li>Conceptual Design of Vertical Tail to Fuselage Interface</li>
<li>Preliminary Design & Detail Design of Shear & Bending Fitting</li>
<li>Design of Composite Structures</li>
<li>Panel Design for Different Cut-outs with Reinforcement</li>
<li>Validation of FE Approach using Classical Methods</li>
			</ul>	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="myModal8" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span class="sr-only">Close</span>
       </button>
        <h3 class="modal-title">Industry Projects & Solutions</h3>
      </div>
      <div class="modal-body col-md-12 col-sm-12">
        	<div class="col-md-10 col-sm-10">
			<!--<h3 class="heading-title">Industry Projects & Solutions:</h3>-->
			<div  class="text-justify">
				Our team has extensively experienced engineers with good expertise in engineering domain and we do work on industry problems and projects.
			 </div>
			 </div>
			<div class="col-md-2 col-sm-2">
						<img src="images/industry.jpg" alt="" class="center-block img-responsive">
						<div class="image-overlay text-center">
							<a href="images/industry.jpg" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
						</div>
			</div>
			<div class="col-md-12 col-sm-12">
			<h4>Few projects are:</h4>
			<ul class="flowermark">
	<li>Design of Industrial Frame Structure & Re-design of Truck Chassis Structure </li>
<li>Design and Prototype Building of Bike Washing Machine</li>
<li>Unitized Design of Floor Grid from Multi-Part Design for Commercial Aircraft</li>
<li>Design of Vertical Tail as Capability Developing Project</li>
<li>Build of fixed wing planes and multi-copters</li>
<li>Reverse Engineering of Automobile Filter</li>
			</ul>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
<div class="menu col-md-9 col-sm-9">
<ul>
	<li class="align-middle col-md-3 col-sm-3" data-toggle="modal" data-target="#myModal1">Design of Composite Aerostructures</li>
	<li class="align-middle col-md-3 col-sm-3" data-toggle="modal" data-target="#myModal2">Product Design Engineering</li>
	<li class="align-middle col-md-3 col-sm-3" data-toggle="modal" data-target="#myModal3">Profile Building For MS Abroad
</li>
	<li class="align-middle col-md-3 col-sm-3" data-toggle="modal" data-target="#myModal4">Technical Workshops</li>
	<li class="align-middle col-md-3 col-sm-3" data-toggle="modal" data-target="#myModal5">Aero Modelling</li>
	<li class="align-middle col-md-3 col-sm-3" data-toggle="modal" data-target="#myModal6">Academic Internships</li>
	<li class="align-middle col-md-3 col-sm-3" data-toggle="modal" data-target="#myModal7">Academic Projects</li>
	<li class="align-middle col-md-3 col-sm-3" data-toggle="modal" data-target="#myModal8">Industry Projects & Solutions</li>
</ul>
</div>
  	</div>
			</div>

		</div>
	</section>
	<!-- section skill End -->

	<section id="program-benefits" class="section-padding">
		<div class="container">
			<div class="row borderedbox rounded">
			<h2 class="heading-title">Program Benefits</h2>
				<!--<div class="col-md-12 col-sm-12 wow fadeInLeft">

				</div>-->

				<div class=" wow fadeInLeft">
					<div class="program-benefits">
						<div class="program-sub text-justify">
						<strong>Proven track record in offering wide range of programs which are highly useful to working professionals & engineering graduates. We strongly believe that our programs bring following benefits to working professionals and engineering graduates;</strong>
						</div>
				<ul class="checkmark">
					<li>Courses are designed to meet global industry requirements & expectations. Graduates can get into quality jobs in high profile companies like MNCs, Design Organizations, R&D Centers, Core Engineering Companies, Captive Centers etc.</li>
					<li>Great Opportunity to Know Width & Depth of Mechanical & Aerospace Industry Requirements</li>
					<li>Will Help to Take-up Technical Interviews with More Confidence and Increases Percentage of  Employability</li>
					<li>Opportunity to Know the Difference Between Engineering Knowledge & Skill and Use of Engineering Knowledge in Sustaining Long-term Employment</li>
					<li>Makes an Engineer Self-Confident to Work on National & International  Programs/ Projects with Increased Knowledge</li>
					<li>Increases Branding of the Colleges(s) and Colleges Shall Invite Core Engineering Companies for Campus Selection</li>
					<li>Create Pool of Knowledgeable & Skilled Engineers and Will Reduce Certain Amount of Burden on Industry</li>
					<li>Government Organizations shall Utilize the Pool of Talented  Engineers for National Programs which also supports Government of India’s initiatives like ‘Skill-India’ and ‘Made-in-India’</li>
				</ul>

					</div>
				</div>
			</div><!-- row end -->
		</div>  <!-- container end -->
	</section>
	<!-- Resume end -->

	<!-- section testimonial start -->

	<section id="section-testimonial" class="section-padding">
		<div class="container">
			<div class="row borderedbox rounded">
				<div class="col-md-12 text-center wow fadeInUp">
					<div class="section-heading">
						<h2 class="heading-title">testimonial</h2>

					</div>
				</div>
				<div class="col-md-12 col-sm-12">

						<h3>FEEDBACK</h3>
						<div class="col-md-6 col-sm-6 col-lg-6">
							<iframe  height="300px"  src="https://www.youtube.com/embed/TmB3oMhi9ww" frameborder="0"></iframe>
		  				</div>
		  				<div class="col-md-6 col-sm-6 col-lg-6">
						<iframe height="300px" src="https://www.youtube.com/embed/SSojb2YMFog" frameborder="0"></iframe>
		  				</div>
		  				<div class="col-md-6 col-sm-6 col-lg-6">
						<iframe height="300px" src="https://www.youtube.com/embed/peu7vWvVF8M" frameborder="0"></iframe>
		  				</div>

					<!--<div class="carousel slide text-center" id="testimonial-carousel">
						 <ol class="carousel-indicators">
						    <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
						    <li data-target="#testimonial-carousel" data-slide-to="1"></li>
						    <li data-target="#testimonial-carousel" data-slide-to="2"></li>
						    <li data-target="#testimonial-carousel" data-slide-to="3"></li>
						  </ol>
						<div class="carousel-inner">
							<div class="item active">
								<h4 class="client-name">Name 1</h4>
								<h5 class="client-name">Designation 1</h5>
							<iframe  src="https://www.youtube.com/embed/TmB3oMhi9ww" frameborder="0"></iframe>
		  						<h6> </h6>
							</div>

							<div class="item ">
								<h4 class="client-name">Name 2</h4>
								<h5 class="client-name">Designation 2</h5>
								<iframe src="https://www.youtube.com/embed/SSojb2YMFog" frameborder="0"></iframe>
								<h6> </h6>
							</div>

						</div>

								<a class="left carousel-control" href="#testimonial-carousel" role="button" data-slide="prev">
								  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								  <span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#testimonial-carousel" role="button" data-slide="next">
								  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								  <span class="sr-only">Next</span>
								</a>
					</div>-->
					<!-- Left and right controls -->
				</div>
			</div>
		</div>
	</section>
	<!-- section testimonial end -->

	<!-- section contact start -->

	<section id="section-contact" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 text-center wow fadeInUp">
					<div class="section-heading">
						<h2 class="heading-title">Contact us</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 wow fadeInLeft">
					<div class="contact-left">
						<div class="location">
							<div class="content-style">
        <h4>Address:</h4>
		<address>
        a School of Industry Oriented Engineering & Solutions<br>
        No 7996, 2nd Phase, 4th Stage,<br>
        Vijay Nagar, Mysore - 570 017<br>
        <i class="fa fa-phone pright-10"></i> +91 81478 40014 / 96203 04522<br>

        <i class="fa fa-envelope-o pright-10"></i> <a href="mailto:info@industry-oriented-engineering.com">info@industry-oriented-engineering.com</a>
        </address>
      </div>
						</div>
					</div>
					<div class="wow fadeInRight">
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			  ga('create', 'UA-113860701-1', 'auto');
			  ga('send', 'pageview');
			</script>
			<div id="googleMap" class="rounded" style="height:250px;"></div>
				</div>
				</div>

				<div class="col-md-6 col-sm-6 wow fadeInRight">
					<div class="contact-form">
						<form class="contact-box" method="post" action="pages/contactus.php">
							<div class="form-group">
								<label>Name*</label>
								<input id="form_name" type="text" name="name" placeholder="Please enter your firstname *" class="form-control">
							</div>

							<div class="form-group">
								<label>Email address*</label>
								<input id="form_email" type="email" name="email" placeholder="Please enter your email *" class="form-control">
							</div>
								<div class="form-group">
								<label for="form_phone">Phone *</label>
								<input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone  *" required="required" data-error="Valid Phone number required.">

							<div class="form-group">
								<label>Message*</label>
								<!--<input id="form_message" name="message" type="text" class="form-control">-->
								<textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required"></textarea>
							</div>
							<div class="form-group">
							<input type="submit" class="btn btn-success btn-send" value="Send message">
						</div>
						</form>

						<!--<div class="row">
							<div class="col-md-12">
								<a href="pages/contactus.php" class="btn btn-default">Contact us</a>
							</div>
						</div>-->
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- section contact end -->

	<footer id="section-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">

		<div id="footer copyright" class="clear">

    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">a School of Industry Oriented Engineering</a></p>
    <p class="fl_right">Developed By <a target="_blank" href="http://services.naagandige.net/" title="Web Services">Anagatha</a> </p>

  </div>
					<ul class="socail-link list-inline">
						<li><a target="_blank" href="https://www.twitter.com/aSchoolofIndustryOrientedEngineering/"><i class="fa fa-twitter"></i></a></li>
						<li><a target="_blank" href="https://www.facebook.com/aSchoolofIndustryOrientedEngineering/"><i class="fa fa-facebook"></i></a></li>
						<!--<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
						<li><a target="_blank" href="https://www.linkedin.com/in/ashok-sanmani-3015b223/"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- initialize jQuery Library -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- Bootstrap jQuery -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- PrettyPhoto -->
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <!-- Wow Animation -->
    <script type="text/javascript" src="js/wow.min.js"></script>
    <!-- singlepagenav -->
    <script src="js/jquery.singlePageNav.js"></script>
    <!-- Eeasing -->
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <!-- Sticky Menu -->
    <script src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <!-- Google Map API Key Source -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD6IwHbJcghcb3qAw3tHaNJnaKz-W0nHnM&callback=initMap"></script>
			<script src="layout/scripts/googlemapsapi.js"></script>
	<script>
		 $(".main-nav").sticky();
	</script>

	<script>
        new WOW().init();

        $("#click").click(function(){
  $("#nav").toggleClass("closed");
});

    </script>



  </body>
</html>
