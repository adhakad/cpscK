<?php
		include "database.php";
                $db = new database();
                //show all data query.............................................................................
		//main img slider
		$query = "SELECT * FROM crud1";
		$read = $db->select($query);
                
                //work img slider
                $query1 = "SELECT * FROM images";
                $read1 = $db->select($query1);
                
                
                $query = "SELECT * FROM pro_slider";
		$read2 = $db->select($query);
                
		?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Beryllium &mdash; Free Website Template, Free HTML5 Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />
	
	<!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
        <link rel="stylesheet" href="cards/crd_pro.css">
        <link rel="stylesheet" href="cards/cards_product.css">
        <link rel="stylesheet" href="cards/cards_pro.css">
        <link rel="stylesheet" href="cards/cards.css">
        <link rel="stylesheet" href="cards/crd.css">
        <link rel="stylesheet" href="css/custom.css"><!-- use for service section -->
	<link rel="stylesheet" href="css/style.css"><!-- use for header & img slider section -->
        
        <!-- magnific-popup CSS -->
        <link rel="stylesheet" href="css/imgstyle/gallery_img.css"><!-- use for work img section -->
        <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css"><!-- use for work img section -->


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	

	</head>
        <body style="width: 100%;">
            	
	<div class="gtco-loader"></div>
	
	
        <div id="page">    
		
                    <nav class="gtco-nav" role="navigation">
			<div class="gtco-container">                            
				<div class="row headingfor">                                    
                                    <div class="col-xs-8 col-sm-4 col-lg-5" style="height: 70px;">                                        
                                            <div class="col-xs-11 col-xs-push-1 col-lg-push-2 heading">
                                                <h4 style="color: #f1f1f1;">Central <span>public school</span></h4>
                                            </div>                                        
                                    </div>
                                    <div class="col-xs-4 col-sm-8 col-lg-7 text-center menu-1" >
                                        <ul>
                                           
					    <li><a href="index.html">Home</a></li>
					    <li><a href="about.html">About</a></li>
					    <li class="has-dropdown">
						<a href="services.html">Services</a>
						<ul class="dropdown">
                                                    <li><a href="admin.php">Admin</a></li>
						    <li><a href="#">DEMO</a></li>
						    <li><a href="#">DEMO</a></li>
						    <li><a href="#">DEMO</a></li>
						</ul>
					    </li>
					    <li class="has-dropdown">
						<a href="#">Services</a>
						<ul class="dropdown">
						    <li><a href="#">HTML5</a></li>
						    <li><a href="#">CSS3</a></li>
						    <li><a href="#">Sass</a></li>
						    <li><a href="#">jQuery</a></li>
						</ul>
					    </li>
							
					    <li><a href="contact.html">Contact</a></li>
                                            <a class="btn btn-md nav-btn">Login</a>
                                        </ul>                                            
			            </div>
				</div>
				
			</div><!--ggj-->
		</nav>

            <div class="gtco-container" style="padding-top: 20px;">
               
			<div class="row">
				<div class="col-md-12">
                                   
                                    <div class="owl-carousel owl-carousel-fullwidth">
						
                                                                
                                                                
                                            <?php if ($read) { ?>

			                        <?php while($row = $read->fetch_array())  { ?>                    
                                              	
                                            
                                        <img src="<?php echo 'imagess/'.$row['image'];?>" height="350px"/>
                                            
			                        <?php } ;?>
		                            <?php } ;?>

			                        
                                        </div>
				    </div>  
                                
				</div>
			</div>
                    
		
<!-- service section start & css/custom.css incuded--> 

        <div class="container" style="height: 100px;">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="row">
                        <div class="col-xs-4 col-xs-offset-4 abc">
                            <h3 style="color:#54238B;">SERVICE'S</h3>
                            
                        </div>
                    </div>
                </div>  
            </div>
        </div> 
    
