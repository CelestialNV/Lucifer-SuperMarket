<html lang="en">
<head>
  <title>Lucifer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="../../Images/shopping-cart.png">
</head>
<body>

  


<nav class="navbar navbar-dark  " style="background-color: #0d0e13">
  <div class="container-fluid">
    <a class="navbar-brand text-warning" href="ChangePassword.php">Lucifer</a>
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-white"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="../../Homepage.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../Register/RegisterForm.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="About.php">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<section class="h-100 h-custom" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="../../Images/Grocery1.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Change Password</h3>
            <form action="Controls/change.php" method="post">
              <div class="form-outline mb-4">
              <?php if(isset($_GET['success2'])){?>
                          <div class="alert alert-success">
                        <p class="error"> <?php echo $_GET['success2']; ?></p></div>  <?php }?>
                        <?php if(isset($_GET['error2'])){?>
                          <div class="alert alert-danger">
                        <p class="error"> <?php echo $_GET['error2']; ?></p></div>  <?php }?>
                <label class="form-label" for="resetU">Username</label>
                <input type="text" id="resetU" name="resetU" class="form-control" required/>
              </div>
                <div class="form-outline mb-4">
                <label class="form-label" for="resetP1">New Password</label>
                <input type="text" id="resetP1" name="resetP1" class="form-control" required/>
                </div>
                <div class="form-outline mb-4">
                <label class="form-label" for="resetP2">Verify Password</label>
                <input type="text" id="resetP2" name="resetP2" class="form-control" required/>
                </div>
              <button type="submit" id="Reset" name="Reset" class="btn btn-success ">Reset</button><br><br>
              <a class="text-muted" href="../Login/login.php">Login</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>