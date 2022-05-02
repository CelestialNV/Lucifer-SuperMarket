<?php
    session_start();
   require_once "Conf/connex.php";

   $Name='';
	$Username = '';
	$Password1 = '';
   $Password2='';
	
			
  if(isset($_POST['Register'])) {
    
    $Name=$_POST['registerN'];
    $Username = $_POST['registerU'];
    $Password1 = $_POST['registerP1'];
    $Password2 = $_POST['registerP2'];


    if($Password1 != $Password2){
      header("Location: RegisterForm.php?error2=Password doesn't match");
      exit();
    }
    else{

    $sql = "SELECT * FROM users WHERE username = '".$Username."' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);
    
    if($count == 1) {
      header("Location: RegisterForm.php?error3=Username Already exists");
       exit();
    }else {
       $sql="INSERT INTO users VALUES ('".$Name."', '".$Username."', '".$Password1."') ";
       $result = mysqli_query($conn,$sql);
      header("Location: RegisterForm.php?success1=Account registered successfully");
      exit();
    }
 }
}
?>