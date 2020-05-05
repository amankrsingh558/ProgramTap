


<?php 
ob_start();
session_start();
require_once 'config.php'; 
?>
<?php 
if(isset($_POST['signin']))
{
	if( !empty( $_POST )){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->login( $_POST );
			if(isset($_SESSION['logged_in'])){
				$_SESSION['success'] = 'You are logged in successfully';
				header('Location:CANDIDATE/index.php');exit;
			}
		} catch (Exception $e) {
			$error = $e->getMessage();
			$_SESSION['error'] = $error;
		}
}}
	//print_r($_SESSION);
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
		
		
		
		header('Location:CANDIDATE/index.php');exit;
}
?>





<?php 

if(isset($_POST['signup']))
{
	if(!empty($_POST)){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->registration( $_POST );
			if($data){
				$_SESSION['success'] = USER_REGISTRATION_SUCCESS;
				header('Location: index.php');exit;
			}
		} catch (Exception $e) {
			$_SESSION['error'] = $e->getMessage();
		}
	}
}
?>









<!doctype html>
<html class="no-js" lang="zxx">

<head>


<style>
.response{
    padding: 6px;
    display: none;
}

.not-exists{
    color: red;
}

.exists{
    color: green;
}
  .modal-backdrop {
    z-index: 100000 !important;
  }

  .modal {
    z-index: 100001 !important;
  }


</style>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title><#ProgramTap</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="classic/images/apple-touch-icon.png">
    <link rel="shortcut icon" type="classic/image/ico" href="classic/images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="classic/css/bootstrap.min.css">
    <link rel="stylesheet" href="classic/css/owl.carousel.min.css">
    <link rel="stylesheet" href="classic/css/icofont.css">
    <link rel="stylesheet" href="classic/css/magnific-popup.css">
    <link rel="stylesheet" href="classic/css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="classic/css/normalize.css">
    <link rel="stylesheet" href="classic/style.css">
    <link rel="stylesheet" href="classic/css/responsive.css">
     <link href="classic/1/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <script src="classic/1/thumbnail-slider.js" type="text/javascript"></script>
    <script src="classic/js/vendor/modernizr-2.8.3.min.js"></script>

    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="one.css"  crossorigin="anonymous">

     <script src="two.js"></script>
 <!--   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/modal.js"></script>  -->
<script>
function tologin(){

var a=document.getElementById("upass");
  var b=document.getElementById("apass");
   if((b.value=="root")&&(a.value=="root")){
       window.location.href = "Question/indexadmin.php";
   }
   else{
     alert("Wrong password");
   }
}




