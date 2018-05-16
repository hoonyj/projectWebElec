<!DOCTYPE html>
<html>
<?php
session_start();
require_once('userprofile/controller/config_user.php');
if(empty($_SESSION['email'])){
echo "<script>
  window.location.href='../index.php';
</script>";

exit;}
$email=$_SESSION['email'];
$query = $db->users->find(array("email" => $email));

$result = $db->posts->find()->sort(array('_id' => -1));

foreach($query as $dbQuery)


// echo '<pre>';
  //
  // foreach ( $query as $current )
  //     print_r($current);
  //
// echo '</pre>';
?>

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Froala Editor Editor style. -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />

  <!-- Boostrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

  <!-- Code Mirror -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

  <!-- Other Link Tags -->
  <link href="userprofile/css/user_profile_css.css" rel="stylesheet">
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <title>FACET - Post For Fun</title>
</head>
<body>
  <!-- NAVIGATION -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark justify-content-between">
    <div class="container">
      <a class="navbar-brand" href="#">FACET</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#responsiveNav" aria-controls="responsiveNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="responsiveNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="userProfile/user_profile.php">My Profile</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="settingsDD" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#">Account</a>
              <a class="dropdown-item" href="userLog/logout.php">Sign Out</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="fluid-container">
    <div class="container">
      <div class="row pt-4 pb-4">
        <div class="col-md-3">
          <div class="card text-center">
            <img class="card-img-top rounded-circle mt-4 ml-auto mr-auto" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Card image cap" style="height: 100px; width: 100px">
            <div class="card-body">
              <h2 class="card-title">
                <?php
                echo $dbQuery['lastName']." ".$dbQuery['firstName'];
                ?>
              </h2>
              <p class="card-text">Followers <?php echo $dbQuery['follower']; ?></p>
              <p class="card-text">Following <?php echo $dbQuery['following']; ?></p>
              <button class="btn btn-primary followbtn">Follow</button>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <form action="userLog/controller/postProcess.php" method="POST">
            <textarea name="postContent"></textarea>
            <button type="submit">submit</button>
          </form>

              <?php
              foreach ($result as $res) {
                echo "
                <div class='pt-4 pb-4'>
                  <div class='card'>
                    <div class='card-body'>
                      <div class='row'>
                        <div class='col-md-2'><img src='https://bootdey.com/img/Content/avatar/avatar6.png' class='img-fluid rounded-circle'></div>
                        <div class='col-md-10'>
                          <h5 class='card-title'>Card title</h5>
                          <h6 class='card-subtitle mb-2 text-muted'>Card subtitle</h6>
                          <p class='card-text'>".$res['content']."</p>
                          <a href='#' class='card-link'>Card link</a>
                          <a href='#' class='card-link'>Another link</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                ";
              }
              ?>
          <div class="pt-4 pb-4">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-fluid rounded-circle"></div>
                  <div class="col-md-10">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>

  <!-- Boostrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Other Scripts -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/jquery.flexslider-min.js"></script>
  <script src="js/retina.min.js"></script>
  <script src="js/modernizr.js"></script>
  <script src="js/main.js"></script>

  <!-- Code Mirror Scripts -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

  <!-- Froala Editor Scripts -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/js/froala_editor.pkgd.min.js"></script>

  <!-- My Scripts -->
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
  <script> $(function() { $('textarea').froalaEditor() }); </script>

</body>
</html>
