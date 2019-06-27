<?php

include_once(".\config\config.php");
session_start();

if(isset($_SESSION['login_user'])){
$user_check=$_SESSION['login_user'];}

$dquery = "SELECT * FROM desi ORDER BY rno DESC";
$dresult = mysqli_query($mysqli, $dquery); 
$aquery = "SELECT * FROM asian ORDER BY rno DESC";
$aresult = mysqli_query($mysqli, $aquery); 
$bquery = "SELECT * FROM bbq ORDER BY rno DESC";
$bresult = mysqli_query($mysqli, $bquery);
$squery = "SELECT * FROM desserts ORDER BY rno DESC";
$sresult = mysqli_query($mysqli, $squery);
$iquery = "SELECT * FROM italian ORDER BY rno DESC";
$iresult = mysqli_query($mysqli, $iquery);
?>

<php>
<head>
  <title>Cookmania</title>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
 <link rel="stylesheet" href="css/webp_bs.css" /> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hmdOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</head>

<body>

<nav class="navbar navbar-expand-md navbar-light fixed-top" id="white">
  <a class="navbar-brand" href="#"><img src="logo\cmt.png" alt="logo" width=250px height=65px></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nav-pills mr-auto" id="menu">
    	<li class="nav-item">
        <a class="nav-link" href="home.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="
cuisine_main.html">CUISINES </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="blog.php">BLOG</a>
      </li>
       <li class="nav-item">
        <a class="nav-link " href="facts.php">FACTS</a>
      </li>
       <li class="nav-item">
        <a class="nav-link " href="about us.php">ABOUT US</a>
      </li>
       <li class="nav-item">
        <a class="nav-link " href="contact_us.php">CONTACT US</a>
      </li>
	<?php
		if(isset($_SESSION['login_user'])){
      $user_check = $_SESSION['login_user'];
		echo  "<li class=".'"nav-item"'."><a class=".'"nav-link""'." href=".'"#"'.">".$user_check."</a></li>";
		echo  "<li class=".'"nav-item"'."><a class=".'"nav-link"'." href=".'"logout.php"'.">Logout</a></li>";
		}else{	
		echo "<li class=".'"nav-item"'."><a class=".'"nav-link""'." href=".'"login.php"'.">Login</a></li>";
		echo  "<li class=".'"nav-item"'."><a class=".'"nav-link"'." href=".'"signup.php"'.">Signup</a></li>";
		}
	  ?>
    </ul>


  </div>
</nav>


<div class="container-fluid feed" style=" padding: 100px; padding-top: 0px">
  <div class="row">

    <div class="col-md-8 col-sm-12" width="600px" align="center">
       <div class="container-fluid">
        <h1 class="font-weight-bold text-dark" align="left">Cookmania's daily feed</h1>
        <h4 class="font-weight-italic" align="left">You can cook aswell..</h4>
        <br>


  <?php 
    
    while($dres = mysqli_fetch_array($dresult)) {     
      $rname =  $dres['rname'];
      $desc = $dres['description'];
      $img = $dres['imgURL'];
       $rno = $dres['rno'];
      $rcuisine = $dres['rCuisine'];

      echo "<div class='row mtop'><div class='story' style='width:100%;'><div class='ptop'><a href='recipes.php?id=$rno&rc=$rcuisine'><img src= '$img' width='100%' height='500px'></a></div>
          <br>
          <div style='padding-left: 20px' align='left'> <h4 class='orange'>$rname</h4> <hr width='75%'> <p> $desc </p> </div>
        </div>
       </div>";
    }
