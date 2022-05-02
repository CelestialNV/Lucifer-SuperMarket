<?php 
      require_once "../../Conf/connex.php";

      $sql="SELECT FullName FROM vendor ";

      $result = mysqli_query($conn,$sql);

?>