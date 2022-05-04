<?php
    session_start();
   require_once "Conf/connex.php";

	$Username = '';
	$Password1 = '';
    $Password2='';
	
			
  if(isset($_POST['Reset'])) {
    // username and password sent from form 
    $Username = $_POST['resetU'];
    $Password1 = $_POST['resetP1'];
    $Password2 = $_POST['resetP2'];


    if($Password1 != $Password2){
      header("Location: ChangePassword.php?error2=Password doesn't match");
      exit();
    }
    else{

    $sql = "UPDATE users SET password='".$Password1."' WHERE username = '".$Username."' ";
    $result = mysqli_query($conn,$sql);
      header("Location: ChangePassword.php?success2=Password Successfully changed");
      exit();
    }
 
}
?>