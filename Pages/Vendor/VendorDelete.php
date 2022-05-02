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
    <a class="navbar-brand text-warning" href="VendorDelete.php">Lucifer</a>
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="ProductDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vendor</a>
          <ul class="dropdown-menu" aria-labelledby="ProductDrop">
            <li><a class="dropdown-item" href="VendorAdd.php">Add Vendor</a></li>
            <li><a class="dropdown-item" href="VendorUpdate.php">Update Vendor</a></li>
            <li><a class="dropdown-item" href="VendorDelete.php">Delete Vendor</a></li>
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
          <a class="nav-link active" aria-current="page" href="../Search/Search.php">Search</a>
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


<!-----------------------------------------------Form Start------------------------------------------------------>

<div class="shadow p-3 mb-5 bg-body rounded">
<div class="card card-outline-secondary w-90" >
				 <div class="card-header">Delete Vendor</div>
				  <div class="card-body">
                        <?php if(isset($_GET['error1'])){?>
                          <div class="alert alert-danger">
                          <audio id="sound2" src="../../dialogues/PhiliaDeleteVendor1.mp3" preload="auto"></audio>
                          <p type="button"  data-bs-toggle="modal" data-bs-target="#PhiliaM" onclick="document.getElementById('sound2').play()";>Vendor doesn't exist</p></div><?php }?>
                        <?php if(isset($_GET['success'])){?>
                          <div class="alert alert-success">
                        <p class="error"> <?php echo $_GET['success']; ?></p></div>  <?php }?>
                        <form class="row g-3" method="post" action="Controls/DeleteVendor.php">
                        <div class="form-group col-md-6">
						  <label for="VendorID">Vendor ID</label>
						  <input type="text" class="form-control" id="VendorID" name="VendorID" required>
						</div>
					  <div class="col-12">					  
					  <button type="submit" id="DeleteVendor" name="DeleteVendor" class="btn btn-outline-danger">Delete Vendor</button>
					  <button type="reset" class="btn">Clear</button>
            <audio id="sound1" src="../../dialogues/PhiliaDeleteVendor.mp3" preload="auto"></audio>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#PhiliaM1" onclick="document.getElementById('sound1').play()">
              Need Help?
            </button>
					  </div>
					 </form>
                </div>
            </div>
            </div>
  <div class="modal fade" id="philiaM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       <h5 class="text-primary">Philia</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <center> <image src="../../Hostes/Philia.png" class="img-responsive" width="100" height="100">
              <p>You can't delete a none existing vendor ID. You can always check vendor IDs in the 
                vendor search table.
              </p>
          </center>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="document.getElementById('sound2').pause()";>Close</button>
        <button type="button" class="btn btn-primary" onclick="document.getElementById('sound2').play()";>repeat</button>
      </div>
    </div>
  </div>
</div> 
<div class="modal fade" id="philiaM1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       <h5 class="text-primary">Philia</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <center> <image src="../../Hostes/Philia.png" class="img-responsive" width="100" height="100">
              <p>To delete a vendor, Just type in the vendor ID and the system will automatically delete
                the vendor from the table.
              </p>
          </center>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="document.getElementById('sound1').pause()";>Close</button>
        <button type="button" class="btn btn-primary" onclick="document.getElementById('sound1').play()";>repeat</button>
      </div>
    </div>
  </div>
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    </body>
</html>