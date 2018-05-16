<!DOCTYPE html>
<html lang="en">
<?php
session_start();
    require_once('controller/config_user.php');
    if(empty($_SESSION['email'])){
      echo "<script>
      window.location.href='../index.php';
      </script>";

        exit;}
        $email=$_SESSION['email'];
        $query = $db->users->find(array("email" => $email));

        foreach($query as $dbQuery)


        // echo '<pre>';
        //
        // foreach ( $query as $current )
        //     print_r($current);
        //
        // echo '</pre>';


?>

<head>
  <title>User Profile</title>

    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/user_profile_css.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>

<body>
  <!-- Header Section -->
  <section class="tophead" role="tophead">
    <!-- Navigation Section -->
    <header id="header">
      <div class="header-content clearfix"> <a class="logo" href="#">Auro</a>
        <nav class="navigation" role="navigation">
          <ul class="primary-nav">
            <li><a href="web/mainpage.php">Home</a></li>
            <li><a href="#services">Our Services</a></li>
            <li><a href="#portfolio">Our Portfolio</a></li>
            <li><a href="userProfile/user_profile.php">Me</a></li>
            <li><a href="userLog/logout.php">Logout</a></li>
          </ul>
        </nav>
        <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    </header>
    <!-- Navigation Section -->
  </section>
  <!-- Header Section -->


<a href="../userLog/logout.php" class="btn btn-info" role="button">Logout</a>

