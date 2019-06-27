<?php
include(".\config\config.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST") {
	$OFF=1;
	if(isset($_SESSION['login_user'])){
	$user=$_SESSION['login_user'];
if(empty($_POST["title"])){
		$OFF =0;
		}else{
					$title =  $_POST["title"];
				}
if(empty($_POST["comment"])){
		$OFF =0;
		}else{
					$comment =  $_POST["comment"];
				}

if($OFF){
$sql = "INSERT INTO blog( username, comment, title) VALUES ('$user','$comment','$title')";
$retval = mysqli_query($mysqli,$sql);
			if(!$retval){
			}	
			else{				
				mysqli_close($mysqli);
				header("location:blog.php");
				
				}
		
}else{
	echo $user;
	echo $title;
	echo $comment;
	}
	}else{
		header("location:login.php");
	}
		}
?>