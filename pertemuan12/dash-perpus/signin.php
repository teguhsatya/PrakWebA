<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="statics/css/floating-labels.css" rel="stylesheet">

</head>
<body>

<form class="form-signin" method="POST" action="includes/login.inc.php">
      <div class="text-center mb-4">
      
        <h1 class="h3 mb-3 font-weight-normal">Welcome to the Admin Page</h1>
        <p>"informasi perpustakaan"</p>
      </div>

      <!-- PHP Error Message -->
      <?php 
          if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Tidak boleh kosong!</strong> Silahkan isi form dengan lengkap dan benar.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
            }elseif ($_GET['error'] == "wrongpwd") {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Username/email/password !</strong> Silahkan isi form dengan lengkap dan benar.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
            }elseif ($_GET['error'] == "nouser") {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>User tidak ditemukan !</strong> Silahkan isi form dengan lengkap dan benar.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
            }
          }
      ?>


      <div class="form-label-group">
        <input type="text" name="mailuid" id="inputUsername" class="form-control" placeholder="Username/Email" required autofocus>
        <label for="inputUsername">Username/Email</label>
      </div>

      <div class="form-label-group">
        <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" name="signin" type="submit" value="signin">Sign in</button>
    </form>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>