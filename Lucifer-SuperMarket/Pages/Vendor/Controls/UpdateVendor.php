<?php
    require_once"../../../Conf/connex.php";
	
	if(isset($_POST['UpdateVendor'])){


        $VendorID = $_POST['VendorID'];
		$PhoneNumber  = $_POST['PhoneNumber'];
		$Email = $_POST['Email'];
		$Address = $_POST['Address'];
		$Address2 = $_POST['Address2'];
		$City = $_POST['City'];
        $District = $_POST['District'];
		
        $sql = "SELECT * FROM vendor WHERE VendorID = '".$VendorID."'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1) {
            $sql = " UPDATE vendor SET  PhoneNumber = '".$PhoneNumber."', Email = '".$Email."', Address = '".$Address."', Address2 = '".$Address2."', City = '".$City."', District = '".$District."' WHERE VendorID = '".$VendorID."' ";
                $run=mysqli_query($conn,$sql); 
			    if($run){
					header("Location: ../VendorUpdate.php?success=Vendor Updated succefully");
                    exit();
                }
                else{
					header("Location: ../VendorUpdate.php?error=Check Details entered");
                    exit();
            }
        }else {
            
            header("Location: ../VendorUpdate.php?error1=Vendor Doesn't Exist");
            }
                
		
	}
?>