</script>
  
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!--Preloader-->
    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <!-- Mainmenu-Area -->
    <nav class="navbar mainmenu-area" data-spy="affix" data-offset-top="197">
        <div class="container">
            <div class="row">
                <!--<div class="col-xs-12">
                    <div id="search-box" class="collapse">
                        <form action="#">
                            <input type="search" class="form-control" placeholder="What do you want to know?">
                        </form>
                    </div>-->
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="navbar-header smoth">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
						
						
						
						<div style = "position:relative; left:0px; bottom:50px;">
					
                        <a class="navbar-brand" href="#home-area" ><img src="classic/images/side-7.png" style="margin-top:15px;margin-left:0px;height:100px;width:300px;padding-bottom: 7px;" alt=""></a>
                    				
					</div>
                    
					
					</div>
                    <div class="collapse navbar-collapse navbar-right" id="mainmenu">
                       <!-- <ul class="nav navbar-nav navbar-right primary-menu">
                        	
                            <li><a href="">Log In</a></li>
                            <li><a href="#" style="margin-right: 15px;">Register</a></li>
                            <li><a href="#search-box" data-toggle="collapse"><i class="icofont icofont-search-alt-2"></i></a></li>
                            <li class="select-cuntry">
                                <select name="counter" id="counter">
                                    <option value="ENG">ENG</option>
                                    <option value="BEN">BEN</option>
                                    <option value="ARA">ARA</option>
                                    <option value="ARG">ARG</option>
                                    <option value="CHV">CHV</option>
                                </select>
                            </li>
                        </ul>-->
                        <ul class="nav navbar-nav primary-menu">

 
                            <li class="active"><a href="#home-area">Home</a></li>
                            <li><a href="#service-area">Features</a></li>
                            <li><a href="#portfolio-area">Courses</a></li>
                            <li><a href="#team-area">Team</a></li>
                             <li><a href="#contact-area">Contact</a></li>
                             <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Login<i class="glyphicon glyphicon-log-in"></i>
        <span class="caret"></span></a>
        <ul class="dropdown-menu" style="left: 0px;">
          <li><a href="#"><button data-toggle="modal" data-target="#exampleModal1" style="border: none; background: none; color: inherit;padding: 0;font: inherit;cursor: pointer;outline: inherit;font-size: 20px;"><i class="glyphicon glyphicon-user"></i>&nbspStudent&nbsp&nbsp&nbsp&nbsp&nbsp</button></a></li>
          <li><a href="#"><button data-toggle="modal" data-target="#exampleModal2" style="border: none; background: none; color: inherit;padding: 0;font: inherit;cursor: pointer;outline: inherit;font-size: 20px;"><i class="glyphicon glyphicon-user"></i>&nbspAdmin&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button></a></li>
        </ul>
    </li>
                        	
                            <li><a href="#" style="margin-right: 15px;"><button type="button" data-toggle="modal" data-target="#exampleModal3" class="regbtn" style="border: none; background: none; color: inherit;padding: 0;font: inherit;cursor: pointer;outline: inherit;
                            font-weight: :bold;"><i class="glyphicon glyphicon-user"></i>&nbspRegister</button></a></li>
                            
                       

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Mainmenu-Area-/ -->


    <!--Header-Area-->
    <header class="header-area overlay" id="home-area">
        <div class="vcenter">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-md-8">
                        <div class="header-text">
                     <h2 class="header-title wow fadeInUp"><#Program Tap><span class="dot"></span></h2>
                            <div class="wow fadeInUp" data-wow-delay="0.5s"><q>First, solve the problem. Then, write the code</q></div>
                            <div class="wow fadeInUp" data-wow-delay="0.7s">
                                <!--<a href="#" class="bttn bttn-lg bttn-primary">Contact Now</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header-Area-/-->


    <!-- About-Area -->
    <section class="section-padding" id="about-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-sm-6 col-md-6 ">
                   

				   <!--<div class="page-title">
                        <h2 class="title wow fadeInUp">Build Yourself</h2>
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <p>Learning a new skill doesn’t have to interrupt your busy schedule. Our on-demand videos and interactive code challenges are there for you when you need them.</p>
                        </div>
                    </div>
					
					
					-->
					
					
					   <img src="classic/images/graph.png" alt="">
					
                    <!--<div class="wow fadeInUp" data-wow-delay="0.7s">
                        <a href="#" class="bttn bttn-primary">Start Now!</a>
                    </div>-->
					
                </div>
                <div class="col-sm-12 col-sm-6 col-md-6">
                    <img src="classic/images/graph.png" alt="">
                </div>
				</div>
            </div>
        
    </section>
    <!-- About-Area / -->

<!--

    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="video-box">
                        <img src="images/video-image.png" alt="">
                        <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video-bttn"><img src="images/video-button.png" alt=""></a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 wow fadeInUp">
                    <div class="page-title">
                        <h2 class="title">Why Choose Us?</h2>
                        <ul class="tabs-list">
                            <li class="active"><a data-toggle="pill" href="#our_mission">Our Mission</a></li>
                            <li><a data-toggle="pill" href="#our_vission">Our Vission</a></li>
                            <li><a data-toggle="pill" href="#our_support">Our Support</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="our_mission" class="tab-pane fade in active">
                            <h4 class="upper thing">SINCE WE HAVE 25 YEARS </h4>
                            <h3 class="upper">EXPERIENCE IN THIS PASSION</h3>
                            <p>Aenean rutrum, lorem sed cursus tristique, turpis velit ullamcorper ligula, id pretium elit augue in libero. Suspendisse in porttitor orci. Pellentesque vel gravida augue.</p>
                            <br />
                            <a href="#" class="bttn bttn-sm bttn-primary">View More</a>
                        </div>
                        <div id="our_vission" class="tab-pane fade">
                            <h4 class="upper thing">SINCE WE HAVE 25 YEARS </h4>
                            <h3 class="upper">EXPERIENCE IN THIS PASSION</h3>
                            <p>Aenean rutrum, lorem sed cursus tristique, turpis velit ullamcorper ligula, id pretium elit augue in libero. Suspendisse in porttitor orci. Pellentesque vel gravida augue.</p>
                            <br />
                            <a href="#" class="bttn bttn-sm bttn-primary">View More</a>
                        </div>
                        <div id="our_support" class="tab-pane fade">
                            <h4 class="upper thing">SINCE WE HAVE 25 YEARS </h4>
                            <h3 class="upper">EXPERIENCE IN THIS PASSION</h3>
                            <p>Aenean rutrum, lorem sed cursus tristique, turpis velit ullamcorper ligula, id pretium elit augue in libero. Suspendisse in porttitor orci. Pellentesque vel gravida augue.</p>
                            <br />
                            <a href="#" class="bttn bttn-sm bttn-primary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

