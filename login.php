
<?php
include("danceconnection.php");
if(isset($_POST['btn']))
{
  $em=$_POST['em'];
  $pass=$_POST['pw'];
  
  $sql="select * from registration where email='$em'  and password='$pass'";
  $res=mysqli_query($con,$sql);
  if(mysqli_num_rows($res)>0)
  {
      $_SESSION['nm']=$nm;
      header("location:admin.php");
  }
  else
  {
    echo"<script>alert(' Invalid id and password');</script>";
  }
}
?><html>
     <head>
       
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <title>M.R DANCE WORLD</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link type="text/css"rel="stylesheet"href="external.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link type="text/css"rel="stylesheet"href="ex.css"/>


<link type="icon" rel="icon" href="images/logo.png"/>
<meta charset="utf-8"/>
<style>
  
  
</style>
<div>
    <ul class="nav bg-dark pl-5 ">
              <li class="nav-item">
                <a href="" class="nav-link text-light"><i class="fa fa-phone-square " style="font-size:24px"></i> +91-7459984840</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link text-light"><i class="fa fa-envelope-o" style="font-size:24px"></i> info@m.rdanceworld.com</a>
              </li>
            </ul>
    </div>
    <nav class="navbar navbar-expand-lg sticky-top n navbar-light">
            <a href="" class="navbar-brand"><img src="images/logo.png" class="img ml-5" height="100" width="100"> <span class=" m h3 text-dark">M.R DANCE WORLD</span></a>
            <button type="button" role="button" class="navbar-toggler" data-toggle="collapse" data-target="#divya" aria-controls="divya" aria-expanded="false">
    
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="divya">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="INDEXPAGE.php"class="nav-link text-dark ">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link text-primary h-5">ABOUT US</a>
                    </li>
                    
                    
                <li class="nav-item">
                    <a href="" class="nav-link">GALLERY</a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link">CONTACT US</a>
        </li>
                    
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">DANCE CLASSES</a>
                        <div class="dropdown-menu">
                            <a href="" class="dropdown-item">HIPHOP</a>
                            <a href="" class="dropdown-item">CONTEMPORARY</a>
                            <a href="" class="dropdown-item">JAZZ FUNK</a>
                            
                            
                        </div>
                    </li>
                    
              <li class="nav-item">
                      <a href="joinus.html" class="nav-link">SCHEDULE</a>
                  </li>
                  
                <li class="nav-item">
                  <a href="" class="nav-link btn btn-warning">Registration</a>
              </li>

                    </ul>
          </div>
        </nav>

        <div class="container pt-5 ">
<form class="form m-5 p-4 bg-warning text-light " method="POST">
<h2 class="text-center"> LOGIN</h2>
<div class="form-group ">
<label class="h3"> Username/Email:</label>
<input type="text" name="nm" class=" form-control"/>
</div>

<div class="form-group ">
<label class="h3">Password: </label>
<input type="password" name="pw" class=" form-control"/>
</div>
<div class="form-group">
<input type="Submit" name="btn" value="SUBMIT" 
 class=" btn btn-dark h6 text text-light "/>
</div>
</div>

        <div class="foote container-fluid p-5">
            <div class="row">
              <div class="col-lg-3 col-sm-12 d-flex justify-content-center">
                <a href="">
                  <img src="images/logo.png" class="mt-4" height="130" width="130"/>
                </a>
              </div>
              <div class="col-lg-3 col-sm-12">
                <h4 class="text text-info">Dance Classes
                </h4>
                <hr class="border border border-light"/>
                <ul class="dance-class">
                  <li>
                    <a href="" class="text-secondary">Contemporary</a>
                  </li>
                  <li>
                    <a href=""  class="text-light">Jazz Funk</a>
                  </li>
                  <li>
                    <a href=""  class="text-light">Hip Hop</a>
                  </li>
                  <li>
                    <a href=""  class="text-light">Blog</a>
                  </li>
                 
                </ul>
              </div>
              <div class="col-lg-3 col-sm-12">
                <h4 class="text text-info">
                  Get In Touch
                </h4>
                <hr class="border border border-light"/>
                <ul class="get-in-touch">
                  <li>
                    <a href=""  class="text-light"><i class="fa fa-map-marker" style="font-size:24px"></i> : Rose manor high school,central avenue road,santacruz</a>
                  </li>
                  <li>
                    <a href=""  class="text-light"><i class="fa fa-mobile-phone" style="font-size:24px"></i> :  +91-7459984840</a>
                  </li>
                  <li>
                    <a href=""  class="text-light"> <i class="fa fa-envelope"></i> : info@m.rdanceworld.com</a>
                  </li>
                 
                 
                </ul>
              </div>
              <div class="col-lg-3 col-sm-12">
                <h4 class="text-info">Social Connect</h4>
                <hr class="border border border-light"/>
                  <ul class="nav social-connect">
                  <li class="nav-item">
                    <a href="" class="nav-link"><i class="fa fa-facebook-f"></i></a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link"><i class="fa fa-instagram"></i></a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link"><i class="fa fa-linkedin"></i></a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link"><i class="fa fa-youtube-play"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            </div>

