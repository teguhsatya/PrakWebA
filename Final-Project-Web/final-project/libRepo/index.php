<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<?php include('assets/config/config.php') ?>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Repo</title>
    <!-- Importing Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Importing Bootstrap 4 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include('assets/navbar.php') ?>
    <div class="container">
    <?php if(isset($_SESSION['namaUser'])){?>
        <?php 
            if ($_SESSION['userLevel'] == 'user') {
                include('sidebar-user.php');
            }elseif ($_SESSION['userLevel'] == 'admin') {
                include('sidebar-admin.php');
            }else{
                include('sidebar-superadmin.php');
            }
            ?>
    <?php } else {
        header("Location: pages/signin.php");
    }?>
       
    </div>
    <script>
        $(document).ready(function() {
            $('.view_data').click(function() {
                var bId = $(this).attr("id");
                $.ajax({
                    url: "select.php",
                    method: "post",
                    data: {
                        bId: bId
                    },
                    success: function(data) {
                        $('#book_detail').html(data);
                        $('#detailModal').modal("show");
                    },
                    error: function(data) {
                        console.log('error');
                    }

                });


            });
        });
    </script>

</body>

</html>