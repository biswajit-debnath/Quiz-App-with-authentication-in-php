<?php
  session_start();
  if(isset($_SESSION['username'])){
    header('location:home.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Quiz Signup</title>
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
          <div class="card col-lg-6 m-auto p-lg-3 p-md-1">
               <form action="register.php" method="post" class="needs-validation" novalidate >
                 <div class="form-row">
                   <div class="form-group col-md-6">
                     <label for="inputEmail4">Email</label>
                     <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" required>
                     <div class="invalid-feedback">
                      Enter a valid email.
                     </div>   
                   </div>
                   <div class="form-group col-md-6">
                     <label for="inputPassword4">Password</label>
                     <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password" required>
                     <small class="invalid-feedback" id="passwordHelpBlock" class="form-text text-muted">
                     Must be 8-20 characters long
                    </small>
                   </div>
                 </div>
                 <div class="form-row">
                  <div class="form-group col-md-6">
                   <label for="User-name">Username</label>
                   <div class="input-group">
                    <div class="input-group-prepend">
                     <span class="input-group-text" id="inputGroupPrepend">@</span>
                    </div>
                    <input type="text" name="username" class="form-control" id="User-name" placeholder="Username" required>
                   </div>
                   <div class="valid-feedback">
                    Looks good!
                   </div>
                   <div class="invalid-feedback">
                    Please choose a username.
                  </div>   
                 </div>
                  <div class="form-group col-md-6">
                    <label for="inputAddress">Address</label>
                    <input type="text" name="address" class="form-control" id="inputAddress" required>
                  </div>
                 </div>
                 <div class="form-row">
                   <div class="form-group col-md-6">
                     <label for="inputCity">City</label>
                     <input type="text" name="city" class="form-control" id="inputCity" required>
                   </div>
                   <div class="form-group col-md-6">
                     <label for="inputState">State</label>
                     <select id="inputState" name="state" class="form-control" required>
                       <option selected>Choose...</option>
                       <option>Assam</option>
                       <option>UP</option>
                       <option>Maharastra</option>
                       <option>West Bangle</option>
                     </select>
                   </div>
                 </div>
                  <div class="form-group">
                   <div class="form-check">
                   <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                   <label class="form-check-label" for="invalidCheck2">
                    Agree to terms and conditions
                   </label>
                 </div>
                </div>
                 <button type="submit" class="btn btn-primary">Sign Up</button>
                 <span class="ml-2">Already signup? <a href="login.php">Login Instead</a><span>
               </form>    
          </div>
     </div>     




     <script src="js/bootstrap.js"></script>
     <script src="js/bootstrap.bundle.js"></script>
     <script src="js/main.js"></script>
</body>
</html>