<div class="container" style="padding-left:45px;padding-bottom: 100px;">
        
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 " style="padding-top: 20px;"> <a href="https://google.com">
            <div class="serviceBox"> 
               <div class="service-icon">
                   <img src="web_img/exm-1.png" height="100">
                </div>
                <h1 style="color:#54238B;/*#008c49*/ font-weight: bold; ">Online Exam</h1>
                
            </div>
            </a></div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 "  style="padding-top: 20px;"> <a href="admin.php">
            <div class="serviceBox">
                <div class="service-icon">
                    <img src="web_img/study-2.png" height="100">
                </div>
                <h1 style="color:#54238B;/*#008c49*/ font-weight: bold; ">Online Study Material</h1>
                <div class="service-content" >
                    
                </div>
            </div>
            </a></div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 "  style="padding-top: 20px;"> <a href="admin.php">
            <div class="serviceBox"> 
             <div class="service-icon">
                 <img src="web_img/admision-1.jpg" height="100">
                </div>
                <h1 style="color:#54238B;/*#008c49*/ font-weight: bold; ">School Admission</h1>
                
            </div>
            </a></div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 "  style="padding-top: 20px;"> <a href="admin.php">
            <div class="serviceBox">
                <div class="service-icon">
                    <img src="web_img/class-1.png" height="100">
                </div>
                <h1 style="color:#54238B;/*#008c49*/ font-weight: bold; ">School Result</h1>
                
            </div>
            </a></div>
 
    </div>    
</div>
<div class="row" style="padding-left:200px;">
    
    <img src="web_img/school-1.png" width="60%" height="60%">
    
