<?php include "model/db_connect.php"?>
<!doctype html>
<html lang="en">

<!-- Mirrored from quomodothemes.website/html/aball/aball/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Sep 2020 13:30:05 GMT -->
<head>

<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Aball</title>

<?php include "plugins/resources.php"?>
</head>
<body class="home-2-bg">

<div class="preloader">
<div class="lds-ellipsis">
<span></span>
<span></span>
<span></span>
</div>
</div>


<header class="header-area header-2-area">
	<div class="header-top">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="header-top-item">
<div class="info">
<ul>
<li><img src="assets/images/phone.svg" alt=""> 504-882-0554</li>
<li><img src="assets/images/email.svg" alt=""> <a href="https://quomodothemes.website/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cdaea2a3b9acaeb98dbda5acbfa0ace3aea2a0">[email&#160;protected]</a></li>
</ul>
</div>
<div class="sicial">
<ul>
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
  <?php include "plugins/navigation.php" ?>
</header>


<section class="hero-slider">
	<?php
     $sql = "SELECT * FROM tbl_banner";
     $execute = mysqli_query($connect,$sql);
     while ($banner = mysqli_fetch_assoc($execute)) {
     	$title = $banner['title'];
     	$subtitle = $banner['subtitle'];
     	$image = "0.0.0.0/".$banner['image'];
     	?>
			<div class="hero-area hero-2-area">
			<div class="section__bg"></div>
			<div class="container">
			<div class="row align-items-center">
			<div class="col-lg-7">
			<div class="hero-2-content">
			<h1 class="title" data-animation="fadeInLeft" data-delay="0.6s"><?php echo $title?></h1>
			<div class="play" data-animation="fadeInUp" data-delay="0.7s">
			<p>
				<?php echo $subtitle?>
			</p>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
     	<?php
     }
	?>
</section>


<section class="sub-2-area">
<div class="container">
<div class="sub-box">
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="sub-2-item mt-30">
<img src="assets/images/sub-1.svg" alt="">
<h4 class="title">Innovative solutions</h4>
<p>Sitting proudly atop the storey penthouse. Natty master suite bedroom phenomenally.</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="sub-2-item mt-30">
<img src="assets/images/sub-2.svg" alt="">
<h4 class="title">Experienced team</h4>
<p>Sitting proudly atop the storey penthouse. Natty master suite bedroom phenomenally.</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="sub-2-item mt-30 item-3">
<img src="assets/images/sub-3.svg" alt="">
<h4 class="title">Flexible pricing</h4>
<p>Sitting proudly atop the storey penthouse. Natty master suite bedroom phenomenally.</p>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="about-2-area">
<div class="container">
<div class="row">
<div class="col-lg-5 col-md-9">
<div class="about-2-content mt-30">
<span>About us</span>
<h3 class="title">We help to create</h3>
<p>Sitting proudly atop is the two-storey penthouse. The nati master bedroom suite is phenomenally spacious makes the most of a its unrivalled position.</p>
<div class="item active mt-60">
<h4 class="title">Designs you will love</h4>
<p>Sitting proudly atop is the two-storey penthouse. The and opens breathtaking plunge.</p>
</div>
<div class="item mt-40">
<h4 class="title">A healthy agency relationship</h4>
<p>Sitting proudly atop is the two-storey penthouse. The and opens breathtaking plunge.</p>
</div>
<a class="main-btn main-btn-3 mt-65" href="#">Learn More</a>
</div>
</div>
<div class="col-lg-7">
<div class="about-2-thumb mt-30 animated wow fadeInRight" data-wow-duration="3000ms" data-wow-delay="0ms">
<div class="thumb text-right">
<img src="assets/images/about-thumb-2.png" alt="">
</div>
<div class="thumb-2 ml-80">
<img src="assets/images/about-thumb-3.png" alt="">
<div class="box">
<h3 class="title"><span>25</span>+</h3>
<span> Years of Experience</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="service-2-area">
<div class="section__bg"></div>
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title-3 section-title-4 text-center">
<span>Our Services</span>
<h3 class="title">Our Services</h3>
</div>
</div>
</div>
<div class="row justify-content-center">


<?php

  $sql = "SELECT * FROM services";
  $exe = mysqli_query($connect,$sql);
  while($services = mysqli_fetch_assoc($exe))
  {
  	$heading = $services['title'];
  	$service_desc = $services['description'];

  	?>
  	<div class="col-lg-4 col-md-6 col-sm-11">
<div class="service-2-item text-center mt-30 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0ms">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="44.286" height="50" viewBox="0 0 44.286 50">
<defs>
<linearGradient x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
<stop offset="0" stop-color="#ff564f" />
<stop offset="1" stop-color="#fad029" />
</linearGradient>
</defs>
<path data-name="Union 6" d="M-1644.982,50V41.689h3.593a46.853,46.853,0,0,0,4.9-13.213h-10.016l1.524,1.523-1.289,1.288L-1650,27.561l3.728-3.728,1.289,1.289-1.532,1.532h10.38a58.26,58.26,0,0,0,.874-9.449h-3.341V12.362h3.044L-1640.629,0h8.054V3.454h1.654V0h5.215V3.454h1.654V0H-1616l-5.07,12.362h3.044V17.2h-3.341a58.245,58.245,0,0,0,.874,9.449h4.512l2.443-2.443h7.823l-3.351,3.35,3.351,3.35h-7.823l-2.434-2.435h-4.164a46.863,46.863,0,0,0,4.9,13.213h3.593V50Zm1.792-1.822h29.755V43.511h-29.755Zm3.837-6.488h22.082a49.18,49.18,0,0,1-4.688-13.213h-2.09a4.354,4.354,0,0,1-4.256,3.438,4.356,4.356,0,0,1-4.355-4.356,4.354,4.354,0,0,1,4.355-4.354,4.351,4.351,0,0,1,4.259,3.45h1.743a60.111,60.111,0,0,1-.846-9.322h-10.328A53.392,53.392,0,0,1-1639.354,41.689Zm25.044-14.128,1.527,1.527h2.667l-1.527-1.527,1.527-1.527h-2.667Zm-7.06-12.012v0h1.572V14.016h-17.033v1.535h1.573v0Zm-12.379-3.46h10.869l4.231-10.317h-3.624V5.225h-5.216V1.771h-1.653V5.225h-5.216V1.771h-3.623Z" transform="translate(1650)" fill="url(#linear-gradient)" />
</svg>
</div>
<h4 class="title"><?php echo $heading?></h4>
<p><?php echo $service_desc?></p>
<div class="service-dot">
<img src="assets/images/service-dot-2.png" alt="">
<div class="item">
<img src="assets/images/icon/service-icon-1.png" alt="">
</div>
</div>
</div>
</div>
  	<?php
  }

?>
</div>
</div>
</section>


<section class="portfolio-2-area">
<div class="container">
<div class="row ">
<div class="col-lg-12">
<div class="section-title-3 text-center">
<span>Our work</span>
<h3 class="title">Our Portfolio</h3>
</div>
</div>
</div>
<div class="row grid">
<div class="col-lg-4 col-md-6 col-sm-12 cat-2 cat-4">
<div class="portfolio-2-item mt-30">
<img src="assets/images/portfolio/portfolio-1.png" alt="">
<div class="portfolio-overlay">
<h4 class="title">Half circle illustration</h4>
<span>Illustration, Graphic Design</span>
</div>
<div class="portfolio-overlay-2 text-center">
<h4 class="title">Product photography around the world</h4>
<span>Illustration, Graphic Design</span><br>
<a href="#">
Show more
<span class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="10.196" height="12.663" viewBox="0 0 10.196 12.663">
<path data-name="Path 18155" d="M32.324,974.539,28.2,978.448a.731.731,0,0,0-.052.947.678.678,0,0,0,.948,0l3.027-2.864v9.346a.652.652,0,1,0,1.3,0v-9.346l3.027,2.864a.664.664,0,0,0,.948,0,.714.714,0,0,0-.052-.947l-4.126-3.909A.661.661,0,0,0,32.324,974.539Z" transform="translate(-27.676 -974.112)" fill="#fff" stroke="#fff" stroke-width="0.5" />
</svg>
</span>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 cat-3 cat-4">
<div class="portfolio-2-item mt-30">
<img src="assets/images/portfolio/portfolio-2.png" alt="">
<div class="portfolio-overlay">
<h4 class="title">Half circle illustration</h4>
<span>Illustration, Graphic Design</span>
</div>
<div class="portfolio-overlay-2 text-center">
<h4 class="title">Product photography around the world</h4>
<span>Illustration, Graphic Design</span><br>
<a href="#">
Show more
<span class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="10.196" height="12.663" viewBox="0 0 10.196 12.663">
<path data-name="Path 18155" d="M32.324,974.539,28.2,978.448a.731.731,0,0,0-.052.947.678.678,0,0,0,.948,0l3.027-2.864v9.346a.652.652,0,1,0,1.3,0v-9.346l3.027,2.864a.664.664,0,0,0,.948,0,.714.714,0,0,0-.052-.947l-4.126-3.909A.661.661,0,0,0,32.324,974.539Z" transform="translate(-27.676 -974.112)" fill="#fff" stroke="#fff" stroke-width="0.5" />
</svg>
</span>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 cat-1 cat-2 cat-3">
<div class="portfolio-2-item mt-30">
<img src="assets/images/portfolio/portfolio-3.png" alt="">
<div class="portfolio-overlay">
<h4 class="title">Half circle illustration</h4>
<span>Illustration, Graphic Design</span>
</div>
<div class="portfolio-overlay-2 text-center">
<h4 class="title">Product photography around the world</h4>
<span>Illustration, Graphic Design</span><br>
<a href="#">
Show more
<span class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="10.196" height="12.663" viewBox="0 0 10.196 12.663">
<path data-name="Path 18155" d="M32.324,974.539,28.2,978.448a.731.731,0,0,0-.052.947.678.678,0,0,0,.948,0l3.027-2.864v9.346a.652.652,0,1,0,1.3,0v-9.346l3.027,2.864a.664.664,0,0,0,.948,0,.714.714,0,0,0-.052-.947l-4.126-3.909A.661.661,0,0,0,32.324,974.539Z" transform="translate(-27.676 -974.112)" fill="#fff" stroke="#fff" stroke-width="0.5" />
</svg>
</span>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 cat-1 cat-3 cat-4">
<div class="portfolio-2-item mt-30">
<img src="assets/images/portfolio/portfolio-5.png" alt="">
<div class="portfolio-overlay">
<h4 class="title">Half circle illustration</h4>
<span>Illustration, Graphic Design</span>
</div>
<div class="portfolio-overlay-2 text-center">
<h4 class="title">Product photography around the world</h4>
<span>Illustration, Graphic Design</span><br>
<a href="#">
Show more
<span class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="10.196" height="12.663" viewBox="0 0 10.196 12.663">
<path data-name="Path 18155" d="M32.324,974.539,28.2,978.448a.731.731,0,0,0-.052.947.678.678,0,0,0,.948,0l3.027-2.864v9.346a.652.652,0,1,0,1.3,0v-9.346l3.027,2.864a.664.664,0,0,0,.948,0,.714.714,0,0,0-.052-.947l-4.126-3.909A.661.661,0,0,0,32.324,974.539Z" transform="translate(-27.676 -974.112)" fill="#fff" stroke="#fff" stroke-width="0.5" />
</svg>
</span>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 cat-2">
<div class="portfolio-2-item mt-30">
<img src="assets/images/portfolio/portfolio-6.png" alt="">
<div class="portfolio-overlay">
<h4 class="title">Half circle illustration</h4>
<span>Illustration, Graphic Design</span>
</div>
<div class="portfolio-overlay-2 text-center">
<h4 class="title">Product photography around the world</h4>
<span>Illustration, Graphic Design</span><br>
<a href="#">
Show more
<span class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="10.196" height="12.663" viewBox="0 0 10.196 12.663">
<path data-name="Path 18155" d="M32.324,974.539,28.2,978.448a.731.731,0,0,0-.052.947.678.678,0,0,0,.948,0l3.027-2.864v9.346a.652.652,0,1,0,1.3,0v-9.346l3.027,2.864a.664.664,0,0,0,.948,0,.714.714,0,0,0-.052-.947l-4.126-3.909A.661.661,0,0,0,32.324,974.539Z" transform="translate(-27.676 -974.112)" fill="#fff" stroke="#fff" stroke-width="0.5" />
</svg>
</span>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 cat-3">
<div class="portfolio-2-item mt-30">
<img src="assets/images/portfolio/portfolio-4.png" alt="">
<div class="portfolio-overlay">
<h4 class="title">Half circle illustration</h4>
<span>Illustration, Graphic Design</span>
</div>
<div class="portfolio-overlay-2 text-center">
<h4 class="title">Product photography around the world</h4>
<span>Illustration, Graphic Design</span><br>
<a href="#">
Show more
<span class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="10.196" height="12.663" viewBox="0 0 10.196 12.663">
<path data-name="Path 18155" d="M32.324,974.539,28.2,978.448a.731.731,0,0,0-.052.947.678.678,0,0,0,.948,0l3.027-2.864v9.346a.652.652,0,1,0,1.3,0v-9.346l3.027,2.864a.664.664,0,0,0,.948,0,.714.714,0,0,0-.052-.947l-4.126-3.909A.661.661,0,0,0,32.324,974.539Z" transform="translate(-27.676 -974.112)" fill="#fff" stroke="#fff" stroke-width="0.5" />
</svg>
</span>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 cat-1 cat-2">
<div class="portfolio-2-item mt-30">
<img src="assets/images/portfolio/portfolio-9.png" alt="">
<div class="portfolio-overlay">
<h4 class="title">Half circle illustration</h4>
<span>Illustration, Graphic Design</span>
</div>
<div class="portfolio-overlay-2 text-center">
<h4 class="title">Product photography around the world</h4>
<span>Illustration, Graphic Design</span><br>
<a href="#">
Show more
<span class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="10.196" height="12.663" viewBox="0 0 10.196 12.663">
<path data-name="Path 18155" d="M32.324,974.539,28.2,978.448a.731.731,0,0,0-.052.947.678.678,0,0,0,.948,0l3.027-2.864v9.346a.652.652,0,1,0,1.3,0v-9.346l3.027,2.864a.664.664,0,0,0,.948,0,.714.714,0,0,0-.052-.947l-4.126-3.909A.661.661,0,0,0,32.324,974.539Z" transform="translate(-27.676 -974.112)" fill="#fff" stroke="#fff" stroke-width="0.5" />
</svg>
</span>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 cat-1 cat-2 cat-3">
<div class="portfolio-2-item mt-30">
<img src="assets/images/portfolio/portfolio-8.png" alt="">
<div class="portfolio-overlay">
<h4 class="title">Half circle illustration</h4>
<span>Illustration, Graphic Design</span>
</div>
<div class="portfolio-overlay-2 text-center">
<h4 class="title">Product photography around the world</h4>
<span>Illustration, Graphic Design</span><br>
<a href="#">
Show more
<span class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="10.196" height="12.663" viewBox="0 0 10.196 12.663">
<path data-name="Path 18155" d="M32.324,974.539,28.2,978.448a.731.731,0,0,0-.052.947.678.678,0,0,0,.948,0l3.027-2.864v9.346a.652.652,0,1,0,1.3,0v-9.346l3.027,2.864a.664.664,0,0,0,.948,0,.714.714,0,0,0-.052-.947l-4.126-3.909A.661.661,0,0,0,32.324,974.539Z" transform="translate(-27.676 -974.112)" fill="#fff" stroke="#fff" stroke-width="0.5" />
</svg>
</span>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 cat-1 cat-2 cat-4">
<div class="portfolio-2-item mt-30">
<img src="assets/images/portfolio/portfolio-7.png" alt="">
<div class="portfolio-overlay">
<h4 class="title">Half circle illustration</h4>
<span>Illustration, Graphic Design</span>
</div>
<div class="portfolio-overlay-2 text-center">
<h4 class="title">Product photography around the world</h4>
<span>Illustration, Graphic Design</span><br>
<a href="#">
Show more
<span class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="10.196" height="12.663" viewBox="0 0 10.196 12.663">
<path data-name="Path 18155" d="M32.324,974.539,28.2,978.448a.731.731,0,0,0-.052.947.678.678,0,0,0,.948,0l3.027-2.864v9.346a.652.652,0,1,0,1.3,0v-9.346l3.027,2.864a.664.664,0,0,0,.948,0,.714.714,0,0,0-.052-.947l-4.126-3.909A.661.661,0,0,0,32.324,974.539Z" transform="translate(-27.676 -974.112)" fill="#fff" stroke="#fff" stroke-width="0.5" />
</svg>
</span>
</a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="portfolio-btn text-center mt-40">
<a class="main-btn main-btn-3" href="#">ALL Projects</a>
</div>
</div>
</div>
</div>
</section>


<section class="testimonial-2-area">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="section-title-3">
<span>Testimonial</span>
<h3 class="title">What our clients say about our agency.</h3>
</div>
<div class="testimonial-2-active mt-100">
 
 <?php
  $sql = "SELECT * FROM testimonies";
  $exe = mysqli_query($connect,$sql);
  while($testimonies = mysqli_fetch_assoc($exe)){
  	$testimony_desc = $testimonies['description'];
  	$name = $testimonies['name'];
  	$title = $testimonies['title'];
  	$avatar = "0.0..0/".$testimonies['avatar'];
  	?>
  	<div class="item">

<p>“<?php echo $testimony_desc?>”</p>
<div class="info mt-30">
<img src="<?php echo $avatar?>" alt="">
<h5><?php echo $name?></h5>
<span><?php echo $title?></span>
</div>
</div>
  	<?php
  }
 ?>

</div>
</div>
</div>
</div>
</section>


<section class="about-company-area">
<div class="section__bg"></div>
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="about-company-content mt-30">
<h3 class="title">About our company</h3>
<p>Triplet I award-winning interdisciplinary architectule studio cultural, residential and commercial projects built worldwide. We pride ourselves on being builders creating architectural. We pride ourselves on being from agency.</p>
<a class="main-btn main-btn-3" href="#">Let’s Chat</a>
</div>
</div>
<div class="col-lg-6">
<div class="company-brand-area mt-30">
<div class="row">
   <?php

    $sql = "SELECT * from tbl_brands";
    $exe = mysqli_query($connect,$sql);
    while ($brands = mysqli_fetch_assoc($exe)) {
    	$brand_image = "0.0.0.0/".$brands['logo'];
    	$link = $brands['link'];
    	?>
    	<div class="col-lg-6 col-md-6 col-sm-6">
<div class="company-brand-item mt-20">
<a href="<?php echo $link?>" target="_blank"><img src="<?php echo $brand_image?>" alt="brand"></a>
</div>
</div>
    	<?php
    }

   ?>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="team-2-area">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title-3 text-center">
<span>Our Team</span>
<h3 class="title">Special Team</h3>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-3 col-md-6 col-sm-8">
<div class="team-2-item mt-30 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0ms">
<img src="assets/images/team-member.png" alt="">
<div class="team-overlay">
<div class="item">
<h4 class="title">Abdur Rohman</h4>
<span>Product Designer</span>
<ul>
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-youtube"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
</ul>
</div>
</div>
<div class="team-overlay-2 text-center">
<img src="assets/images/team-1.png" alt="">
<h4 class="title">Abdur Rohman</h4>
<span>Product Designer</span>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-8">
<div class="team-2-item mt-30 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
<img src="assets/images/team-member.png" alt="">
<div class="team-overlay">
<div class="item">
<h4 class="title">Mehedi Hasan</h4>
<span>Product Designer</span>
<ul>
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-youtube"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
</ul>
</div>
</div>
<div class="team-overlay-2 text-center">
<img src="assets/images/team-1.png" alt="">
<h4 class="title">Mehedi Hasan</h4>
<span>Product Designer</span>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-8">
<div class="team-2-item mt-30 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
<img src="assets/images/team-member.png" alt="">
<div class="team-overlay">
<div class="item">
<h4 class="title">Rayhan Uddin</h4>
<span>Product Designer</span>
<ul>
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-youtube"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
</ul>
</div>
</div>
<div class="team-overlay-2 text-center">
<img src="assets/images/team-2.png" alt="">
<h4 class="title">Rayhan Uddin</h4>
<span>Product Designer</span>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-8">
<div class="team-2-item mt-30 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="900ms">
<img src="assets/images/team-member.png" alt="">
<div class="team-overlay">
<div class="item">
<h4 class="title">Thaherul Islam</h4>
<span>Product Designer</span>
<ul>
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-youtube"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
</ul>
</div>
</div>
<div class="team-overlay-2 text-center">
<img src="assets/images/team-3.png" alt="">
<h4 class="title">Thaherul Islam</h4>
<span>Product Designer</span>
</div>
</div>
</div>
</div>
</div>
</section>


<?php include "plugins/footer.php" ?>
</body>

<!-- Mirrored from quomodothemes.website/html/aball/aball/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Sep 2020 13:31:34 GMT -->
</html>
