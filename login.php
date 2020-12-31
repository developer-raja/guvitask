<?php
include "db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Signup</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
</head>
<body>
  <div class="container">
  <div class="row">
  <div class="col-md-5 mx-auto mt-5">
  <?php if(isset($_SESSION['created'])): ?>
    <div class="alert alert-success">
    <?php echo $_SESSION['created']; ?>
    </div>
<?php endif; ?>
<?php unset($_SESSION['created']); ?>
  <div class="card">
  <div class="card-header">
  <h3>Login User</h3>
  </div>
  <div class="card-body">
  <form>
  <div class="form-group">
  <div class="form-group">
  <input type="email" id="email" class="form-control email" placeholder="Email">
  <div class="invalid-feedback emailError" style="font-size:16px;">Email is required</div>
  </div>
  <!-- Close form-group -->
  <div class="form-group">
  <input type="password" id="password" class="form-control password" placeholder="Password">
  <div class="invalid-feedback passwordError" style="font-size:16px;">Password is required</div>
  </div>
  <!-- Close form-group -->
  <div class="form-group">
   <button type="button" id="login" class="btn btn-info">Login &rarr;</button>
   <a href="index.php" style="float:right;margin-top:10px;">Create new account</a>
  </div>
  <!-- Close form-group -->
  </form>
  </div>
  <!-- Close card-body -->
  </div>
  <!-- Close card -->
  </div>
  <!-- Close col-md-5 -->
  </div>
  <!-- Close row -->
  </div>
  <!-- Close container -->

   <script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script> 
   <script src="app.js"></script>
</body>
</html>