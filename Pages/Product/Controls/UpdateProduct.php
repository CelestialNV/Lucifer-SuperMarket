<?php
    require_once "../../../Conf/connex.php";
	
	if(isset($_POST['updateProduct'])){
        
		$ProductID  = $_POST['ProductID'];
		$Discount = $_POST['Discount'];
		$Description = $_POST['Description'];
		$UnitPrice = $_POST['UnitPrice'];;
		
			
            
			
			
			$sql = "SELECT * FROM product WHERE ProductID = '".$ProductID."'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            if($count == 1) {
				$sql = " UPDATE product SET Discount = '".$Discount."', UnitPrice = '".$UnitPrice."', Description = '".$Description."' WHERE productID = '".$ProductID."' ";
                $run=mysqli_query($conn,$sql); 
			    if($run){
					header("Location: ../ProductUpdate.php?success=Product Updated succefully");
                    exit();
                }
                else{
					header("Location: ../ProductUpdate.php?error=Check Details entered");
                    exit();
                }
			}else {
				
				header("Location: ../ProductUpdate.php?error1=Product Doesn't Exist");
                }
                
                 }
?>