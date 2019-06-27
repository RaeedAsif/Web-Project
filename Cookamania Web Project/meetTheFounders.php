<?php

include_once('.\config\config.php');

$query = 'SELECT * FROM about_us';

$result = mysqli_query($mysqli, $query); 
?>

<php>
<head>
  <title>Meet the Founders</title>

 <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css' integrity='sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4' crossorigin='anonymous'>
 <link rel='stylesheet' href='css/webp_bs.css' /> 
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js' integrity='sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ' crossorigin='anonymous'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js' integrity='sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm' crossorigin='anonymous'></script>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Josefin Sans'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Pacifico'>


</head>

<body id='pak'>
<nav class="navbar navbar-expand-lg navbar-light " id="white" >
  <a class="navbar-brand" href="home.php"><img src="logo\cmt.png" alt="logo" width=250px height=65px></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<?php while($res = mysqli_fetch_array($result)){
      $a5 = $res['a5'];
      $a6 = $res['a6'];
      $a7 = $res['a7'];
      $a8 = $res['a8'];
      $a9 = $res['a9'];
      $a10 = $res['a10'];
      $a11 = $res['a11'];
      $a12 = $res['a12'];
      $a13 = $res['a13'];
      $ia = $res['img3'];
      $ir = $res['img4'];
      $iz = $res['img5'];
echo "<br> <div class='container-fluid'>
  <div class='row'>
    <div class='col-md-12'><img src='$a5' width='100%' height='90%'></div>
  </div><br><br>
  <div class='row'>
  <div class = 'col-md-3'></div>
  <div class=' col-md-6 text-block1'> 
    <h1 id='h1'>$a6</h1>
    <h1 id='h2'>$a7</h1>
    
    <br>
  </div>
  <div class='col-md-3'></div>
</div>
</div>

<div class='container'>
  <div class='row'>
    <div class='col-md-3'><img src='$ia' width='100%' height='mr-auto'></div>
    <div style='margin: 5px'></div>
    <div class = 'col-md-6'><h1>$a8</h1><p>$a9</p></div>
  </div>
<br><hr>
   <div class='row'>
    <div class='col-md-3'><img src='$ir' width='100%' height='mr-auto'></div>
    <div style='margin: 5px'></div>
    <div class = 'col-md-6'><h1>$a10</h1><p>$a11</p></div>
  </div>
<br><hr>
 <div class='row'>
    <div class='col-md-3'><img src='$iz' width='100%' height='mr-auto'></div>
    <div style='margin: 5px'></div>
    <div class = 'col-md-6'><h1>$a12</h1><p>$a13</p></div>
  </div>
<br><hr>
</div>";
}
$mysqli->close();
?>

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