-->

    <section class="section-padding" id="service-area">
    	<h2 class="title wow fadeInUp" style="text-align: center;">Features</h2><br/><br/>
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="icofont icofont-idea"></i>
                        </div>
                        <h4>Tutorials</h4>
                        <p>Tutorials are designed to help you learn even the most complex concept with fun.</p>
                        <!--<a href="#" class="read-more">Read More</a>-->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <i class="icofont icofont-code-alt"></i>
                        </div>
                        <h4>Conceptual Mock exams</h4>
                        <p>Improve your skills by practicing for both theory and practical concept-wise.</p>
                        <!--<a href="#" class="read-more">Read More</a>-->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                            <i class="icofont icofont-monitor"></i>
                        </div>
                        <h4>Course Evaluations</h4>
                        <p>Timely evaluations for each course helps you test your command over the language</p>
                        <!--<a href="#" class="read-more">Read More</a>-->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="1.2s">
                        <div class="box-icon">
                            <i class="icofont icofont-chart-bar-graph"></i>
                        </div>
                        <h4>Progress Report</h4>
                        <p>View your progress as you go.</p>
                        <!--<a href="#" class="read-more">Read More</a>-->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="1s">
                        <div class="box-icon">
                            <i class="icofont icofont-files"></i>
                        </div>
                        <h4>Online Practical</h4>
                        <p>Practise what you learn.Improve not only your conceptual grasp of the language but become competition ready.</p>
                        <!--<a href="#" class="read-more">Read More</a>-->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.8s">
                        <div class="box-icon">
                            <i class="icofont icofont-money-bag"></i>
                        </div>
                        <h4>Analysis</h4>
                        <p>Knowing your conceptual strengths and weakness will help you gain command over the language in lesser time</p>
                        <!--<a href="#" class="read-more">Read More</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Skill-Area -->
    <!--<section class="section-padding gray-bg" id="skill-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <div class="page-title">
                        <h2 class="title wow fadeInUp">Our Professional Skill</h2>
                        <div class="wow fadeInUp">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look.</p>
                        </div>
                    </div>
                    <div class="skills skills1 row">
                        <!-- main skill No. 1 -->
                        <!--<div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="chart chart1 center" data-percent="95">
                                <span class="counter">95</span>
                            </div>
                            <h6>WebDesign</h6>
                        </div>
                        <!-- main skill No. 2 -->
                        <!--<div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="chart chart1 center" data-percent="85">
                                <span class="counter">85</span>
                            </div>
                            <h6>Coding</h6>
                        </div>
                        <!-- main skill No. 3 -->
                        <!--<div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="chart chart1 center" data-percent="90">
                                <span class="counter">90</span>
                            </div>
                            <h6>Developing</h6>
                        </div>
                        <!-- main skill No. 4 -->
                        <!--<div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="1.2s">
                            <div class="chart chart1 center" data-percent="95">
                                <span class="counter">95</span>
                            </div>
                            <h6>Java Script</h6>
                        </div>
                        <!-- main skill No. 4 -->
                        <!--<div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="1s">
                            <div class="chart chart1 center" data-percent="85">
                                <span class="counter">85</span>
                            </div>
                            <h6>Apps Design</h6>
                        </div>
                        <!-- main skill No. 4 -->
                        <!--<div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="skill col-md-4 col-xs-6 wow fadeInUp" data-wow-delay="0.8s">
                            <div class="chart chart1 center" data-percent="90">
                                <span class="counter">90</span>
                            </div>
                            <h6>Graphics Script</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-offset-1">
                    <img src="images/skill-image.png" alt="">
                </div>
            </div>
        </div>
    </section>-->
    <!-- Skill-Area / -->





    <!-- Portfolio-Area -->
    <section class="section-padding" id="portfolio-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="page-title text-center">
                        <h2 class="title">Courses</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <!-- Mixitup controls -->
                    <ul class="filter-controls text-center">
                        <li class="active filter" data-filter="all">All</li>
                        <li class="active filter" data-filter=".graphics">C</li>
                        <li class="filter" data-filter=".ux_ui">C++</li>
                        <li class="filter" data-filter=".web_design">JAVA</li>
                    </ul>
                </div>
            </div>
            <div class="row" id="filtering">
                <div class="col-xs-6 col-sm-4 col-md-3 mix graphics developing">
                    <div class="filter-box">
                        <div class="filter-image">
                            <button data-toggle="modal" data-target="#exampleModal1" style="border: none; background: none; color: inherit;padding: 0;font: inherit;cursor: pointer;outline: inherit;"><img src="classic/images/work-1.jpg" alt=""></button>
                        </div>
                        <!--<div class="filter-hover">
                            <h5>Print Template</h5>
                            <a href="images/work-1.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>-->
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix ux_ui ">
                    <div class="filter-box">
                        <div class="filter-image">
                           <button data-toggle="modal" data-target="#exampleModal1" style="border: none; background: none; color: inherit;padding: 0;font: inherit;cursor: pointer;outline: inherit;"><img src="classic/images/work-2.jpg" alt="">
                        </div></button>
                        <!--<div class="filter-hover">
                            <h5>Graphics Template</h5>
                            <a href="images/work-2.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>-->
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix graphics ">
                    <div class="filter-box">
                        <div class="filter-image">
                            <button data-toggle="modal" data-target="#exampleModal1" style="border: none; background: none; color: inherit;padding: 0;font: inherit;cursor: pointer;outline: inherit;"><img src="classic/images/work-3.jpg" alt=""></button>
                        </div>
                        <!--<div class="filter-hover">
                            <h5>Web Template</h5>
                            <a href="images/work-3.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>-->
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix ux_ui developing">
                    <div class="filter-box">
                        <div class="filter-image">
                            <button data-toggle="modal" data-target="#exampleModal1" style="border: none; background: none; color: inherit;padding: 0;font: inherit;cursor: pointer;outline: inherit;"><img src="classic/images/work-4.jpg" alt=""></button>
                        </div>
                        <!--<div class="filter-hover">
                            <h5>Developing</h5>
                            <a href="images/work-4.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>-->
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix web_design photography">
                    <div class="filter-box">
                        <div class="filter-image">
                            <button data-toggle="modal" data-target="#exampleModal1" style="border: none; background: none; color: inherit;padding: 0;font: inherit;cursor: pointer;outline: inherit;"><img src="classic/images/work-5.jpg" alt=""></button>
                        </div>
                        <!--<div class="filter-hover">
                            <h5>Photography</h5>
                            <a href="images/work-5.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>-->
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix coding">
                    <div class="filter-box">
                        <div class="filter-image">
                           <button data-toggle="modal" data-target="#exampleModal1" style="border: none; background: none; color: inherit;padding: 0;font: inherit;cursor: pointer;outline: inherit;"><img src="classic/images/work-6.jpg" alt="">
                           </button>
                        </div>
                        <!--<div class="filter-hover">
                            <h5>Coding</h5>
                            <a href="images/work-6.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>-->
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix web_design developing">
                    <div class="filter-box">
                        <div class="filter-image">
                            <button data-toggle="modal" data-target="#exampleModal1" style="border: none; background: none; color: inherit;padding: 0;font: inherit;cursor: pointer;outline: inherit;"><img src="classic/images/work-7.jpg" alt=""></button>
                        </div>
                        <!--<div class="filter-hover">
                            <h5>Web Desing</h5>
                            <a href="images/work-7.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>-->
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 mix coding photography">
                    <div class="filter-box">
                        <div class="filter-image">
                            <button data-toggle="modal" data-target="#exampleModal1" style="border: none; background: none; color: inherit;padding: 0;font: inherit;cursor: pointer;outline: inherit;"><img src="classic/images/work-8.jpg" alt=""></button>
                        </div>
                        <!--<div class="filter-hover">
                            <h5>Coding</h5>
                            <a href="images/work-8.jpg" class="filter-popup" data-effect="mfp-zoom-in"></a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-Area / -->



    <!-- Team-Area -->
    <section class="section-padding" id="team-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="text-center">
                        <h2 class="title">Our Team</h2>
                        <br/>
                        <br/>
                        
                    </div>
                </div>
            </div>
            <div class="row">
            	
                <div class="col-xs-6 col-sm-4 col-md-4">
                    <div class="team-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-image">
                            <img src="classic/images/t6.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4">
                    <div class="team-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-image">
                            <img src="classic/images/t5.png" alt="">
                        </div>
                        
                </div>
            </div>
                <div class="col-xs-6 col-sm-4 col-md-4">
                    <div class="team-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-image">
                            <img src="classic/images/t1.png" alt="">
                        </div>
                        
                    </div>
                </div>
				
                </div>
				
				
				
			<div class="row">
               
                <div class="col-xs-6 col-sm-4 col-md-4">
                    <div class="team-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-image">
                            <img src="classic/images/t4.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4">
                    <div class="team-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-image">
                            <img src="classic/images/t3.png" alt="">
                        </div>
                        
                </div>
            </div>
                <div class="col-xs-6 col-sm-4 col-md-4">
                    <div class="team-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-image">
                            <img src="classic/images/t2.png" alt="">
                        </div>
                        
                    </div>
                </div>
                
                        
                    </div>
                </div>
                
                
                
           

            </section>
    <!-- Team-Area / -->



    <!-- Price-Area -->
 <!--   <section class="section-padding gray-bg" id="price-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="page-title text-center">
                        <h2 class="title">Pricing Plan</h2>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <ul class="price-tabs">
                        <li class="active"><a data-toggle="pill" href="#monthly">Monthly</a></li>
                        <li><a data-toggle="pill" href="#yearly">Yearly</a></li>
                    </ul>
                </div>
            </div>
            <div class="row prices tab-content">
                <div id="monthly" class="tab-pane fade in active">
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="price-box">
                            <h4>Basic</h4>
                            <h3 class="amount">&#36;10 /<span>Month</span></h3>
                            <ul class="price-list">
                                <li>Free Useable</li>
                                <li>Easily can useable 10GB</li>
                                <li>Free Secuirity Service</li>
                                <li>Dedicated Useable Account</li>
                            </ul>
                            <a href="#" class="bttn bttn-sm bttn-default">Purchase Now</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
                        <div class="price-box active">
                            <h4>Premium</h4>
                            <h3 class="amount">&#36;50 /<span>Month</span></h3>
                            <ul class="price-list">
                                <li>Free Useable</li>
                                <li>Easily can useable 10GB</li>
                                <li>Free Secuirity Service</li>
                                <li>Dedicated Useable Account</li>
                            </ul>
                            <a href="#" class="bttn bttn-sm bttn-default">Purchase Now</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="price-box">
                            <h4>Business</h4>
                            <h3 class="amount">&#36;80 /<span>Month</span></h3>
                            <ul class="price-list">
                                <li>Free Useable</li>
                                <li>Easily can useable 10GB</li>
                                <li>Free Secuirity Service</li>
                                <li>Dedicated Useable Account</li>
                            </ul>
                            <a href="#" class="bttn bttn-sm bttn-default">Purchase Now</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
                        <div class="price-box">
                            <h4>Ultimate</h4>
                            <h3 class="amount">&#36;100 /<span>Month</span></h3>
                            <ul class="price-list">
                                <li>Free Useable</li>
                                <li>Easily can useable 10GB</li>
                                <li>Free Secuirity Service</li>
                                <li>Dedicated Useable Account</li>
                            </ul>
                            <a href="#" class="bttn bttn-sm bttn-default">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <div id="yearly" class="tab-pane fade">
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="price-box">
                            <h4>Basic</h4>
                            <h3 class="amount">&#36;10 /<span>Year</span></h3>
                            <ul class="price-list">
                                <li>Free Useable</li>
                                <li>Easily can useable 10GB</li>
                                <li>Free Secuirity Service</li>
                                <li>Dedicated Useable Account</li>
                            </ul>
                            <a href="#" class="bttn bttn-sm bttn-default">Purchase Now</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
                        <div class="price-box active">
                            <h4>Premium</h4>
                            <h3 class="amount">&#36;50 /<span>Year</span></h3>
                            <ul class="price-list">
                                <li>Free Useable</li>
                                <li>Easily can useable 10GB</li>
                                <li>Free Secuirity Service</li>
                                <li>Dedicated Useable Account</li>
                            </ul>
                            <a href="#" class="bttn bttn-sm bttn-default">Purchase Now</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="price-box">
                            <h4>Business</h4>
                            <h3 class="amount">&#36;80 /<span>Year</span></h3>
                            <ul class="price-list">
                                <li>Free Useable</li>
                                <li>Easily can useable 10GB</li>
                                <li>Free Secuirity Service</li>
                                <li>Dedicated Useable Account</li>
                            </ul>
                            <a href="#" class="bttn bttn-sm bttn-default">Purchase Now</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
                        <div class="price-box">
                            <h4>Ultimate</h4>
                            <h3 class="amount">&#36;100 /<span>Year</span></h3>
                            <ul class="price-list">
                                <li>Free Useable</li>
                                <li>Easily can useable 10GB</li>
                                <li>Free Secuirity Service</li>
                                <li>Dedicated Useable Account</li>
                            </ul>
                            <a href="#" class="bttn bttn-sm bttn-default">Purchase Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>-->
    <!-- Price-Area -->


    <!-- Blog-area -->
	<!--
    <section class="section-padding" id="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="page-title text-center">
                        <h2 class="title">Latest Blog</h2>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6 wow fadeInUp">
                    <div class="blog-box">
                        <div class="blog-image">
                            <img src="images/blog-md-1.jpg" alt="">
                        </div>
                        <div class="blog-details">
                            <h4><a href="#">Business Consultance Meetup, 10 Jan, 2016</a></h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="blog-lists">
                        <div class="blog-list wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-list-image">
                                <img src="images/blog-th-1.jpg" alt="">
                            </div>
                            <h5><a href="#">On Graphics Design Post</a></h5>
                            <div class="blog-list-meta"> <i class="icofont icofont-ui-calendar"></i> 16 JUNE 2016</div>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                        <div class="blog-list wow fadeInUp" data-wow-delay="0.4s">
                            <div class="blog-list-image">
                                <img src="images/blog-th-2.jpg" alt="">
                            </div>
                            <h5><a href="#">On Graphics Design Post</a></h5>
                            <div class="blog-list-meta"> <i class="icofont icofont-ui-calendar"></i> 16 JUNE 2016</div>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                        <div class="blog-list wow fadeInUp" data-wow-delay="0.6s">
                            <div class="blog-list-image">
                                <img src="images/blog-th-3.jpg" alt="">
                            </div>
                            <h5><a href="#">On Graphics Design Post</a></h5>
                            <div class="blog-list-meta"> <i class="icofont icofont-ui-calendar"></i> 16 JUNE 2016</div>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Blog-area / -->

	
	<!--

    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row counters">
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="count-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="count-icon">
                            <i class="icofont icofont-bag-alt"></i>
                        </div>
                        <span class="count_title">Project Complete</span>
                        <h2 class="count">1172</h2>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="count-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="count-icon">
                            <i class="icofont icofont-emo-simple-smile"></i>
                        </div>
                        <span class="count_title">Happy Client’S</span>
                        <h2 class="count">1000</h2>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="count-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="count-icon">
                            <i class="icofont icofont-businessman"></i>
                        </div>
                        <span class="count_title">Total Client’s</span>
                        <h2 class="count">1200</h2>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="count-box wow fadeInUp" data-wow-delay="0.8s">
                        <div class="count-icon">
                            <i class="icofont icofont-money"></i>
                        </div>
                        <span class="count_title">Wining Award</span>
                        <h2 class="count">1172</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
    <!-- Contact-Area --->
    <section class="section-padding" id="contact-area">
            <div class="container">
                        <div class="page-title">
                            <h3 class="bar-title">Contact Us</h3>
                        </div>

               <div class="contact-info"  >

                <div class="row row-flex">
                   
                    <div class="col-sm-4">
                   
                            <ul class="info">
                                <li>
                                    <span class="info-icon">
                                        <i class="icofont icofont-social-google-map"></i>
                                    </span> C-DAC COE,CVRCE, <br /> Bhubaneswar,752054
                                </li>
                                <li>
                                    <span class="info-icon">
                                        <i class="icofont icofont-ui-cell-phone"></i>
                                    </span>+91 9040272733 / 9040272755
                                </li>
                                <li>
                                    <span class="info-icon">
                                        <i class="icofont icofont-envelope"></i>
                                    </span> info@cvrgi.edu.in
                                </li>
                            </ul>
                            <div class="social-menu-2">
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#"><i class="icofont icofont-social-skype"></i></a>
                                <a href="#"><i class="icofont icofont-social-instagram"></i></a>
                            </div>
                       

                    </div>
               
                     <div class="col-sm-8">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14976.32702798064!2d85.7410259!3d20.2139234!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3bcb4b111050032b!2sC-DAC+Center+Of+Excellence%2CCVRCE+Bhubaneswar!5e0!3m2!1sen!2sin!4v1540982678024" frameborder="0" style="width: 100%;height: 300px;" allowfullscreen></iframe>
                         
                    </div>
                      
                    
                </div>
            </div>
          </div>
      </section>
    <!-- Contact-Area / -->
	<br><br>

    <!-- Footer-Area -->
    <footer class="footer-area">
        <!--<div class="footer-top section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <div class="footer-text">
                            <h4 class="upper"></h4>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure</p>
                            <div class="social-menu">
                                <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                                <a href="#"><i class="icofont icofont-social-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 col-md-offset-1">
                        <div class="footer-single">
                            <h4 class="upper">News</h4>
                            <ul>
                                <li><a href="#">Subsciption</a></li>
                                <li><a href="#">New Apps</a></li>
                                <li><a href="#">Download now</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div class="footer-single">
                            <h4 class="upper">Company</h4>
                            <ul>
                                <li><a href="#">Screenshot</a></li>
                                <li><a href="#">Fetures</a></li>
                                <li><a href="#">Price</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div class="footer-single">
                            <h4 class="upper">Resources</h4>
                            <ul>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Privacy &amp; Term</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div class="footer-single">
                            <h4 class="upper">Solutions</h4>
                            <ul>
                                <li><a href="#">Bug Fixing</a></li>
                                <li><a href="#">Upgrade</a></li>
                                <li><a href="#">Malware Protect</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <!--</div>-->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="icofont icofont-heart-alt" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"></a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer-Area / -->











