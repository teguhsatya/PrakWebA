<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pertemuan 11</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
<?php if(isset($_SESSION['userUid'])): ?>
    <div class="container">
      <?php echo("Hello!") ?>
      <?php echo($_SESSION['userUid']); ?>
      <input type="text" id="myInput" onkeyup="searchData()" placeholder="Ketik nama buku disini...">
        <table id="myTable">
            <thead>
              <tr>
                <th>Judul Buku</th>
                <th onclick="sortColumn('bookYear')">Tahun</th>
              </tr>
            </thead>
            <tbody id="bookData"></tbody>
          </table>
    </div>
    <a href="../includes/logout.inc.php">Logout</a>
    
    <script src="sort.js"></script>
    <script src="search.js"></script>
    <?php endif ?>
</body>
</html>