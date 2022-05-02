<?php
    require_once "../../../Conf/connex.php";
	
	if(isset($_POST['AddProvider'])){
        
		$ProviderName  = $_POST['ProviderName'];
		$Brand  = $_POST['Brand'];
		$PhoneNumber = $_POST['PhoneNumber'];
		$Email = $_POST['Email'];
		$City = $_POST['City'];
		$District = $_POST['District'];
	
			
			$sql = "SELECT * FROM provider WHERE ProviderName = '".$ProviderName."'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            if($count == 1) {
            
             header("Location: ../ProviderAdd.php?error1=Provider Already Exists");
             exit();
			}else {
				$sql = "INSERT INTO provider (ProviderName, Brand, PhoneNumber, Email, City, District) VALUES ('".$ProviderName."','".$Brand."', '".$PhoneNumber."', '".$Email."', '".$City."','".$District."')";
				
                $run=mysqli_query($conn,$sql); 
			    if($run){
					header("Location: ../ProviderAdd.php?success=Provider added succefully");
                    exit();
                }
                else{
					header("Location: ../ProviderAdd.php?error=Check Details entered");
                    exit();
                }
                 }
				
		
	}

?>