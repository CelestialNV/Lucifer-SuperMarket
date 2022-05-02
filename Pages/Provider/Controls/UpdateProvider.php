<?php
    require_once"../../../Conf/connex.php";
	
	if(isset($_POST['UpdateProvider'])){
        
		$ProviderID  = $_POST['ProviderID'];
		$PhoneNumber = $_POST['PhoneNumber'];
		$Email = $_POST['Email'];
		$City = $_POST['City'];
        $District = $_POST['District'];
		
			
            
			
			$sql = "SELECT * FROM provider WHERE ProviderID = '".$ProviderID."'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            if($count == 1) {
				$sql = " UPDATE provider SET PhoneNumber = '".$PhoneNumber."', Email = '".$Email."', City = '".$City."', District = '".$District."' WHERE ProviderID = '".$ProviderID."' ";
                $run=mysqli_query($conn,$sql); 
			    if($run){
					header("Location: ../ProviderUpdate.php?success=Provider Updated succefully");
                    exit();
                }
                else{
					header("Location: ../ProviderUpdate.php?error=Check Details entered");
                    exit();
                }
			}else {
				
				header("Location: ../ProviderUpdate.php?error1=Provider Doesn't Exist");
                }
                
                 }
?>