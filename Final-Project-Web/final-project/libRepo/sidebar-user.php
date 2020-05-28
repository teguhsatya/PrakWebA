<?php $sessionid = $_SESSION['id'] ?>
<!-- Importing Bootstrap 4 CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Importing Bootstrap 4 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="row mt-2">
    <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Database buku</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Buku yang dipinjam</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Notifikasi</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Atur Profile</a>
        </div>
    </div>
    <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
            <div class="alert alert-primary" role="alert">
                <?php echo "Selamat datang" . " " . $_SESSION['namaUser'] ?>
            </div>
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <?php include('cards.php') ?>
            </div>
            <div class="tab-pane fade" id="list-profile" name="list-profiles" role="tabpanel" aria-labelledby="list-profile-list">bla2</div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">bla3</div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                <?php include_once('assets/config/config.php');
                $sql = "SELECT uNama, uName, uMail, uLive, uTelp FROM users WHERE uid = $sessionid";
                $query = mysqli_query($conn, $sql);
                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) { ?>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Nama</span>
                            </div>
                            <input type="text" readonly class="form-control" name="nama" id="nama"
                            value="<?php echo $row['uNama'] ?>" aria-describedby="basic-addon1"> 
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Username</span>
                            </div>
                            <input type="text" readonly class="form-control" name="username" id="username"
                            value="<?php echo $row['uName'] ?>" aria-describedby="basic-addon1"> 
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Email</span>
                            </div>
                            <input type="text" readonly class="form-control"  name="email" id="email"
                            value="<?php echo $row['uMail'] ?>" aria-describedby="basic-addon1"> 
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Alamat</span>
                            </div>
                            <input type="text" readonly class="form-control" name="live" id="live"
                            value="<?php echo $row['uLive'] ?>" aria-describedby="basic-addon1"> 
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Nomor Telepon</span>
                            </div>
                            <input type="text" readonly class="form-control"  name="notelp" id="notelp"
                            value="<?php echo $row['uTelp'] ?>" aria-describedby="basic-addon1"> 
                        </div>
                        <input type="button" name="edit" value="Edit" id="<?php echo $row['uId'] ?>" class="btn btn-warning edit_data">


                <?php  }
                } else {
                    echo "Data tidak ditemukan";
                } ?>

            </div>
        </div>
    </div>
</div>