</div>
    <div class="row">
        <div style="height: 10px;background-color:#e2daea; ">
            
        </div>
    </div>                
                            <div class="row" style="padding-top: 10px;padding-bottom: 30px;background-color: #fff;"> 
                                <div class="row" style="padding-left: 22px;padding-bottom: 3px;">
                                    <div class="col-xs-6">
                                        <h5 style="font-size: 16px;">Exam Subject's</h5>  
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="owl-carousel owl-carousel-fullwidth-cards-product">
                                            <div class="cards_product" style="background:linear-gradient(to right,#bc7d79,#e9e0c9);">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <img src="web_img/phy-1.png">
                                                    </div>
                                                   
                                                   <h5 style="margin-top: 25%;color: #fff;">Physics</h5>
                                                    
                                                </div>
                                            </div> 
                                           <div class="cards_product" style="background:linear-gradient(to right,#5ba77e,#b3e1e1);">
                                               <div class="boxs">
                                                   <div class="imgs" style="width: 140px;height: 140px;">
                                                        <img src="web_img/che-1.png">
                                                    </div>
                                                   
                                                   <h5 style="margin-top: 25%;color: #fff;">Chemistry</h5>
                                                    
                                                </div>
                                            </div>
                                        <div class="cards_product" style="background:linear-gradient(to right,#a7875b,#e1e1b3);">
                                               <div class="boxs" >
                                                   <div class="imgs" style="padding-top: 30px;width: 40%;height: 40%;">
                                                        <img src="web_img/math-1.png">
                                                    </div>
                                                    <h5 style="margin-top: 25%;color: #fff;">Mathematics</h5>
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div class="cards_product" style="background:linear-gradient(to right,#65a75b,#d7e1b3);">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <img src="web_img/bio-1.png">
                                                    </div>
                                                    <h5 style="margin-top: 25%;color: #fff;">Biology</h5>
                                                   
                                                    
                                                </div>
                                            </div>
                                        <div class="cards_product" style="background:linear-gradient(to right,#a75b6c,#e1b9b3);">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <img src="web_img/san-1.png">
                                                    </div>
                                                   
                                                     <h5 style="margin-top: 25%;color: #fff;">Sanskrit</h5>
                                                    
                                                </div>
                                            </div>
                                        <div class="cards_product" style="background:linear-gradient(to right,#a75f5b,#e1d4b3);">
                                               <div class="boxs">
                                                   <div class="imgs" style="width: 70%;height: 70%;">
                                                    
                                                       <img src="web_img/school-1.png">
                                                    </div>
                                                   
                                                     <h5 style="margin-top:10px;color: #fff;">Geography</h5>
                                                    
                                                </div>
                                            </div>
                                            <div class="cards_product" style="background:linear-gradient(to right,#a75b8e,#e1b3cf);">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                       <img src="web_img/geo-1.svg"> 
                                                    </div>
                                                   
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div class="cards_product" style="background:linear-gradient(to right,#79bc7f,#b3e1cb);">
                                               <div class="boxs">
                                                   <div class="imgs" style="width: 50%; height: 50%;">
                                                        <img src="web_img/compass (1).png">
                                                    </div>
                                                   
                                                   <h5 style="margin-top: 25%;color: #fff;">Chemistry</h5>
                                                       
                                                </div>
                                            </div>
                                        <div class="cards_product" style="background:linear-gradient(to right,#5ba78b,#b3dce1);">
                                               <div class="imgs" style="width: 140px;height: 140px;">
                                                   <img src="web_img/phy-1.png.png">
                                                    </div>
                                                   
                                                   <h5 style="margin-top: 25%;color: #fff;">Physics</h5>
                                                       
                                                </div>
                                            </div>
                                     </div>
				</div> 
		            </div>

    <div class="row">
        <div style="height: 10px;background-color:#e2daea; ">
            
        </div>
    </div>
                    
                            <div class="row" style="padding-top: 10px;padding-bottom: 30px;background-color: #fff;"> 
                                <div class="row" style="padding-left: 22px;padding-bottom: 3px;">
                                    <div class="col-xs-6">
                                        <h5 style="font-size: 16px;"> School Faculty</h5>  
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="owl-carousel owl-carousel-fullwidth-cards-pro">
                                        <div class="cards_pro" style="background-color:#ea487b;">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p style="color: #fff;"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                     
                                    
                                           <div class="cards_pro"style="background-color:#ea487b;">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-book"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="cards_pro" style="background-color:#ea487b;">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-globe"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="cards_pro" style="background-color:#ea487b;">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="cards_pro" style="background-color:#ea487b;">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="cards_pro" style="background-color:#ea487b;">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                            <div class="cards_pro" style="background-color:#ea487b;">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="cards_pro" style="background-color:#ea487b;">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="cards_pro" style="background-color:#ea487b;">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                     </div>
				</div> 
		            </div>

    
    <div class="row">
        <div style="height: 10px;background-color:#e2daea; ">
            
        </div>
    </div>
                        
                            <div class="row" style="padding-top: 10px;padding-bottom: 30px;background-color: #fff;"> 
                                <div class="row" style="padding-left: 22px;padding-bottom: 3px;">
                                    <div class="col-xs-6">
                                        <h5 style="font-size: 16px;">Exam Subject's</h5>  
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="owl-carousel owl-carousel-fullwidth-crd-pro">
                                        <div class="crd-pro" style="background-color:#ea487b;">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                     
                                    
                                           <div class="crd-pro"style="background-color:#ea487b;">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-book"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="crd-pro" style="background-color:#ea487b;">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-globe"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="crd-pro" style="background-color:#ea487b;">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="crd-pro" style="background-color:#ea487b;">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="crd-pro" style="background-color:#ea487b;">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                            <div class="crd-pro" style="background-color:#ea487b;">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="crd-pro" style="background-color:#ea487b;">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="crd-pro" style="background-color:#ea487b;">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                     </div>
				</div> 
		            </div>
    
                        

    

