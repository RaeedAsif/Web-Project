<?php
include(".\config\config.php");
$sql = "Select * from blog";
$rs = mysqli_query($mysqli,$sql);
session_start();

?>
<html>
<head>
	<title>BLOG</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
 <link rel="stylesheet" href="css/webp_bs.css" /> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}
input[type=submit] {
    background-color: #FFA500;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #FF8C00;
}
</style>

</head>
<body>

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
        <a class="nav-link " href="cuisine_main.html">CUISINE</a>
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

<div class="container">
	<?php
	while($res = mysqli_fetch_array($rs)){
		$sqlB = "Select link from user where UserName='$res[1]' ";
		$rsB = mysqli_query($mysqli,$sqlB);
		$resB = mysqli_fetch_array($rsB);
	echo "<br><br>";
	echo "<div class=".'"row"'.">";
	echo "<div class=".'"col-md-3"'." > <div class=".'"blog_img"'."> <img src=".'"'.$resB[0].'"'." class=".'"rounded"'." height=".'"250px"'." width=".'"100%"'."> <b>$res[1]</b> </div> </div> <div class=".'"col-md blog-text"'." id=".'"white"'."><div class=".'"row"'."><div class=".'"col-md"'."> &nbsp </div></div> <div class=".'" col-md "'."> <h4>".$res[3]."</h4></p><p>".$res[2]."</p></div></div></div>";
	echo "<br><br>";
	if($res = mysqli_fetch_array($rs)){
		$sqlB = "Select link from user where UserName='$res[1]' ";
		$rsB = mysqli_query($mysqli,$sqlB);
		$resB = mysqli_fetch_array($rsB);
		echo "<div class='row'>
		<div class='col-md blog-text' id='white'><div class='row'><div class='col-md'> &nbsp </div></div> <div class=' col-md '> <h4> $res[3]</h4> <p> $res[2] </p>  </div> </div> 
		<div class='col-md-3' > <div class='blog_img'> <img src='$resB[0]' class='rounded' height='250px' width='100%'> <b>$res[1]</b> </div> </div> 
		</div>";
	}
	}
	?>
	

<br>
<div class="row">
    <h1> Add Blog </h1>
    <br><br>
  </div>
    <form action="insert.php" method="post">
    <div class="row">
      <div class="col-md-2">
        <label for="heading"><b>Heading</b></label>
      </div>
      <div class="col-md-10">
        <textarea id="subject" name="title" placeholder="Write Heading.." style="height:50px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">
        <label for="blog"><b>Blog</b></label>
      </div>
      <div class="col-md-10">
        <textarea id="subject" name="comment" placeholder="Write Blog.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
</form>
</div>



</div>
<br>

<footer>BLOG BY Cookmania</footer>
</body>
</html>