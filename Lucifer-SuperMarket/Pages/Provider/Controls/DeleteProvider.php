<?php
    require_once"../../../Conf/connex.php";
	
	if(isset($_POST['DeleteProvider'])){


        $ProviderID = $_POST['ProviderID'];


        $sql = "SELECT * FROM provider WHERE ProviderID = '".$ProviderID."'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1) {
            $sql = " DELETE FROM provider WHERE ProviderID = '".$ProviderID."' ";
                $run=mysqli_query($conn,$sql); 
			    if($run){
					header("Location: ../ProviderDelete.php?success=Provider Deleted succefully");
                    exit();
                }
                else{
					header("Location: ../ProviderDelete.php?error=Check Details entered");
                    exit();
            }
        }else {
            
            header("Location: ../ProviderDelete.php?error1=Provider Doesn't Exist");
            }
                
		
	}
?>