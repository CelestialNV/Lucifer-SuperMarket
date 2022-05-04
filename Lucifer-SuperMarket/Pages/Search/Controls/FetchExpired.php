<?php 
      require_once "../../Conf/connex.php";

      $sql="SELECT * FROM product WHERE Expiration < NOW()";


      $result = mysqli_query($conn,$sql);

?>