<!-- log in form student -->
<!--<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content" style="background: none;width: 65%;margin-top: 20%;left: 15%;">
      <div class="container-fluid" >
      	 	<button type="button" class="close " data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      	    <form id="log" action="#">
      	    	<div style="margin-top: -10px; border-bottom:1px solid black;">
      	    	<span style="color:black;font-weight: bold;font-size: 20px;">Sign in</span>
      	    	
      	        </div>
      	    	<img  class="img img-responsive img-log" src="1.png">
      	    	<div class="form-group">
      	    		<label style="font-weight: bold;color: white;">College Roll no.</label>
      	    		<input type="text" name="uroll" class="form-control" placeholder="Enter College Roll no.">
      	    	</div>
      	    	<div class="form-group">
      	    		<label style="font-weight: bold;color: white;">Password</label>
      	    		<input type="password" name="upass" class="form-control" placeholder="Enter Password">
      	    	</div>
      	    	<div class="checkbox">
      	    		<label style="font-weight: bold;color: white;"><input type="checkbox">Remember me!</label>
      	    	</div>
      	    	<button type="submit" class="btn btn-success btn-block">Login</button>
      	    	<span style="font-size: 15px;color: white;">Don't have an Account?<a href="#forgot" style="font-weight: bold;font-size: 15px;"><button type="button" data-toggle="modal" data-target="#exampleModal2" style="border: none; background: none; color: inherit;padding: 0;font: inherit;cursor: pointer;outline: inherit;" data-dismiss="modal"><i class="fas fa-user-plus"></i>Sign Up here</button></a></span>
      	    </form>
      	    <br>
      	  </div>
    </div>
  </div>
