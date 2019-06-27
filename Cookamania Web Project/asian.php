<?php

include_once(".\config\config.php");

$aquery = "SELECT * FROM asian ORDER BY rno DESC";

$aresult = mysqli_query($mysqli, $aquery); 
?>

<php>
<head>
<title>Asian</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
 <link rel="stylesheet" href="css/webp_bs.css" /> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light " id="white" >
  <a class="navbar-brand" href="#"><img src="logo\cmt.png" alt="logo" width=250px height=65px></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nav-pills mr-auto" id="menu red">
      <li class="nav-item">
        <a class="nav-link" href="home.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="
cuisine_main.html">CUISINE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="blog.php">BLOG</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="facts.html">FACTS</a>
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

<div style = "background-color: #375243">
	<div class="container-fluid">
  <div class="row" >


    <div class="col-md-2"><a href="#"> <img class="img-responsive x" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/AfghanFood.JPG/170px-AfghanFood.JPG" alt="" width="100%" height="100%"> </a> </div>

<?php
    
    $i = 0;
    $x = 0;
    $y = 0;
//recipes.php?id=$rno&rc=$rcuisine
    while($ares = mysqli_fetch_array($aresult)){
      $rname = $ares['rname'];
      $id = $ares['r_id'];
      $desc = $ares['description'];
      $rno = $ares['rno'];
      $rcuisine = $ares['rCuisine'];

      if($i==0){echo "<div class='col-md-5'>"; $i++;}
      if($i>=0){
      $x=0;
      while($x<1){
      echo "<div><a href='recipes.php?id=$rno&rc=$rcuisine'><div class='in' id='$id'><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><h1>$rname</h1></div></a></div>";
      $x++;$y++;
      if($y==3){echo "</div>";$i=0;$y=0;}
    }
     
    }
    echo "<script>
    $(document).ready(function(){
    $('div#$id').mouseenter(function(){
    $('div#$id').php(function() {
    return '<h1>$rname</h1><p>$desc</p>'; });
    });
    $('div#$id').mouseleave(function(){
    $('div#$id').php(function() {
    return '<p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p><h1>$rname</h1>'; });
    });
    }); </script>";
}
$mysqli->close();
?>

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