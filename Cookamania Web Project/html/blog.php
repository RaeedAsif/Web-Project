<?php

include_once('.\config\config.php');

$query = 'SELECT * FROM blog ORDER BY bid DESC';

$result = mysqli_query($mysqli, $query); 
?>

<html>
<head>
	<title>BLOG</title>
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css' integrity='sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4' crossorigin='anonymous'>
 <link rel='stylesheet' href='css/webp_bs.css' /> 
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js' integrity='sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ' crossorigin='anonymous'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js' integrity='sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm' crossorigin='anonymous'></script>
</head>
<body>

<nav class='navbar navbar-expand-lg navbar-light ' id='white' >
  <a class='navbar-brand' href='#'><img src='logo\cmt.png' alt='logo' width=250px height=65px></a>
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>

  <div class='collapse navbar-collapse' id='navbarSupportedContent'>
    <ul class='navbar-nav nav-pills mr-auto' id='menu'>
      <li class='nav-item'>
        <a class='nav-link' href='home.html'>HOME <span class='sr-only'>(current)</span></a>
      </li>
      <li class='nav-item'>
        <a class='nav-link ' href='cuisine_main.html'>CUISINE</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link ' href='blog.html'>BLOG</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link ' href='facts.html'>FACTS</a>
      </li>
         <li class='nav-item'>
        <a class='nav-link ' href='about us'>ABOUT US</a>
      </li>
         <li class='nav-item'>
        <a class='nav-link ' href='#'>CONTACT US</a>
      </li>
    </ul>
  </div>
</nav>


<div class='container'>
<?php
	$i = 0;

    while($res = mysqli_fetch_array($result)){

      $buser = $res['buser'];
      $btitle = $res['btitle'];
      $bpost = $res['bpost'];
      $bimg = $res['user_img'];

      if($i==0){
      echo "<br><br>
		<div class='row'>
		<div class='col-md-3' > <div class='blog_img'> <img src='$bimg' class='rounded' height='250px' width='100%'> <b>$buser</b> </div> </div> <div class='col-md blog-text' id='white'><div class='row'><div class='col-md'> &nbsp </div></div> <div class='col-md'> <h4>$btitle</h4> <p> $bpost</p> </div>  </div>  </div> <br><br>";
      $i++;
      }
      else{
      	echo "<div class='row'>
		<div class='col-md blog-text' id='white'><div class='row'><div class='col-md'> &nbsp </div></div> <div class=' col-md '> <h4> $btitle</h4> <p> $bpost </p>  </div> </div> 
		<div class='col-md-3' > <div class='blog_img'> <img src='$bimg' class='rounded' height='250px' width='100%'> <b>$buser</b> </div> </div> 
		</div>";
      $i=0;
      }
     }
?>

</div>
<br>

<footer>BLOG BY Cookmania</footer>
</body>
</html>