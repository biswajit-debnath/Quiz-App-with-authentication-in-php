<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Quiz Login</title>
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="css/bootstrap-grid.css">
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <div class="container mt-lg-5">
          <div class="text-center mb-3">
               <span class="badge-success app-name">The Quiz App</span>
          </div>
<!--           <h3 class="text-center mb-2 font-weight-normal">Sign-UP</h3> -->
          <div class="card col-lg-5 m-auto p-lg-3 p-md-1">
               <form action="register.php" method="POST" class="needs-validation" novalidate>
                 <div class="form-row">
                   <div class="form-group col-md-12">
                     <label for="inputEmail4">Username</label>
                     <input type="text" name="username" class="form-control" id="inputEmail4" placeholder="Username" required>
                     <div class="invalid-feedback">
                      Enter a valid email.
                     </div>
                   </div>
                   <div class="form-group col-md-12">
                     <label for="inputPassword4">Password</label>
                     <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password" required>
                     <small class="invalid-feedback" id="passwordHelpBlock" class="form-text text-muted">
                     Incorrect Password
                    </small>
                   </div>
                 </div>

                 <button type="submit" class="btn btn-primary ">Login</button>
                 <span class="ml-2">Haven't signup yet? <a href="signup.php">Signup here</a><span>
                 
               </form>    
          </div>
     </div>     




     <script src="js/bootstrap.js"></script>
     <script src="js/bootstrap.bundle.js"></script>
     <script src="js/main.js"></script>
</body>
</html>