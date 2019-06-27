<?php

include_once(".\config\config.php");

$tquery = "SELECT * FROM turkish ORDER BY rno DESC";

$tresult = mysqli_query($mysqli, $tquery); 
?>

<php>
<head>
	<title>Turkish</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
 <link rel="stylesheet" href="css/webp_bs.css" /> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

</head>
<body id="ow">

<nav class="navbar navbar-expand-lg navbar-dark " id="red" >
  <a class="navbar-brand" href="#"><img src="logo\cmt_turk.png" alt="logo" width=250px height=65px></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nav-pills mr-auto" id="menuT">
      <li class="nav-item ">
        <a class="nav-link" href="home.php">HOME <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link " href="
cuisine_main.html">CUISINES</a>
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

<div class="container-fluid">

	<br>
	<div class="row"><div class="ttext"> <p>Turkish Cuisine</p> </div> </div>
	
	<hr width="50%">

  <?php
    
    $i = 0;
    $x = 0;
    $y = 0;
    $z = 0;
    $w =0;
    $e =0;
    $r =0;

    echo "<div class='row'>";

    while($tres = mysqli_fetch_array($tresult)){
    $rname =  $tres['rname'];
    $desc = $tres['description'];
    $img = $tres['imgURL'];
    $rno = $tres['rno'];
    $rcuisine = $tres['rCuisine'];

if($z==0){
    if($i==0){
  	echo "<div class='col-md-6'> <div class= 'member reds'> <a href='recipes.php?id=$rno&rc=$rcuisine'><img src='$img'  width=100% height=auto ></a>  <h1>&nbsp  $rname</h1><hr width='50%' height=364px> <p>&nbsp $desc</p></div></div>"; $i++;}
    
    if($x==0){
	   echo "<div class='col-md-6' >"; $x++;}
		else if($x<=2){
    $y=0;
    while($y<1){
    echo "<div class='row'> <div class='member reds'> <a href='recipes.php?id=$rno&rc=$rcuisine'><img src='$img'  width=700px height=182px></a> <h4> &nbsp $rname</h4><hr width='50%'> <p>&nbsp $desc </p></div></div> <br>"; $y++; $x++;}}
    else if($x>2){echo "</div></div>"; $z++; }
  }

  if ($z>0) {
     if($w==0){
      echo "<br> <hr> <div class='container-fluid'>
  <div class='row'>";
      $w++;
    }
    if($w>0){         
       $e=0;
       while($e<1){
          echo "<div class='col-md'><a href='recipes.php?id=$rno&rc=$rcuisine'><img src='$img' class='red' alt='t4' width=300px height=185px ></a><h4>$rname</h4> <p>$desc</p></div>"; $e++;$r++;
       if($r==4){ echo "</div></div>}";  $w=0; $r=0;}
        }
     }
  }
  }


 
 $mysqli->close();
  ?> 
	
  {




	

 
	</div>

</body>
</php>