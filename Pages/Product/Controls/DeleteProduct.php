<?php
    require_once"../../../Conf/connex.php";
	
	if(isset($_POST['DeleteProduct'])){


        $ProductID = $_POST['ProductID'];


        $sql = "SELECT * FROM product WHERE productID = '".$ProductID."'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1) {
            $sql = " DELETE FROM product WHERE productID = '".$ProductID."' ";
                $run=mysqli_query($conn,$sql); 
			    if($run){
					header("Location: ../ProductDelete.php?success=Product Deleted succefully");
                    exit();
                }
                else{
					header("Location: ../ProductDelete.php?error=Check Details entered");
                    exit();
            }
        }else {
            
            header("Location: ../ProductDelete.php?error1=Product Doesn't Exist");
            }
                
		
	}
?>