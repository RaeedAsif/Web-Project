u<?php
include(".\config\config.php");
$userErr=$passErr="";
if($_SERVER["REQUEST_METHOD"]=="POST") {
	
$userErr=$passErr="";
 $OFF=1;
 if(empty($_POST["username"])){
		$userErr= "user name is required";
		header("location:login2.php");
		$OFF =0;
		} else {	
			$check="SELECT UserName FROM user WHERE UserName = '$_POST[username]'";
			$rs = mysqli_query($mysqli,$check);
			
			$row = mysqli_fetch_array($rs,MYSQLI_NUM);
			if ($row[0])
				{
					$userErr = "User Already  Exists<br/>";
					$OFF = 0;
				}else{
					$username =  $_POST["username"];
				}
			}
			if(empty($_POST["email"])){
		$OFF =0;
		}else{
					$email =  $_POST["email"];
				}
				if(empty($_POST["link"])){
		$OFF =0;
		}else{
					$link =  $_POST["link"];
				}
				if(empty($_POST["pass"])){
			$passErr = "Password is required";
			$OFF = 0;
		} else {
			$length = strlen($_POST["pass"]);
			if ($length < 6 ){
				$passErr = "The length of the password must be greater than 5";
				$OFF = 0;
			}elseif ($_POST["pass"]==$_POST["pass2"]){  
			
			$password = $_POST["pass"];
			}
		}
		if($OFF){
			$sql = 'INSERT INTO user(UserName,email,password,link) VALUES("'."$username".'", "'."$email".'","'."$password".'","'."$link".'")';
			//echo $username;echo $email; echo $Fname; echo $Lname; echo $password;
			
			//echo"<br />";
			//echo $sql;
			
			$retval = mysqli_query($mysqli,$sql);
			if(!$retval){
				echo "Fill out all the fields correctly: ";
			}	else{				
				mysqli_close($mysqli);
				header("location:login.php");
				}
		}
		}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Cookmania.com</title>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
 <link rel="stylesheet" href="css/webp_bs.css" /> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button.sign {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
#cancelbtn, #signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
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
        <a class="nav-link" href="home.html">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cuisne_main.html">CUISINES <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="blog.html">BLOG</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="facts.html">FACTS</a>
      </li>
         <li class="nav-item">
        <a class="nav-link " href="about us.html">ABOUT US</a>
      </li>
         <li class="nav-item">
        <a class="nav-link " href="#">CONTACT US</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 border-warning" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class = "container-fluid"  >
  <div class = "row fix fixm">
  <div class = "col-md-3"></div>
  <div class = "col-md-6">
    <form method="post" action="signup.php" style="border:1px solid #ccc">
      <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

		<label for="username"><b>Username</b></label>
        <input type="text" name = "username" placeholder="Enter username" name="email" required>
        <?php echo "*".$userErr;?>
		<label for="email"><b>Email</b></label>
        <input type="text" name = "email" placeholder="Enter Email" name="email" required>
<label for="imagelink"><b>Image</b></label>
        <input type="text" name = "link" placeholder="Enter Image link" name="imagelink" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" name = "pass" placeholder="Enter Password" name="psw" required>
		<?php echo "*".$passErr;?>
        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" name =  "pass2" placeholder="Repeat Password" name="psw-repeat" required>
    
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <div class="clearfix">
          <button type="button" class="sign" id="cancelbtn" style="padding: 14px 20px; background-color: #f44336;">Cancel</button>
          <button type="submit" class="sign" id="signupbtn">Sign Up</button>
        </div>
      </div>
    </form>
  </div>
<div class = "col-md-3"></div>
</div>
</div>