<div class="container">
<div class="row">
      <div class="col-md-12 text-center ">
        <div class="panel panel-default">
          <div class="userprofile social ">
            <div class="userpic"> <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="userpicimg"> </div>
            <h3 class="username"><?php

            echo $dbQuery['lastName']." ".$dbQuery['firstName']; ?></h3>
            <p>user Place</p>
            <div class="socials tex-center"> <a href="" class="btn btn-circle btn-primary ">
            <i class="fa fa-facebook"></i></a> <a href="" class="btn btn-circle btn-danger ">
            <i class="fa fa-google-plus"></i></a> <a href="" class="btn btn-circle btn-info ">
            <i class="fa fa-twitter"></i></a> <a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope"></i></a>
            </div>
          </div>
          <div class="col-md-12 border-top border-bottom">
            <ul class="nav nav-pills pull-left countlist" role="tablist">
              <li role="presentation">
                <h3><?php echo $dbQuery['follower']; ?><br>
                  <small>Follower</small> </h3>
              </li>
              <li role="presentation">
                <h3><?php echo $dbQuery['following']; ?><br>
                  <small>Following</small> </h3>
              </li>
              <li role="presentation">
                <h3>5000<br>
                  <small>Activity</small> </h3>
              </li>
            </ul>
            <button class="btn btn-primary followbtn">Follow</button>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <!-- /.col-md-12 -->
      <div class="col-md-4 col-sm-12 pull-right">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="page-header small">Personal Details</h1>
            <p class="page-subtitle small">Limited information is visible</p>
          </div>
          <div class="col-md-12 photolist">
            <div class="row">
              <div class="col-sm-3 col-xs-3"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="" alt=""> </div>
              <div class="col-sm-3 col-xs-3"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="" alt=""> </div>
              <div class="col-sm-3 col-xs-3"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="" alt=""> </div>
              <div class="col-sm-3 col-xs-3"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="" alt=""> </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="page-header small">Worked with many domain</h1>
            <p class="page-subtitle small">Like to work fr different business</p>
          </div>
          <div class="col-md-12">
            <ul class="list-group">
              <li class="list-group-item"><span class="fa fa-male"></span> Worked with 1000+ people</li>
              <li class="list-group-item"><span class="fa fa-institution"></span> 60+ offices</li>
              <li class="list-group-item"><span class="fa fa-user"></span> 50000+ satify customers</li>
              <li class="list-group-item"><span class="fa fa-clock-o"></span> Work hours many and many still counting</li>
              <li class="list-group-item"><span class="fa fa-heart"></span> Customer satisfaction for servics</li>
            </ul>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="page-header small">What others are saying </h1>
            <p class="page-subtitle small">Express your self, Express to other</p>
          </div>
          <div class="col-md-12">
            <div class="media">
              <div class="media-left"> <a href="javascript:void(0)"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object"> </a> </div>
              <div class="media-body">
                <h4 class="media-heading">Lucky Sans</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio. </div>
            </div>
            <div class="media">
              <div class="media-left"> <a href="javascript:void(0)">
              <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object"> </a> </div>
              <div class="media-body">
                <h4 class="media-heading">John Doe</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio. </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="page-header small">Recently Connected</h1>
            <p class="page-subtitle small">You have recemtly connected with 34 friends</p>
          </div>
          <div class="col-md-12">
            <div class="memberblock"> <a href="" class="member"> <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
              <div class="memmbername">Ajay Sriram</div>
              </a> <a href="" class="member"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
              <div class="memmbername">Rajesh Sriram</div>
              </a> <a href="" class="member"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
              <div class="memmbername">Manish Sriram</div>
              </a> <a href="" class="member"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
              <div class="memmbername">Chandra Amin</div>
              </a> <a href="" class="member"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
              <div class="memmbername">John Sriram</div>
              </a> <a href="" class="member"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
              <div class="memmbername">Lincoln Sriram</div>
              </a> </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-md-8 col-sm-12 pull-left posttimeline">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="status-upload nopaddingbtm">
              <form>
                <textarea class="form-control" placeholder="What are you doing right now?"></textarea>
                <br>
                <ul class="nav nav-pills pull-left ">
                  <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="glyphicon glyphicon-bullhorn"></i></a></li>
                  <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class=" glyphicon glyphicon-facetime-video"></i></a></li>
                  <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="glyphicon glyphicon-picture"></i></a></li>
                </ul>
                <button type="submit" class="btn btn-success pull-right"> Share</button>
              </form>
            </div>
            <!-- Status Upload  -->
          </div>
        </div>
        <div class="panel panel-default">
          <div class="btn-group pull-right postbtn">
            <button type="button" class="dotbtn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <span class="dots"></span> </button>
            <ul class="dropdown-menu pull-right" role="menu">
              <li><a href="javascript:void(0)">Hide this</a></li>
              <li><a href="javascript:void(0)">Report</a></li>
            </ul>
          </div>
          <div class="col-md-12">
            <div class="media">
              <div class="media-left"> <a href="javascript:void(0)"> <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="media-object"> </a> </div>
              <div class="media-body">
                <h4 class="media-heading">Lucky Sans<br>
                  <small><i class="fa fa-clock-o"></i> Yesterday, 2:00 am</small> </h4>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio. </p>

                <ul class="nav nav-pills pull-left ">
                  <li><a href="" title=""><i class="glyphicon glyphicon-thumbs-up"></i> 2015</a></li>
                  <li><a href="" title=""><i class=" glyphicon glyphicon-comment"></i> 25</a></li>
                  <li><a href="" title=""><i class="glyphicon glyphicon-share-alt"></i> 15</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-12 commentsblock border-top">
            <div class="media">
              <div class="media-left"> <a href="javascript:void(0)"> <img alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar1.png" class="media-object"> </a> </div>
              <div class="media-body">
                <h4 class="media-heading">Astha Smith</h4>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
              </div>
            </div>
            <div class="media">
              <div class="media-left"> <a href="javascript:void(0)"> <img alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar1.png" class="media-object"> </a> </div>
              <div class="media-body">
                <h4 class="media-heading">Lucky Sans</h4>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. </p>
                <div class="media">
                  <div class="media-left"> <a href="javascript:void(0)"> <img alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar1.png" class="media-object"> </a> </div>
                  <div class="media-body">
                    <h4 class="media-heading">Astha Smith</h4>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="btn-group pull-right postbtn">
            <button type="button" class="dotbtn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <span class="dots"></span> </button>
            <ul class="dropdown-menu pull-right" role="menu">
              <li><a href="javascript:void(0)">Hide this</a></li>
              <li><a href="javascript:void(0)">Report</a></li>
            </ul>
          </div>
          <div class="col-md-12">
            <div class="media">
              <div class="media-left"> <a href="javascript:void(0)"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object"> </a> </div>
              <div class="media-body">
                <h4 class="media-heading"> Lucky Sans<br>
                  <small><i class="fa fa-clock-o"></i> Yesterday, 2:00 am</small> </h4>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio. </p>
                <ul class="nav nav-pills pull-left ">
                  <li><a href="" title=""><i class="glyphicon glyphicon-thumbs-up"></i> 2015</a></li>
                  <li><a href="" title=""><i class=" glyphicon glyphicon-comment"></i> 25</a></li>
                  <li><a href="" title=""><i class="glyphicon glyphicon-share-alt"></i> 15</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-12 border-top">
            <div class="status-upload">
              <form>
                <label>Comment</label>
                <textarea class="form-control" placeholder="Comment here"></textarea>
                <br>
                <ul class="nav nav-pills pull-left ">
                  <li><a title=""><i class="glyphicon glyphicon-bullhorn"></i></a></li>
                  <li><a title=""><i class=" glyphicon glyphicon-facetime-video"></i></a></li>
                  <li><a title=""><i class="glyphicon glyphicon-picture"></i></a></li>
                </ul>
                <button type="submit" class="btn btn-success pull-right"> Comment</button>
              </form>
            </div>
            <!-- Status Upload  -->

          </div>
        </div>
        <div class="panel panel-default">
          <div class="btn-group pull-right postbtn">
            <button type="button" class="dotbtn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <span class="dots"></span> </button>
            <ul class="dropdown-menu pull-right" role="menu">
              <li><a href="javascript:void(0)">Hide this</a></li>
              <li><a href="javascript:void(0)">Report</a></li>
            </ul>
          </div>
          <div class="col-md-12">
            <div class="media">
              <div class="media-left"> <a href="javascript:void(0)"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object"> </a> </div>
              <div class="media-body">
                <h4 class="media-heading"> Lucky Sans<br>
                  <small><i class="fa fa-clock-o"></i> Yesterday, 2:00 am</small> </h4>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio. </p>
                <ul class="nav nav-pills pull-left ">
                  <li><a href="" title=""><i class="glyphicon glyphicon-thumbs-up"></i> 2015</a></li>
                  <li><a href="" title=""><i class=" glyphicon glyphicon-comment"></i> 25</a></li>
                  <li><a href="" title=""><i class="glyphicon glyphicon-share-alt"></i> 15</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-12 commentsblock border-top">
            <div class="media">
              <div class="media-left"> <a href="javascript:void(0)"> <img alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar1.png" class="media-object"> </a> </div>
              <div class="media-body">
                <h4 class="media-heading">Astha Smith</h4>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. </p>
                <div class="media">
                  <div class="media-left"> <a href="javascript:void(0)"> <img alt="64x64" src="https://bootdey.com/img/Content/avatar/avatar1.png" class="media-object"> </a> </div>
                  <div class="media-body">
                    <h4 class="media-heading">Nested Lucky Sans</h4>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="btn-group pull-right postbtn">
            <button type="button" class="dotbtn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <span class="dots"></span> </button>
            <ul class="dropdown-menu pull-right" role="menu">
              <li><a href="javascript:void(0)">Hide this</a></li>
              <li><a href="javascript:void(0)">Report</a></li>
            </ul>
          </div>
          <div class="col-md-12">
            <div class="media">
              <div class="media-left"> <a href="javascript:void(0)"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object"> </a> </div>
              <div class="media-body">
                <h4 class="media-heading"> Lucky Sans<br>
                  <small><i class="fa fa-clock-o"></i> Yesterday, 2:00 am</small> </h4>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio. </p>
                <ul class="nav nav-pills pull-left ">
                  <li><a href="" title=""><i class="glyphicon glyphicon-thumbs-up"></i> 2015</a></li>
                  <li><a href="" title=""><i class=" glyphicon glyphicon-comment"></i> 25</a></li>
                  <li><a href="" title=""><i class="glyphicon glyphicon-share-alt"></i> 15</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="btn-group pull-right postbtn">
            <button type="button" class="dotbtn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <span class="dots"></span> </button>
            <ul class="dropdown-menu pull-right" role="menu">
              <li><a href="javascript:void(0)">Hide this</a></li>
              <li><a href="javascript:void(0)">Report</a></li>
            </ul>
          </div>
          <div class="col-md-12">
            <div class="media">
              <div class="media-left"> <a href="javascript:void(0)"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object"> </a> </div>
              <div class="media-body">
                <h4 class="media-heading"> Lucky Sans<br>
                  <small><i class="fa fa-clock-o"></i> Yesterday, 2:00 am</small> </h4>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio. </p>
                <ul class="nav nav-pills pull-left ">
                  <li><a href="" title=""><i class="glyphicon glyphicon-thumbs-up"></i> 2015</a></li>
                  <li><a href="" title=""><i class=" glyphicon glyphicon-comment"></i> 25</a></li>
                  <li><a href="" title=""><i class="glyphicon glyphicon-share-alt"></i> 15</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>


<script type="text/javascript">
    window.alert = function(){};
    var defaultCSS = document.getElementById('bootstrap-css');
    function changeCSS(css){
        if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />');
        else $('head > link').filter(':first').replaceWith(defaultCSS);
    }
    $( document ).ready(function() {
      var iframe_height = parseInt($('html').height());
      window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/main.js"></script>

</body></html>
