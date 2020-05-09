<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Page</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="statics/css/floating-labels.css" rel="stylesheet">
</head>
<body>

<form class="form-signin" method="post" action="includes/signup.inc.php">
      <div class="text-center mb-4">
        <img class="mb-4" src="statics/img/logoBem.png" alt="" width="30%" height="30%">
        <h1 class="h3 mb-3 font-weight-normal">Welcome to the Admin Page</h1>
        <p>"Bersama Ciptakan Karsa dalam Semangat Reparasi Cita untuk Udayana dan Indonesia"</p>
      </div>
        
        <!-- PHP Error Message -->
      <?php 
        if (isset($_GET['error'])) {
          if ($_GET['error'] == 'emptyfields') {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Tidak boleh kosong!</strong> Silahkan isi form dengan lengkap dan benar.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
          }elseif ($_GET['error'] == 'invalidmail') {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Email salah!</strong> Silahkan isi form dengan lengkap dan benar.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
          }elseif ($_GET['error'] == 'invalidmail') {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Email salah!</strong> Silahkan isi form dengan lengkap dan benar.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
          }elseif ($_GET['error'] == 'invaliduid') {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Username tidak sesuai!</strong> Silahkan isi form dengan lengkap dan benar.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
          }elseif ($_GET['error'] == 'passwordcheck') {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Password tidak sesuai!</strong> Silahkan isi form dengan lengkap dan benar.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
          }
        }
      
      
      
      ?>
    
      <div class="form-label-group">
        <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputUsername">Username</label>
      </div>
      <div class="form-label-group">
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputUsername">Email</label>
      </div>
      <div class="form-label-group">
        <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>
      <div class="form-label-group">
        <input type="password" name="pwd-repeat" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Re-enter Password</label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" name="signup-submit" type="submit">Sign up</button>
      <p class="mt-5 mb-3 text-muted text-center">RHH &copy; 2020-2021</p>
    </form>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
