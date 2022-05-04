<html>
    <head>
        <title>
            Lucifer
        </title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="../../Images/wallet.png">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
    </head>

    <body>

    <?php
	session_start();
	
	require_once"../../Conf/connex.php";
	require_once"../../Conf/config.php";
  
  
	if(!isset($_SESSION['logged'])){
		header('Location: ../Login/login.php');
		exit();
	}
	
?>



<!----------------------------------NavBar------------------------------------------------------------------------->



<div class="shadow mb-4 bg-body ">
<nav class="navbar navbar-expand-lg navbar-dark bg-black">
  <div class="container-fluid">
    <a class="navbar-brand text-warning" href="Search.php">Lucifer</a>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="ProductDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">Product</a>
          <ul class="dropdown-menu" aria-labelledby="ProductDrop">
            <li><a class="dropdown-item" href="../Product/ProductAdd.php">Add Product</a></li>
            <li><a class="dropdown-item" href="../Product/ProductUpdate.php">Update Products</a></li>
            <li><a class="dropdown-item" href="../Product/ProductDelete.php">Delete Products</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Purchase/Purchase.php">Purchase</a>
        </li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="ProductDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vendor</a>
          <ul class="dropdown-menu" aria-labelledby="ProductDrop">
            <li><a class="dropdown-item" href="../Vendor/VendorAdd.php">Add Vendor</a></li>
            <li><a class="dropdown-item" href="../Vendor/VendorUpdate.php">Update Vendor</a></li>
            <li><a class="dropdown-item" href="../Vendor/VendorDelete.php">Delete Vendor</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="ProviderDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">Provider</a>
          <ul class="dropdown-menu" aria-labelledby="ProviderDrop">
            <li><a class="dropdown-item" href="../Provider/ProviderAdd.php">Add Provider</a></li>
            <li><a class="dropdown-item" href="../Provider/ProviderUpdate.php">Update Providers</a></li>
            <li><a class="dropdown-item" href="../Provider/ProviderDelete.php">Delete Providers</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Search.php">Search</a>
        </li>
      </ul>
      <div class="hstack gap-3">
      <div class="d-flex">
      <a class="btn btn-outline-warning " type="button" href="../../Homepage.html">Homepage</a>
       </div>
       <div class="vr"></div>
       <div class="d-flex" >
       <a class="text-danger"  style="text-decoration: none" href="../Login/Controls/logout.php">Logout</a>
       </div>
</div>
    </div>
  </div>
</nav>
</div>



<!-----------------------------------------------NavTab Start----------------------------------------------------->

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" id="Switch-Product" data-bs-toggle="pill" data-bs-target="#Product" type="button" role="tab" aria-controls="Product" aria-selected="true">Products</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Switch-Purchase" data-bs-toggle="pill" data-bs-target="#Purchase" type="button" role="tab" aria-controls="Purchase" aria-selected="false">Purchases</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Switch-Vendor" data-bs-toggle="pill" data-bs-target="#Vendor" type="button" role="tab" aria-controls="Vendor" aria-selected="false">Vendors</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Switch-Provider" data-bs-toggle="pill" data-bs-target="#Provider" type="button" role="tab" aria-controls="Provider" aria-selected="false" >Providers</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Switch-EX" data-bs-toggle="pill" data-bs-target="#EX" type="button" role="tab" aria-controls="EX" aria-selected="false" >Expired Products</a>
  </li>
</ul>
<br>
<!-----------------------------------------------Table Start------------------------------------------------------>





<div class="tab-content" id="v-pills tabContent">

<div class="tab-pane fade show active" id="Product" role="tabpanel" arialabel="Switch-Product">
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <center><h2>Product Table</h2></center>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ProductID</th>
                  <th scope="col">ProductNum</th>
                  <th scope="col">Brand</th>
                  <th scope="col">Expiration Date</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Discount</th>
                  <th scope="col">Unit price</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                <?php require_once "Controls/FetchProduct.php"; ?>
                <?php if ($result->num_rows > 0): ?>
                <?php while($array=mysqli_fetch_row($result)): ?>
                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                    <td><?php echo $array[5];?></td>
                    <td><?php echo $array[6];?></td>
                    <td><?php echo $array[7];?></td>
                    <td><?php echo $array[8];?></td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
              </tbody>
            </table>
        </div>
    </div>        
</div>
</div>




<div class="tab-pane fade " id="Purchase" role="tabpanel" arialabel="Switch-Purchase">
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <center><h2>Purchase Table</h2></center>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">PurchaseID</th>
                  <th scope="col">PurchaseDate</th>
                  <th scope="col">ProductName</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Vendor</th>
                </tr>
              </thead>
              <tbody>
                <?php require_once "Controls/FetchPurchase.php"; ?>
                <?php if ($result->num_rows > 0): ?>
                <?php while($array=mysqli_fetch_row($result)): ?>
                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
              </tbody>
            </table>
        </div>
    </div>        
</div>
</div>



<div class="tab-pane fade " id="Vendor" role="tabpanel" arialabel="Switch-Vendor">
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <center><h2>Vendor Table</h2></center>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">VendorID</th>
                  <th scope="col">FullName</th>
                  <th scope="col">PhoneNumber</th>
                  <th scope="col">Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">Address2</th>
                  <th scope="col">City</th>
                  <th scope="col">District</th>
                </tr>
              </thead>
              <tbody>
                <?php require_once "Controls/FetchVendor.php"; ?>
                <?php if ($result->num_rows > 0): ?>
                <?php while($array=mysqli_fetch_row($result)): ?>
                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                    <td><?php echo $array[5];?></td>
                    <td><?php echo $array[6];?></td>
                    <td><?php echo $array[7];?></td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
              </tbody>
            </table>
        </div>
    </div>        
</div>
</div>

<div class="tab-pane fade" id="Provider" role="tabpanel" arialabel="Switch-Provider">
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <center><h2>Provider Table</h2></center>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ProviderID</th>
                  <th scope="col">ProviderName</th>
                  <th scope="col">Brand</th>
                  <th scope="col">PhoneNumber</th>
                  <th scope="col">Email</th>
                  <th scope="col">City</th>
                  <th scope="col">District</th>
                </tr>
              </thead>
              <tbody>
                <?php require_once "Controls/FetchProvider.php"; ?>
                <?php if ($result->num_rows > 0): ?>
                <?php while($array=mysqli_fetch_row($result)): ?>
                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                    <td><?php echo $array[5];?></td>
                    <td><?php echo $array[6];?></td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
              </tbody>
            </table>
        </div>
    </div>        
</div>
</div>


 <div class="tab-pane fade " id="EX" role="tabpanel" arialabel="Switch-EX">
 <div class="container mt-2">
 <div class="row">
        <div class="col-md-12">
        <div class="page-header">
                <center><h2>Expired Products</h2></center>
            </div>
            <table class="table">
              <thead>
                <tr>
                <th scope="col">ProductID</th>
                  <th scope="col">ProductNum</th>
                  <th scope="col">Brand</th>
                  <th scope="col">Expiration Date</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Discount</th>
                  <th scope="col">Unit price</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                <?php require_once "Controls/FetchExpired.php"; ?>
                <?php if ($result->num_rows > 0): ?>
                <?php while($array=mysqli_fetch_row($result)): ?>
                <tr>
                <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                    <td><?php echo $array[5];?></td>
                    <td><?php echo $array[6];?></td>
                    <td><?php echo $array[7];?></td>
                    <td><?php echo $array[8];?></td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
              </tbody>
            </table>
        </div>
    </div>        
   </div>
  </div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>