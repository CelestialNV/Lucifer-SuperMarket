<?php
    require_once"../../../Conf/connex.php";
	
	if(isset($_POST['addPurchase'])){
        
		//$PurchaseDate  = $_POST['PurchaseDate'];
		$ProductName  = $_POST['ProductName'];
		$PurchaseDate = $_POST['PurchaseDate'];
		$VendorName = $_POST['VendorName'];
		$Quantity = $_POST['Quantity'];
			
			
			
			
			
			$sql = "SELECT * FROM product WHERE ProductName = '".$ProductName."'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            if($count == 1) {
            $sql="UPDATE product SET stock= stock - $Quantity WHERE ProductName = '".$ProductName."' ";
			$run=mysqli_query($conn,$sql); 
             $sql = "INSERT INTO purchase (PurchaseDate, ProductName,  Quantity,VendorName) VALUES ( CAST('". $PurchaseDate ."' AS DATE),'".$ProductName."', '".$Quantity."', '".$VendorName."')";
            $run=mysqli_query($conn,$sql); 
			    if($run){
					header("Location: ../Purchase.php?success=Purchase added succefully");
                    exit();
                }
                else{
					header("Location: ../Purchase.php?error=Check Details entered");
                    exit();}
			}else {
				
					header("Location: ../Purchase.php?error1=Product doesn't exist");
                }
				
		
	}

?>