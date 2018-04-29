<!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->


<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Auro - Elegant, Minimal, Creative Bootstrap Template </title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/uploadSection.css">
<link rel="stylesheet" href="css/photoUpload.css">
<link rel="stylesheet" href="css/textUpload.css">
<link rel="stylesheet" href="css/textUpload.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">



<!--Bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>

<body>

<?php
// $query = $db->users->find();
//
// echo '<pre>';
//
// foreach ( $query as $current )
//     print_r($current);
//
// echo '</pre>';

session_start();
    require_once('userLog/controller/config.php');
    if(empty($_SESSION['email'])){
      echo "<script>
      window.location.href='../index.php';
      </script>";
        exit;}
?>

<!-- Header Section -->
<section class="tophead" role="tophead">
  <!-- Navigation Section -->
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="#">Auro</a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <li><a href="#header-slider">Home</a></li>
          <li><a href="#services">Our Services</a></li>
          <li><a href="#portfolio">Our Portfolio</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="userLog/logout.php">Logout</a></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- Navigation Section -->
</section>
<!-- Header Section -->

<!-- Upload Section -->
<div class="wrapper section" style="margin-left: 40.469px; margin-top: 0; padding-top: 200px;">
<ul class="tabs clearfix" data-tabgroup="first-tab-group">
  <li><a href="#tab1" class="active fa fa-font fa-2x" ></a></li>
  <li><a href="#tab2" class="fa fa-camera fa-2x"></a></li>
  <li><a href="#tab3"  class="fa fa-link fa-2x"></a></li>
  <li><a href="#tab4">Tab 4</a></li>
  <li><a href="#tab5">Tab 5</a></li>
</ul>
<section id="first-tab-group" class="tabgroup">
  <div id="tab1">
    <h2>TEXT</h2>
    <input class="form-control form-control-lg" type="text" placeholder="Title">
    <input class="form-control form-control-lg" type="text" style="margin-top: 15px;" placeholder="#Tags">

       <label for="exampleFormControlTextarea1" style="margin-top: 15px;"></label>
       <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3" placeholder="textarea"></textarea>
       <button type="button" class="btn btn-success">Success</button>


  </div>
  <div id="tab2">
    <h2>Image Upload</h2>


    <SECTION>
      <DIV id="dropzone">
        <FORM class="dropzone needsclick" id="demo-upload" action="/upload">
          <DIV class="dz-message needsclick">
            Drop files here or click to upload.<BR>

          </DIV>
        </FORM>
      </DIV>
       <button type="button" class="btn btn-success">Success</button>
    </SECTION>

    <br/>


    <DIV id="preview-template" style="display: none;">
    <DIV class="dz-preview dz-file-preview">
    <DIV class="dz-image"><IMG data-dz-thumbnail=""></DIV>
    <DIV class="dz-details">
    <DIV class="dz-size"><SPAN data-dz-size=""></SPAN></DIV>
    <DIV class="dz-filename"><SPAN data-dz-name=""></SPAN></DIV></DIV>
    <DIV class="dz-progress"><SPAN class="dz-upload"
    data-dz-uploadprogress=""></SPAN></DIV>
    <DIV class="dz-error-message"><SPAN data-dz-errormessage=""></SPAN></DIV>
    <div class="dz-success-mark">
      <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
        <title>Check</title>
        <desc>Created with Sketch.</desc>
        <defs></defs>
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
            <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
        </g>
      </svg>
    </div>
    <div class="dz-error-mark">
      <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
          <title>error</title>
          <desc>Created with Sketch.</desc>
          <defs></defs>
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
              <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                  <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
              </g>
          </g>
      </svg>
    </div>
  </div>

      </div>
    </div>






  <div id="tab3">
    <h2>Link</h2>
    <input class="form-control form-control-lg" type="text" placeholder="Link">

       <button type="button" class="btn btn-success">Success</button>

</section>
</div>
</div>
<!-- Upload Section -->








<!-- Slider Section
<section id="header-slider" class="section">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <! Indicators
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <! Wrapper for slides
    <div class="carousel-inner" role="listbox">
      <div class="item active"> <img src="images/slider/slid1.jpg" alt="Chania">
        <div class="carousel-caption">
          <h3>We'r Auro</h3>
          <p>We Build Strong Brands which impact your customers</p>
        </div>
      </div>
      <div class="item"> <img src="images/slider/slid2.jpg" alt="Chania">
        <div class="carousel-caption">
          <h3>Minimal Agency Template</h3>
          <p>We're Australia based branding & design agency</p>
        </div>
      </div>
    </div>
    <!Controls
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span></a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span></a></div>
</section>
<!Slider Section -->



