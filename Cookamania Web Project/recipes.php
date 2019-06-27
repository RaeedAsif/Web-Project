<?php

include_once(".\config\config.php");
$rno = $_GET['id'];
$cuisine = $_GET['rc'];
$query = "SELECT * FROM $cuisine WHERE rno= $rno";

$result = mysqli_query($mysqli, $query); 
?>

<html>
<head>

<title>Recipe</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
 <link rel="stylesheet" href="css/webp_bs.css" /> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rokkitt">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt">

</head>


<body style = "background-color: #F6AB73">

<nav class="navbar navbar-expand-lg navbar-light " id="white" >
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
        <a class="nav-link " href="
cuisine_main.html">CUISINE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">BLOG</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">FACTS</a>
      </li>
         <li class="nav-item">
        <a class="nav-link " href="#">ABOUT US</a>
      </li>
         <li class="nav-item">
        <a class="nav-link " href="#">CONTACT US</a>
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

<div > 
  <?php


while($res = mysqli_fetch_array($result)){
      
      $x=0;
      $rname = $res['rname'];
      $img = $res['imgURL'];
      $ing = $res['Ingredients'];
      $method = $res['Methods'];
      $ser = $res['servings'];

 echo" <div class = 'containerR' >
    <br>
  <div class='row'>
<div class = 'col-md' align='center'>
<h1 class='rh'>$rname</h1>
<hr width='50%' color='white'>
</div>
</div>

<div class='row'>
<div class = 'col-md-4 story' style = 'background-color: #F6AB73'>

<div class = 'rec'><h2 class='rh'>Servings <img class='img-responsive' src='logo/ser.jpg' width=40px height=40px> </h2> <p> $ser persons</p> </div>

<br>

<div class = 'rec'>	
<h2 class='rh'>Ingredients</h2>
<hr>
<ul >";



	  $ingr = explode (",", $ing);
	 
	  $length = count($ingr);
	  
	  for ($i = 0; $i < $length; $i++) {
  	  echo "<li class='rl'>";
  	  echo "$ingr[$i]";
  	  echo "</li>";
	}


echo "</ul></div></div>";
echo "<style> 
		div#pic{
	  		height: 100%; 
	  		background-position: center;;
	      	background-size: cover;
	      	background-repeat: no-repeat;
	      	background-attachment: fixed;
	  		height = 500px;
	  		background-image: url('$img');
		} 
	</style>";
echo "<div class = 'col-md-8 story rounded' style = 'background-color: #F6AB73'>
		<div class = 'containerR-fluid'>";
echo "<div id='pic' class='rec'>
		<p>&nbsp</p>
		<p>&nbsp</p>
		<p>&nbsp</p>
		<p>&nbsp</p>
		<p>&nbsp</p>
		<p>&nbsp</p>
		<p>&nbsp</p>
		<p>&nbsp</p>
		<p>&nbsp</p>
		<p>&nbsp</p>
	</div>
	</div><br/>
	<div class = 'rec'><h2 class='rh'> Directions </h2> <hr>
	<ol>";

 	$methd = explode ("-", $method);
	 
	  $length = count($methd);
	  
	  for ($i = 0; $i < $length; $i++) {
  	  echo "<li class='rl'>";
  	  echo "$methd[$i]";
  	  echo "</li> <br>";
	}


echo" </ol></div></div></div></div></div>";


}
$mysqli->close();
?>


</div>

</body>
</html>


