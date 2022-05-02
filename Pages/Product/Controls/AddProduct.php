<?php
    require_once "../../../Conf/connex.php";
	
	if(isset($_POST['addProduct'])){
        
		$ProductNum  = $_POST['ProductNum'];
		$ExpirationDate = $_POST['ExpirationDate'];
		$ProductName  = $_POST['ProductName'];
		$Discount = $_POST['Discount'];
		$Stock = $_POST['Stock'];
		$UnitPrice = $_POST['UnitPrice'];
		$Description = $_POST['Description'];
		$ProductBrand = $_POST['ProductBrand'];

			
			$sql = "SELECT * FROM product WHERE ProductName = '".$ProductName."' AND Brand= '".$ProductBrand."'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            if($count == 1) {
            
             header("Location: ../ProductAdd.php?error1=Product Already Exists");
             exit();
			}else {
				$sql = "INSERT INTO product(ProductNum, Brand, Expiration, ProductName, Discount, Stock, UnitPrice, Description) VALUES ('".$ProductNum."','". $ProductBrand ."',CAST('". $ExpirationDate ."' AS DATE),'".$ProductName."', '".$Discount."', '".$Stock."', '".$UnitPrice."','".$Description."')";
				
                $run=mysqli_query($conn,$sql); 
			    if($run){
					header("Location: ../ProductAdd.php?success=Product added succefully");
                    exit();
                }
                else{
					header("Location: ../ProductAdd.php?error=Check Details entered");
                    exit();
                }
                 }
				
		
	}

?>