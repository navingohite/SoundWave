<?php
require_once"dbconfig.php";

?><!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login | SoundWave</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<br><br><br><br><br>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">
          
        <div class="card o-hidden border-0 shadow-lg my-5">
         <!-- <h1 style="text-align:center"> Admin Login</h1> -->
   <div class="card-body p-0">
           <div class="row">
		   <div class="col-lg-3"></div>
              <div class="col-lg-6">
			  
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Admin Panel</h1>
                  </div>
                  <form class="user" method="post">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
                    </div>
                    
                    <input type="submit" value="Login" name="submit" class="btn btn-primary btn-user btn-block">
                      
                    
                    
                   
                  </form>
				  <?php
				  if(isset($_REQUEST['submit']))
				  {
					  extract($_REQUEST);
					  $n=select("select * from admin where email='$email' and password='$password'");
					  $t=mysqli_num_rows($n);
					  if($t==1)
					  {
						  $_SESSION['adminlogin']='yes';
						  echo"<script>window.location='index.php';</script>";
					  }
					  else
					  {
						  echo"<script>alert('Something Went Wrong');</script>";
					  }
				  }
				  ?>
                  <hr>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
