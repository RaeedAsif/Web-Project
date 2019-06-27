<?php

include_once(".\config\config.php");

$dquery = "SELECT * FROM desi ORDER BY rno DESC";

$dresult = mysqli_query($mysqli, $dquery); 
?>

<php>
<head>
  <title>Cookmania.com</title>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
 <link rel="stylesheet" href="css/webp_bs.css" /> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">

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

</head>

<body >


<div style = "background-color: #d6d6c2"> 
  <div class = "container-fluid" >
    <br>
  <div class="row"><div class="ptext"> <p>Pakistani Cuisine</p> </div> </div>



  <?php  
    $i=0;
    $x=0;
    $y=0;
    $z=0;
      while($dres = mysqli_fetch_array($dresult)) { 

        $rname =  $dres['rname'];
        $desc = $dres['description'];
        $img = $dres['imgURL'];
        $rno = $dres['rno'];
        $rcuisine = $dres['rCuisine'];


        if($i==0){  
          echo "<div class = 'row'> <div class = 'col-md-12 member rounded'><a href='recipes.php?id=$rno&rc=$rcuisine'><img class='img-responsive x' src= '$img'  width='100%' height='70%'></a>
                <h2> $rname </h2>
                <p> $desc </p>
              </div> </div>";
          $i++;
        } 
        else if($y==0) {
          echo"<br>"; 
          echo "<div class='row'>";
          $y++; 
        }
        
        if($y>0) {
            $x=0;
            while($x<1){
              echo "<div class = 'col-md-6 member rounded'>
                    <a href='recipes.php?id=$rno&rc=$rcuisine''><img class='img-responsive x' src='$img' width='100%' height='50%''></a>
                    <h2>$rname</h2>
                    <p> $desc </p>
                    </div>";
              $x++;$z++;
              if($z==2){echo "</div>"; $y=0; $z=0;}
            }
          }//else
        }//while

  $mysqli->close();
  ?>        


    <div class="footer">
      <p>Footer</p>
    </div>

  </div>
</div>
</body>
</php>

1440 × 500