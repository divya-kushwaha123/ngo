<?php
include("connect.php");
if(isset($_POST['btn']))
{
  $nm=$_POST['nm'];
  $em=$_POST['em'];
  $sb=$_POST['sb'];
  $ms=$_POST['ms'];
  $sql="insert into contact(name,email,subject,message) values('$nm','$em','$sb','$ms')";
  $res=mysqli_query($con,$sql);
  if($res)
  {
    echo"<script>alert('Thanks for your feedback');</script>";
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
.i{list-style-type:none}
.i li{margin-top:30px;}
.i li a span{ margin-left:10px}
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
                <a href="contact1.php" class="nav-link text-success h5">CONTACT US</a>
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
                    <a href="userlogin.php" class="nav-link text-info">LOGIN</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link btn btn-warning">DONATIONS</a>
              </li>

                    </ul>
                </div>
                </nav>
                    
                  
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-sm-12">
			<img src="aboutpic.jpg" class="img w-100 h-75 mt-4">
		</div>
		<div class="col-lg-4 col-sm-12">
			<ul class="i">
                             <li ><a href="#"> <img src="skill training.jpg" height="30px";width="15px"><span>Eye Camp at DLS Health Care</span></a></li>
                              <li ><a href="#"> <img src="study.jpg" height="30px";width="15px"><span>Launching of Skill Based Industry Integrated Programmes</span></a></li>
                              <li ><a href="#"> <img src="contact.jpg" height="30px";width="15px"><span>Skill Development Program of Next Generation</span></a></li>
                        </ul>
		</div>
	</div>
                            <h2>CONTACT US</h2>
                            <p class="card-text"><p class="text-danger h3">Registered Office:</p>
<p> Happiness Foundation, 362, Allahabad Bank Road, kanpur Nagar -208007  </p>
                            <P>For any queries, please write to us at</P>  
                            <p><b>info@happinessfoundation.com</b></p>
                              <h3 class="text-center">OR</h3>
                           <p>For all enquiries please email us using the form below.</p>
                         <div>
<form class="form p-4 bg-dark text-light" method="post">
<div class="form-group ">
<label class="h3"> Your Name:</label>
<input type="text" name="nm" class=" form-control"/>
</div>
<div class="form-group ">
<label class="h3"> Your Email: </label>
<input type="Email" name="em" class=" form-control"/>
</div>
<div class="form-group ">
<label class="h3">  Subject: </label>
<input type="text"name="sb" class=" form-control"/>
</div>
<div>
<label class="h3"> Your Message : </label>
<input type="text" name="ms"
class="form-control"/>
</div>
<div class="form-group pt-3">
<input type="Submit" name="btn" value="SUBMIT" 
 class=" btn btn-light h6 "/>
</div>
</div>

</div>
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