</div>-->
<!--Log in form student-->






<!-- log in form student -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
<div class="modal-content" style="width: 65%;margin-top: 20%;left: 12%;padding:2%;">
      	 	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      	    <form id="login-form"  method="post" class="form-signin" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="padding: 4%;">
      	    	<div style="margin-top: -10px; border-bottom:1px solid black;">
      	    	<span style="color:black;font-weight: bold;font-size: 20px;">Sign in</span>
      	    	
      	        </div>
      	    	<img  class="img img-responsive img-log" src="1.png">
      	    	<!--<?php //require_once 'templates/message.php';?>-->
      	    	  <div class="form-group row">
                    <div class="col-sm-12">
                    	<label style="font-weight: bold;">College Roll no.</label>
      	    		<input type="text" name="uroll" class="form-control" placeholder="Enter College Roll no." style="text-transform:uppercase" required>
      	        </div>
      	    </div>



      	    	
      	    	<div class="form-group row">
      	    		<div class="col-sm-12">
      	    		<label style="font-weight: bold;">Password</label>
      	    		<input type="password" name="upass" class="form-control" placeholder="Enter Password" required>
      	    	</div>
      	    </div>
      	    	
      	    	<button type="submit" class="btn btn-block" name="signin" style="background-color: lightgreen;font-size: 15px;font-weight: bold;">Login</button>
      	    </form>
      	  </div>
    </div>
  </div>
