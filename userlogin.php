<?php
include("connect.php");
session_start();
if(isset($_POST['btn']))
{
  $nm=$_POST['nm'];
  $pass=$_POST['password'];
  
  $sql="select * from admin where email='$nm' or name='$nm' and password='$pass'";
  $res=mysqli_query($con,$sql);
  if(mysqli_num_rows($res)>0)
  {
      $_SESSION['nm']=$nm;
      header("location:admin/profile.php");
  }
  else
  {
    echo"<script>alert(' Invalid id and password');</script>";
  }
}
?>
<html>
          <head>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link type="text/css"rel="stylesheet"href="external.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
.foot{ font-weight:bold; background-color:#171616;color:snow; padding:3% 8% 3% 8%;width: 100%;}
   .foot ul{list-style-type: none;}
   .foot ul li{
     margin-top: 20px;
   }
   .foot ul li a{
     color:wheat;
     text-decoration: none;
     text-align: left;
   }
   .footer{ background-color:#222;text-align: center;color: snow;}
   .hr{border-color: gray;}
</style>

</head>
<body>
<div class="container-fluid bg-dark">
          <div class="container">
            <ul class="nav">
              <li class="nav-item">
                <a href="" class="nav-link text-light"><i class="fa fa-phone-square" style="font-size:24px"></i> +91-972888288</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link text-light"><i class="fa fa-envelope-o" style="font-size:24px"></i> info@happinessfoundation.com</a>
              </li>
            </ul>
          </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-light navbar-light">
            <a href="index.php" class="navbar-brand"><img src="images/logo.png" class="img ml-5" height="70" width="70"> <span class=" h3 text text-warning">Happiness Foundation</span></a>
            <button type="button" role="button" class="navbar-toggler" data-toggle="collapse" data-target="#divya" aria-controls="divya" aria-expanded="false">
    
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="divya">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php"class="nav-link text-info">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link text-info">ABOUT US</a>
                    </li>
                    
                    
                <li class="nav-item">
                    <a href="#" class="nav-link text-info">GALLERY</a>
            </li>
            <li class="nav-item">
                <a href="contact1.php" class="nav-link text-info">CONTACT US</a>
        </li>
                    
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link text-info dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">WHAT WE DO</a>
                        <div class="dropdown-menu">
                            <a href="" class="dropdown-item text-info">OVERVIEW</a>
                            <a href="" class="dropdown-item text-info">EDUCATION</a>
                            <a href="" class="dropdown-item text-info">HEALTH</a>
                            <a href="" class="dropdown-item text-info">LIVELIHOOD</a>
                            <a href="" class="dropdown-item text-info">PRIVILEDGE CHILDREN</a>
                        </div>
                    </li>
                    <li class="nav-item">
                      <a href="joinus.php" class="nav-link text-info">JOIN OUR TEAM</a>
                  </li>
                  <li class="nav-item">
                    <a href="userlogin.php" class="nav-link text-success h5">LOGIN</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link btn btn-warning">DONATIONS</a>
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
<input type="password" name="password" class=" form-control"/>
</div>
<div class="form-group">
<input type="Submit" name="btn" value="SUBMIT" 
 class=" btn btn-dark h6 text text-light "/>
</div>
</div>
<footer class="foot mt-5 ">
                <div class="row foot-row">
                  <div class="col-lg-3 col-sm-12">
                     <h1>CHARITY</h1>
                     <hr class="hr"/>
                        <p> To bring parity among the citizens and bridge the gap between the societies through 3E(s) i.e. Education, Empowerment & Equality.
                                              
                                             </p>
                                              
             
           
                  </div>
                  <div class=" col-lg-3 col-sm-12">
                    <h2>LATEST NEWS</h2><hr class="hr"/>
                    <ul class="">
                        <li><a href="">A new Future</a></li>
                        <li><a href="">Eye Camp at DLS Health Care</a></li>
                        <li><a href="">Launching of Skill Based Industry Integrated Programmes</a></li>
                                              
                   </ul>
                  </div>
           
                    <div class=" col-lg-3 col-sm-12">
                      <H2>QUICK LINKS</H2>
                      <hr class="hr"/>
                      <ul class="list-group">
                        <li class="list-items"><a href="">Covid19</a></li>
                        <li class="list-item"><a href="">gallery</a></li>
                        <li class="list-item"><a href="">privacy  policy for Happiness Foundation</a></li>            
                        <li class="list-item"><a href="">terms and condition</a></li>
                        <li class="list-item"><a href="">contact us</a></li>        
                      </ul>
                    </div>
                  <div class=" col-lg-3 col-sm-12">
                    <h2>ADDRESS</h2>
                    <hr class="hr"/>
                      <p>Happiness Foundation362, Allahabad Bank Road, kanpur-208007</p>
                      <p>Phone: +91-972888288</p>
                      <p>E-mail: info@happinessfoundation.org</p>
                    
                  </div>
                
              </div>
              
              
                </footer>
                <div class="footer p-3">
                  <p>&copy Copyright &  Design By Infority IT Services(Team:- Kashish & Divya) </p>
       </div> 
     
</body>
</html>