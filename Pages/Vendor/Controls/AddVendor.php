<?php
    require_once"../../../Conf/connex.php";
	
	if(isset($_POST['AddVendor'])){
        
		$FullName  = $_POST['FullName'];
		$PhoneNumber  = $_POST['PhoneNumber'];
		$Email = $_POST['Email'];
		$Address = $_POST['Address'];
		$Address2 = $_POST['Address2'];
		$City = $_POST['City'];
        $District = $_POST['District'];
		
		
			
			
			$sql = "SELECT * FROM vendor WHERE FullName = '".$FullName."'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            if($count == 1) {
             header("Location: ../VendorAdd.php?error1=Vendor Already Exists");
             exit();
			}else {
				$sql = "INSERT INTO vendor(FullName, PhoneNumber, Email, Address , Address2, City, District) VALUES ('".$FullName."','".$PhoneNumber."', '".$Email."', '".$Address."', '".$Address."','".$City."','".$District."')";
                $run=mysqli_query($conn,$sql); 
			    if($run){
					header("Location: ../VendorAdd.php?success=Vendor added succefully");
                    exit();
                }
                else{
					header("Location: ../VendorAdd.php?error=Check Details entered");
                    exit();
                }
                 }
				
		
	}

?>