</div>

<!--Log in form student-->






<!-- log in form Admin -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content" style="width: 65%;margin-top: 20%;left: 15%;padding:2%;">
            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            <form id="login-form" action="#" style="padding: 4%; method="post" class="form-signin" role="form">
                <div style="margin-top: -10px; border-bottom:1px solid black;">
                <span style="color:black;font-weight: bold;font-size: 20px;">Sign in</span>
                
                </div>
                <img  class="img img-responsive img-log" src="1.png">
                <div class="form-group">
                    <label style="font-weight: bold;">Admin Id</label>
                    <input id="upass" type="text" name="uroll" class="form-control" placeholder="Enter Admin Id" required>
                    
                </div>
                <div class="form-group">
                    <label style="font-weight: bold;">Password</label>
                    <input type="password" name="upass" id="apass" class="form-control " placeholder="Enter Password" required>
                </div>
                <p  onclick="tologin()" class="btn btn-block" style="background-color: lightgreen;font-size: 15px;font-weight: bold;">Login</p>
                
            </form>
           
          </div>
  </div>
</div>
<!--Log in form Admin-->



<!--SignUp form-->
 	<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content form-register"  style="padding:2%;width: 75%;margin-top: 10%;left: 10%;">
      	 	<button type="button" class="close " data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
            </button>
      	 			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="" role="form" id="register-form" style="padding: 4%;" >
                <br>
      	    	<div style="margin-top: -8px; border-bottom:1px solid black;">
      	    	<span style="color:black;font-weight: bold;font-size: 20px;">Create an account</span>
      	        </div>
                
                    <div class="form-group row" style="padding-top: 10px;">
                    <label for="colFormLabelSm" class="col-sm-4 col-form-label" style="font-weight: bold;padding-top: 10px;">College Roll no.</label>
                    <div class="col-sm-8">
                    	<input  class="form-control" placeholder="Enter College Roll no." 	name="uid" id="uid" type="text" class="form-control"  maxlength="8" style="text-transform:uppercase" required>
      	             <span id="uid_response" class="response"></span>
					 <span id="uid_response1" class="response1"></span>
                     </div>
                    </div>



                     <div class="form-group row">

                     		<label class="col-sm-2 col-form-label" style="font-weight: bold;">Year:</label>
                           <div class="col-sm-4">
                     		<select name="year" class="form-control">
  <option value="1st">1st</option>
  <option value="2nd">2nd</option>
  <option value="3rd">3rd</option>
  <option value="4th">4th</option>
 
  
