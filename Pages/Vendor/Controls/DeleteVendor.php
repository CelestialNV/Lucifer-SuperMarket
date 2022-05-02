<?php
    require_once"../../../Conf/connex.php";
	
	if(isset($_POST['DeleteVendor'])){


        $VendorID = $_POST['VendorID'];


        $sql = "SELECT * FROM vendor WHERE VendorID = '".$VendorID."'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1) {
            $sql = " DELETE FROM vendor WHERE VendorID = '".$VendorID."' ";
                $run=mysqli_query($conn,$sql); 
			    if($run){
					header("Location: ../VendorDelete.php?success=Vendor Deleted succefully");
                    exit();
                }
                else{
					header("Location: ../VendorDelete.php?error=Check Details entered");
                    exit();
            }
        }else {
            
            header("Location: ../VendorDelete.php?error1=Vendor Doesn't Exist");
            }
                
		
	}
?>