<!-- service section end-->               
   <!-- Work -->
    <div>
        <div class="row">
            <div class="col-xs-12" style="height: 1px;background-color: #b5a0ca;"></div>
            
        </div>
    </div>   
   <section id="work">
       <div class="content-box">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s" style="padding-left: 43%;padding-bottom: 40px;">
                <h3 style="color:#54238B;"> SCHOOL GALLERY </h3>
                <div class="content-title-underline"></div>
            </div>
            <div class="container-fluid">
                <div class="row no-gutters wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="col-xs-12">
                <?php if ($read1) { 
                while($row1 = $read1->fetch_array())  { ?>
                    
                    
                        
                        <div class="col-md-3 col-sm-3">
                            
                                <div class="img-wrapper" style="margin-left:8px;margin-right:8px;">
                                    <a href="<?php echo 'img/work/'.$row1['img'];?>" title="Work Description Goes Here">
                                        <img src="<?php echo 'img/work/'.$row1['img'];?>" class="img-responsive" alt="Work">
                                    </a>                          
                                </div>                         

                            
                        </div>

                <?php }  } ?>
                    </div>     
                </div>
            </div>
        </div>
       </section>
        <!-- End Content Box -->
                <div class="row" style="background-color: #f8f1ff;">
                    <div class="" style="background-color: #fff;padding-top: 20px;padding-bottom: 100px;box-shadow:0px 2px 10px 0px rgba(0,0,180,0.1);">
                        <div class="container" style="margin-top: 100px; padding:0px 0px 0px 20px;background:linear-gradient(to right , #ff1d7f,#f7a3a6);border-radius: 7px;">
                            <div class="row" style="padding-top: 80px;padding-bottom: 50px;">                                
                                <div class="col-xs-12">
                                    <div class="owl-carousel owl-carousel-fullwidth-a">
                                           <div class="cards">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                     
                                    
                                           <div class="cards">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-book"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="cards">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-globe"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="cards">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="cards">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="cards">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                            <div class="cards">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="cards">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="cards">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                     </div>
				</div> 
		            </div>
                        </div>
                    </div>
                </div>
                    
                        
                        <div class="container-fluid" style= "padding:0px 0px 0px 15px;border-radius:7px;">
                            <div class="row" style="padding-top: 40px;padding-bottom: 20px;border: 1px solid aqua;">                                
                                <div class="col-xs-12">
                                    <div class="owl-carousel owl-carousel-fullwidth-b">
                                        <div class="crd">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                     
                                    
                                        <div class="crd">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-book"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="crd">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-globe"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="crd">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="crd">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="crd">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                            <div class="crd">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="crd">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="crd">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                        <div class="crd">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div><div class="crd">
                                               <div class="boxs">
                                                    <div class="imgs">
                                                        <i class="fa fa-apple"></i>
                                                    </div>
                                                   
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    
                                                </div>
                                            </div>
                                     </div>
				</div> 
		            </div>
                        </div>
        <div style="background-color: #fff;height: 100px;"></div>
                    
                
   
   
                        <div class="gtco-container">               
			    <div class="row">
                                <div class="col-xs-12">
                                    <div class="owl-carousel owl-carousel-width">
                                            <?php if ($read2) { ?>
			                        <?php while($row = $read2->fetch_array())  { ?>                                            
                                        <img  src="<?php echo 'imagess/'.$row['image'];?>" height="150px"style="border:2px solid transparent;border-radius: 7px;"/>
     			                        <?php } ;?>
		                            <?php } ;?>
                                    </div>
				</div>                                  
		            </div>
	                </div> 
   <div style="height: 100px;"></div>
   <footer>
       <div class="container-fluid" style="background:#382852;color:#e4dcf1; ">
           <div class="row" style="height: 400px;">
               <div class="col-xs-12 col-md-4">
                   <div class="row">
                       <div class="col-xs-8 col-xs-offset-2">
                           <h4>Web Application</h4>
                           <h5 style="color:#c1b3d5;margin-top: 20px; ">Web Application</h5>
                       </div>
                   </div>
               </div>
               <div class="col-xs-12 col-md-4">
                   <div class="row">
                       <div class="col-xs-8 col-xs-offset-2">
                           <h4>Web Application</h4>
                       </div>
                   </div>
               </div>
               <div class="col-xs-12 col-md-4">
                   <div class="row">
                       <div class="col-xs-8 col-xs-offset-2">
                           <h4 style="color: #e5dced;">Web Application</h4>
                       </div>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-xs-12" style="height: 200px;">
                   <div></div>
               </div>
           </div>
       </div>
   </footer>
        
    </div>    
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
        
        
        
    <!-- WOW JS -->
    <script src="js/wow/wow.min.js"></script><!-- use for work img section -->
    <!-- magnific-popup JS -->
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script><!-- use for work img section -->

        
	<!-- Main -->
	<script src="js/main.js"></script>
        <script src="js/cards/cards.js"></script>
        <script src="js/cards/crd.js"></script>
        <script src="js/cards/cards_pro.js"></script>
        <script src="js/cards/crd_pro.js"></script>
        <script src="js/cards/cards_product.js"></script>
        <script src="js/main2.js"></script>

	</body>
</html>