</select>
</div>
		
                           
		
		<label  class="col-sm-2 col-form-label"  style="font-weight: bold;">Branch:</label>
		<div class="col-sm-4">
		<select name="branch" class="form-control">
  <option value="CS">CS</option>
  <option value="IT">IT</option>
  <option value="EE">EE</option>
  <option value="ET">ET</option>
  <option value="CH">CH</option>
  <option value="CE">CE</option>
  <option value="AE">AE</option>
  
  
</select>
</div>
</div>
	       
                     
                     <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-4 col-form-label" style="font-weight: bold;">Username</label>
                    <div class="col-sm-8">
                 
      	    		<input type="text" name="name"  id="name" class="form-control" placeholder="Enter Username" required>
					<span class="help-block"></span>
					</div>
					</div>

					<div class="form-group row">
                    <label for="colFormLabel" class="col-sm-4 col-form-label" style="font-weight: bold;">Email</label>
                    <div class="col-sm-8">
      	    
      	    		<input type="email" name="email" id="email" class="form-control" placeholder="Enter Email id" required>
					
					<span class="help-block"></span>
					</div>
				</div>

                   
                   <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-4 col-form-label" style="font-weight: bold;">Password</label>
                    <div class="col-sm-8">

      	    		<input type="password" name="password" id="password"  class="form-control" placeholder="Enter Password" required>
					<span class="help-block"></span>
				</div>
			</div>

                 <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-4 col-form-label" style="font-weight: bold;">Confirm Password</label>
                    <div class="col-sm-8">
      	    		<input name="confirm_password" id="confirm_password" type="password" class="form-control" placeholder="Confirm Password" required>
      	            <span class="help-block"></span>
      	        </div>
      	    </div>
      	    	    
      	    	<button type="submit" class="btn btn-block" name="signup"  id="signup" style="background-color: lightgreen;font-size: 15px;font-weight: bold;">Sign Up</button>
      	    	
      	    </form>
      	  </div>
    </div>
  </div>