<!-- Service Section -->
<section id="services" class="section services">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="services-content">
          <h4>We're Australia based branding & design agency.</h4>
          <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="services-content">
          <h5>Brand Experience</h5>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Mobile Application</a></li>
            <li><a href="#">Product Development</a></li>
            <li><a href="#">Packaging</a></li>
            <li><a href="#">Retail Management</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="services-content">
          <h5>Media Marketing</h5>
          <ul>
            <li><a href="#">Marketing Research</a></li>
            <li><a href="#">Social Marketing</a></li>
            <li><a href="#">Mobile marketing</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Service Section -->

<!-- portfolio grid section -->
<section id="portfolio" class="section portfolio">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 portfolio-item"> <a href="work-details.html" class="portfolio-link">
        <div class="caption">
          <div class="caption-content">
            <h3>The Shape of Design</h3>
            <h4>Branding/Graphic</h4>
          </div>
        </div>
        <img src="images/portfolio/work-1.jpg" class="img-responsive" alt=""> </a> </div>
      <div class="col-sm-6 portfolio-item"> <a href="work-details.html" class="portfolio-link">
        <div class="caption">
          <div class="caption-content">
            <h3>czarna kawka</h3>
            <h4>Branding</h4>
          </div>
        </div>
        <img src="images/portfolio/work-2.jpg" class="img-responsive" alt=""> </a> </div>
      <div class="col-sm-6 portfolio-item"> <a href="work-details.html" class="portfolio-link">
        <div class="caption">
          <div class="caption-content">
            <h3>czarna kawka</h3>
            <h4>Branding</h4>
          </div>
        </div>
        <img src="images/portfolio/work-3.jpg" class="img-responsive" alt=""> </a> </div>
      <div class="col-sm-6 portfolio-item"> <a href="work-details.html" class="portfolio-link">
        <div class="caption">
          <div class="caption-content">
            <h3>czarna kawka</h3>
            <h4>Branding</h4>
          </div>
        </div>
        <img src="images/portfolio/work-4.jpg" class="img-responsive" alt=""> </a> </div>
      <div class="col-sm-6 portfolio-item"> <a href="work-details.html" class="portfolio-link">
        <div class="caption">
          <div class="caption-content">
            <h3>czarna kawka</h3>
            <h4>Branding</h4>
          </div>
        </div>
        <img src="images/portfolio/work-5.jpg" class="img-responsive" alt=""> </a> </div>
      <div class="col-sm-6 portfolio-item"> <a href="work-details.html" class="portfolio-link">
        <div class="caption">
          <div class="caption-content">
            <h3>czarna kawka</h3>
            <h4>Branding</h4>
          </div>
        </div>
        <img src="images/portfolio/work-6.jpg" class="img-responsive" alt=""> </a> </div>
    </div>
  </div>
</section>
<!-- portfolio grid section -->

<!-- Testimonials section -->
<section id="testimonials" class="section testimonials no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Phasellus non dolor nibh. Nullam elementum Aenean eu leo quam..." </h1>
                <p>Rene Brown, Open Window production</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Cras dictum tellus dui, vitae sollicitudin ipsum. Phasellus non dolor nibh. Nullam elementum tellus pretium feugiat shasellus non dolor nibh. Nullam elementum tellus pretium feugiat." </h1>
                <p>Brain Rice, Lexix Private Limited.</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur...." </h1>
                <p>Andi Simond, Global Corporate Inc</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Lorem ipsum dolor sit amet, consectetur adipiscing elitPhasellus non dolor nibh. Nullam elementum tellus pretium feugiat. Cras dictum tellus dui sollcitudin." </h1>
                <p>Kristy Gabbor, Martix Media</p>
              </blockquote>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Testimonials section -->

<!-- footer section -->
<footer id="contact" class="footer">
  <div class="container-fluid">
    <div class="col-md-2 left">
      <h4>Office Location</h4>
      <p> Collins Street West Victoria 8007 Australia.</p>
    </div>
    <div class="col-md-2 left">
      <h4>Contact</h4>
      <p> Call: 612.269.8419 <br>
        Email : <a href="mailto:hello@agency.com"> hello@agency.com </a></p>
    </div>
    <div class="col-md-2 left">
      <h4>Social presense</h4>
      <ul class="footer-share">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
      </ul>
    </div>
    <div class="col-md-6 right">
      <p>© 2015 All rights reserved. All Rights Reserved<br>
        Made with <i class="fa fa-heart pulse"></i> by <a href="http://www.designstub.com/">Designstub</a></p>
    </div>
  </div>
</footer>
<!-- footer section -->

<!-- JS FILES -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/main.js"></script>

<script src="js/tab.js"></script>
<script src="js/dropzone.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

</body>
</html>