while($ares = mysqli_fetch_array($aresult)) {     
      $rname =  $ares['rname'];
      $desc = $ares['description'];
      $img = $ares['imgURL'];
       $rno = $ares['rno'];
      $rcuisine = $ares['rCuisine'];

      echo "<div class='row mtop'><div class='story' style='width:100%;'><div class='ptop'><a href='recipes.php?id=$rno&rc=$rcuisine'><img src= '$img' width='100%' height='500px'></a></div>
          <br>
          <div style='padding-left: 20px' align='left'> <h4 class='orange'>$rname</h4> <hr width='75%'> <p> $desc </p> </div>
        </div>
       </div>";
    }

    while($bres = mysqli_fetch_array($bresult)) {     
      $rname =  $bres['rname'];
      $desc = $bres['description'];
      $img = $bres['imgURL'];
       $rno = $bres['rno'];
      $rcuisine = $bres['rCuisine'];

      echo "<div class='row mtop'><div class='story' style='width:100%;'><div class='ptop'><a href='recipes.php?id=$rno&rc=$rcuisine'><img src= '$img' width='100%' height='500px'></a></div>
          <br>
          <div style='padding-left: 20px' align='left'> <h4 class='orange'>$rname</h4> <hr width='75%'> <p> $desc </p> </div>
        </div>
       </div>";
    }

    while($sres = mysqli_fetch_array($sresult)) {     
      $rname =  $sres['rname'];
      $desc = $sres['description'];
      $img = $sres['imgURL'];
       $rno = $sres['rno'];
      $rcuisine = $sres['rCuisine'];

      echo "<div class='row mtop'><div class='story' style='width:100%;'><div class='ptop'><a href='recipes.php?id=$rno&rc=$rcuisine'><img src= '$img' width='100%' height='500px'></a></div>
          <br>
          <div style='padding-left: 20px' align='left'> <h4 class='orange'>$rname</h4> <hr width='75%'> <p> $desc </p> </div>
        </div>
       </div>";
    }

    while($ires = mysqli_fetch_array($iresult)) {     
      $rname =  $ires['rname'];
      $desc = $ires['description'];
      $img = $ires['imgURL'];
       $rno = $ires['rno'];
      $rcuisine = $ires['rCuisine'];

      echo "<div class='row mtop'><div class='story' style='width:100%;'><div class='ptop'><a href='recipes.php?id=$rno&rc=$rcuisine'><img src= '$img' width='100%' height='500px'></a></div>
          <br>
          <div style='padding-left: 20px' align='left'> <h4 class='orange'>$rname</h4> <hr width='75%'> <p> $desc </p> </div>
        </div>
       </div>";
    }
    $mysqli->close();
  ?>
  

      </div>
    </div>
    
    <div class="col-md-1"></div>

    <div class="mtop col-md-3  col-sm-12 hidden" align="center" >
      
    <div class="row">
      <div class="member" style="width : 100%"><h4 class="font-weight-italic text-dark"> &nbsp Featured Members</h4>
        <br>
        <div class="float-left" id="div-width"><a href="#"><img src="logo\i1.jpg" class=" mi-hover rounded-circle" alt="Member Image 1" width=70px height=70px></a><p> Raeed Asif </p></div>
        <div class="float-left" id="div-width""><a href="#"><img src="logo\i2.jpg" class="  mi-hover rounded-circle" alt="Member Image 1" width=70px height=70px></a><p> Adullah Kazmi </p></div>
        
        <div class="clearfix"></div>
        
        <div class="float-left"  id="div-width""><a href="#"><img src="logo\i3.jpg" class=" mi-hover rounded-circle" alt="Member Image 1" width=70px height=70px></a><p> Zaid Arif </p></div>
        <div class="float-left" id="div-width""><a href="#"><img src="logo\i4.jpg" class="  mi-hover rounded-circle" alt="Member Image 1" width=70px height=70px></a><p> Wajahat Zia </p></div>
        <div class="clearfix"></div>

        <div class="float-left" id="div-width""><a href="#"><img src="logo\i5.jpg" class=" mi-hover rounded-circle" alt="Member Image 1" width=70px height=70px></a><p> Fahad Ikram </p></div>
        <div class="float-left" id="div-width""><a href="#"><img src="logo\i6.jpg" class="  mi-hover rounded-circle" alt="Member Image 1" width=70px height=70px></a><p> Sohaib </p></div>
        <div class="clearfix"></div>
      </div>
    </div>
      <div class="row" >
      <div class="member"  style="margin-top: 10px; width : 100%; padding-bottom: 20px " >
        <h4 class="font-weight-italic text-dark"> &nbsp Blog</h4>
          <br>
          <div > <a href="blog.php"> <p>How to chop like a pro </p></a> </div>
          <hr width="80%">
          <div> <a href="blog.php"> <p>Advice! </p></a></div>       
      </div>
    </div>
    
  </div>
  </div>

</div>

    <footer class="nb-footer">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="about">
	<img src="images/logo.png" class="img-responsive center-block" alt="">

	<div class="social-media">
		<ul class="list-inline">
			<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-facebook"></i></a>
			<a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-twitter"></i></a>
			<a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-google-plus"></i></a>
			<a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-linkedin"></i></a></li>
		</ul>
	</div>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
	<h2 class="title">Help Center</h2>
	<ul class="list-unstyled">
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> How to Search</a></li>
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Sitemap</a></li>
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Site Info</a></li>
	</ul>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
	<h2 class="title">Customer information</h2>
	<ul class="list-unstyled">
		<li><a href="about us.php" title=""><i class="fa fa-angle-double-right"></i> About Us</a></li>
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
		<li><a href="contact_us.php" title=""><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
	</ul>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
	<h2 class="title">Security & privacy</h2>
	<ul class="list-unstyled">
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Terms Of Use</a></li>
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Privacy Policy</a></li>
	</ul>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
	<h2 class="title">About the Site</h2>
	<p>CookMania is a web platform which provides you best recipes from world's top cuisines.</p>
	
</div>
</div>
</div>
</div>

<section class="copyright">
<div class="container">
<div class="row">
<div class="col-sm-6">
<p>Copyright © 2018. CookMania.</p>
</div>
<div class="col-sm-6"></div>
</div>
</div>
</section>
</footer>




</body>
</php>