</div>

<!--SignUp form-->



<!--error-login-->


<!--error-login-->





    <!--Vendor-JS-->
    <script src="classic/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="classic/js/vendor/bootstrap.min.js"></script>


    <!--Plugin-JS-->
    <script src="classic/js/owl.carousel.min.js"></script>
    <script src="classic/js/appear.js"></script>
    <script src="classic/js/bars.js"></script>
    <script src="classic/js/waypoints.min.js"></script>
    <script src="classic/js/counterup.min.js"></script>
    <script src="classic/js/easypiechart.min.js"></script>
    <script src="classic/js/mixitup.min.js"></script>
    <script src="classic/js/contact-form.js"></script>
    <script src="classic/js/scrollUp.min.js"></script>
    <script src="classic/js/magnific-popup.min.js"></script>
	
	
    <script src="classic/js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="classic/js/main.js"></script>
 <!--   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXZ3vJtdK6aKAEWBovZFe4YKj1SGo9V20&callback=initMap"></script>-->
    <script src="classic/js/maps.js"></script>
	

	


<script src="js/jquery.validate.min.js"></script>
    <script src="js/login.js"></script>

 <script src="three.js"></script>
 <script type="text/javascript">
window.onscroll = function() {scrollFunction()};

/*function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
*/
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

</script>
  
  <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/register.js"></script>
</body>
</html>
<?php ob_end_flush(); ?>
<?php unset($_SESSION['success'] ); unset($_SESSION['error']);  ?>    


<script>

$(document).ready(function(){

   $("#uid").keyup(function(){

      var uid = $("#uid").val().trim();

	  
	  //alert(uid);
	  
      if(uid != ''){

         $("#uid_response").show();

         $.ajax({
            url: 'uid_check.php',
            type: 'post',
            data: {uid:uid},
            success: function(response){
console.log(response);
                if(response > 0){
					$("#signup").attr("disabled", true);
					//alert("Hello");
                    $("#uid_response").html("<span class='not-exists'>* Roll No Already Exist.</span>");
                }else{
					$('#register1').attr("disabled", false);
                   $("#uid_response").html("<span class='exists'>&nbsp;</span>");
                }

             }
          });
      }else{
         $("#uid_response").hide();
      }

    });

 });
 
 
 
 
 
 
 $(document).ready(function(){
 $('#uid').keyup(function() {
	
	   var uid = $("#uid").val().trim();
	   
	//alert(this.value);
    if (this.value.match(/^[A-Za-z]{2}[1-3][0-9][0][0-9][0-9]{2}/)) {
		
		$("#signup").attr("disabled",false);
		//$("#register1").attr("disabled",false);
        $('.response1').html('').css("color","green");
	
	
    }else{
		$("#signup").attr("disabled", true);
       $('.response1').html('wrong format').css("color","red");
	 
	  // alert("not valid");
    }
});

 });

 

 
</script>



