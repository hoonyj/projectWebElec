<!DOCTYPE html>
<html>
<?php
session_start();
require_once('userprofile/controller/config_user.php');
if(empty($_SESSION['_id'])){
echo "<script>
  window.location.href='../index.php';
</script>";

exit;}
$id=$_SESSION['_id'];
$query = $db->users->find(array("_id" => $id));
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

  <!-- Required Bootstrap Links -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

  <!-- Required Froala Links -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  <title>FACET - Post For Fun</title>
</head>
<body>
  <!-- NAVIGATION -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark justify-content-between">
    <div class="container">
      <a class="navbar-brand" href="#"><h2><i class="fas fa-users"></i> FACET</h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#responsiveNav" aria-controls="responsiveNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="responsiveNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="userProfile/user_profile.php"><i class="fas fa-user"></i> Profile</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="settingsDD" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-cog"></i> Settings</a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Account</a>
              <a class="dropdown-item" href="userLog/logout.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="bg-light">
    <div class="container">
      <div class="row pt-4 pb-4">
        <!-- Left Column -->
        <div class="col-md-3">
          <div class="card shadow mb-4">
            <h4 class="card-title pt-4 text-center"><?php echo $dbQuery['lastName']." ".$dbQuery['firstName']; ?></h4>
            <img class="card-img-top rounded-circle ml-auto mr-auto" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Card image cap" style="height: 100px; width: 100px">
            <hr class="mr-3 ml-3">
            <div class="card-body pt-0">
              <button class="btn btn-outline-primary btn-block"><i class="fas fa-heart"></i> Follow</button>
            </div>
          </div>

          <div class="card shadow mb-4">
            <h4 class="card-title pt-4 text-center">Reccomended Users</h4>
            <div class="row text-center">
              <div class="col">
                <h4>
                  <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="card-img-top rounded-circle ml-auto mr-auto" style="height: 30px; width: 30px">
                  <small>James Tarrobal</small>
                  <button class="btn btn-outline-primary"><i class="fas fa-heart"></i> Follow</button>
                </h4>
                <h4>
                  <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="card-img-top rounded-circle ml-auto mr-auto" style="height: 30px; width: 30px">
                  <small>James Tarrobal</small>
                  <button class="btn btn-outline-primary"><i class="fas fa-heart"></i> Follow</button>
                </h4>
                <h4>
                  <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="card-img-top rounded-circle ml-auto mr-auto" style="height: 30px; width: 30px">
                  <small>James Tarrobal</small>
                  <button class="btn btn-outline-primary"><i class="fas fa-heart"></i> Follow</button>
                </h4>
                <h4>
                  <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="card-img-top rounded-circle ml-auto mr-auto" style="height: 30px; width: 30px">
                  <small>James Tarrobal</small>
                  <button class="btn btn-outline-primary"><i class="fas fa-heart"></i> Follow</button>
                </h4>
              </div>
            </div>
          </div>
        </div>

        <!-- Center Column -->
        <div class="col-md-7">
          <div class="card shadow mb-4">
            <form action="userLog/controller/postProcess.php" method="POST">
              <textarea name="postContent"></textarea>
              <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary ">Post</button>
              </div>
            </form>
          </div>

          <?php
            $post = $db->posts->find()->sort(array('_id' => -1));
            foreach ($post as $res) {
            $poster = $db->users;
            $query = array("_id" => $res['userid']);
            $postU = $poster->findOne($query);
            echo "
              <div class='mb-4'>
                <div class='card shadow'>
                  <div class='card-header'>
                    <div class='row'>
                      <div class='col'>
                        <h3>
                          <img src='https://bootdey.com/img/Content/avatar/avatar6.png' class='rounded-circle' style='height: 60px; width: 60px'>
                          <small>".$postU['lastName']." ".$postU['firstName']."</small>
                        </h3>
                      </div>
                    </div>
                    <div class='row'>
                      <div class='col'>
                        <p class='card-text'>".$res['content']."</p>
                      </div>
                    </div>
                  </div>
                  <!-- Comments -->
                  <div class='card-body'>
                    <div class='row'>";
            $comments = $db->comments;
            $qry = array("postid" => $res['_id']);
            $comment = $comments->find($qry);
            foreach ($comment as $commentR) {
            $commenter = $db->users;
            $query = array("_id" => $commentR['userid']);
            $commentU = $commenter->find($query);
            foreach ($commentU as $commU) {
            echo "    <div class='col-md-11 offset-md-1 pb-4'>
                        <h3>
                          <img src='https://bootdey.com/img/Content/avatar/avatar6.png' class='rounded-circle' style='height: 30px; width: 30px'>
                          <small>".$commU['lastName']." ".$commU['firstName']."</small>
                        </h3>
                        <p class='card-text'>".$commentR['content']."</p>
                      </div>";
                      }
                      }
            echo "  </div>
                  </div>

                  <!-- Others -->
                  <div class='card-footer pt-0'>
                    <form action='userLog/controller/commentProccess.php' method='POST'>
                      <textarea name='commentContent'></textarea>
                      <input name='postId' type='hidden' value='".$res['_id']."' ?>
                      <div class='text-right'>
                        <button type='' class='btn btn-primary'><i class='fas fa-thumbs-up'></i> Like</button>
                        <button type='submit' class='btn btn-primary'><i class='fas fa-comment'></i> Comment</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            ";
            }
          ?>


          <!-- POST START-->
          <div class="pb-4">
            <div class="card shadow">
              <div class="card-header">
                <div class="row">
                  <div class="col">
                    <h3>
                      <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="rounded-circle" style="height: 60px; width: 60px">
                      <small>James Tarrobal</small>
                    </h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <p class="card-text">Ut cursus condimentum leo et mattis. In eleifend, felis in congue egestas, ligula quam commodo mauris, ut varius orci arcu in quam. Cras non erat eu risus egestas vestibulum. Maecenas tincidunt semper elit id ultrices.</p>
                  </div>
                </div>
              </div>

              <!-- Comments -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-11 offset-md-1 pb-4">
                    <h3>
                      <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="rounded-circle" style="height: 30px; width: 30px">
                      <small>Jamie Sulit</small>
                    </h3>
                    <p class="card-text">Nam porttitor sem tortor, vel tincidunt turpis efficitur vitae. Nunc elementum, sem at bibendum elementum, diam arcu molestie nisl, nec tincidunt ipsum nulla in massa. Nullam egestas rutrum molestie.</p>
                  </div>
                  <div class="col-md-11 offset-md-1 pb-4">
                    <h3>
                      <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="rounded-circle" style="height: 30px; width: 30px">
                      <small>Carlo Malixi</small>
                    </h3>
                    <p class="card-text">Nam porttitor sem tortor, vel tincidunt turpis efficitur vitae. Nunc elementum, sem at bibendum elementum, diam arcu molestie nisl, nec tincidunt ipsum nulla in massa. Nullam egestas rutrum molestie.</p>
                  </div>
                </div>
              </div>

              <!-- Others -->
              <div class="card-footer text-right pt-0">
                <form action="userLog/controller/commentProcess.php" method="POST">
                  <textarea name="commentContent"></textarea>
                  <button type="" class="btn btn-primary"><i class="fas fa-thumbs-up"></i> Like</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-comment"></i> Comment</button>
                </form>
              </div>
            </div>
          </div>
          <!-- POST END -->
        </div>

        <!-- Right Column -->
        <div class="col-md-2">
          <div class="card shadow text-center">
            <h4 class="card-title pt-4">Followers</h4>
            <p class="card-text"><?php echo $dbQuery['follower']; ?></p>
            <h4 class="card-title pt-4">Following</h4>
            <p class="card-text pb-4"><?php echo $dbQuery['following']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Required Boostrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

  <!-- Required Froala Scripts -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/js/froala_editor.pkgd.min.js"></script>
  <script> $(function() { $('textarea').froalaEditor() }); </script>
</body>
</html>
