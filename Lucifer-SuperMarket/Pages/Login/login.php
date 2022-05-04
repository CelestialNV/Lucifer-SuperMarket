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
    <a class="navbar-brand text-warning" href="login.php">Lucifer</a>
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
          <audio id="sound" src="../../dialogues/ArkLogin.mp3" preload="auto"></audio>
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#Ark" onclick="document.getElementById('sound').play()"; >About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<section class="h-100 gradient-form">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">
                <div class="text-center">
                  <img src="../../Images/super1.png"
                    style="width: 116px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Welcome to Lucifer</h4>
                </div>

                <form action="Controls/log.php" method="post">
                  <div class="form-outline mb-4">
                  <?php if(isset($_GET['error1'])){?>
                          <div class="alert alert-danger">
                        <p class="error"> <?php echo $_GET['error1']; ?></p></div>  <?php }?>
                    <label class="form-label" for="Username">Username</label>
                    <input type="text" id="Username" name="Username" class="form-control"
                      placeholder="Username"  required/>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="Password">Password</label>
                    <input type="password" id="Password" name="Password" class="form-control" placeholder="Password" required/>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-block fa-lg gradient-custom-2 mb-3 text-white" id="login" name="login" type="submit" style="background-color : #0d0e13">Log
                      in</button><br>
                    <a class="text-muted" href="../ChangePassword/ChangePassword.php">Forgot password?</a>
                  </div>
                </form>

              </div>
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="../../Images/Weak.jpg"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!----------------Poppup---------------------------------------------------------------->

<div class="modal fade" id="Ark" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       <h5 class="text-primary">Ark</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <center> <image src="../../Hostes/Ark.png" class="img-responsive" width="100" height="100">
          <br><br>
              <p>Hello ! I am Ark, and i am one of the 3 hosts you'll be
                meeting in the next page. Right now you are in the login Screen.
                Please provide a username and a password. If you haven't registered yet,
                Please click on "register" on the navigation bar. If you have trouble
                remembering your password, you can always reset it by clicking on the
                "Forgot Password?" Link below the login form.
              </p>
          </center>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="document.getElementById('sound').pause()";>Close</button>
        <button type="button" class="btn btn-primary" onclick="document.getElementById('sound').play()";>repeat</button>
      </div>
    </div>
  </div>
</div>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>