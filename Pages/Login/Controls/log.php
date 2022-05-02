<?php
    session_start();
    require_once "../../../Conf/connex.php";

	$Username = '';
	$Password = '';
	$hashedPassword = '';
	
			
  if(isset($_POST['login'])) {
    
    $Username = $_POST['Username'];
    $Password = $_POST['Password']; 
    
    $sql = "SELECT * FROM users WHERE username = '".$Username."' AND password = '".$Password."' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);
    
  
    if($count == 1) {
      $_SESSION['logged']='yes';
       header("Location: ../../Product/ProductAdd.php");
       exit();
    }else {
      header("Location: ../login.php?error1=Incorrect Username or password");
      exit();
    }
 }
?>