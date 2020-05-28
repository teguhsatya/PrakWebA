<?php

 if(isset($_POST["bId"]))  
 {  
      $output = '';  
      $avail = '';
      $connect = mysqli_connect("localhost", "root", "", "libRepo");  
    //   $query = "SELECT * FROM books WHERE bId = '".$_POST["bId"]."'";
    $query = "SELECT * FROM books, book_genre WHERE books.bGen=book_genre.bGen AND books.bId = '".$_POST["bId"]."' ORDER BY bId DESC";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
      
      while($row = mysqli_fetch_array($result))  
      {  ?>
      <?php
      if ($row['bStat'] == 0) {
          $avail = '<span class="badge badge-success">Tersedia</span>';
      }else {
          $avail = '<span class="badge badge-danger">Tidak Tersedia</span>';
      }
           $output .= '  
                <tr>  
                     <td width="30%"><label>Judul</label></td>
                     <td width="70%">'.$row["bTit"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Penulis</label></td>  
                     <td width="70%">'.$row["bAuth"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Penerbit</label></td>  
                     <td width="70%">'.$row["bPub"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Stock</label></td>  
                     <td width="70%">'.$row["bStc"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Genre</label></td>  
                     <td width="70%">'.$row["bGenName"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Nomor Rak</label></td>  
                     <td width="70%">'.$row["bGenNum"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Ketersediaan</label></td>  
                     <td width="70%">'.$avail.'</td>  
                </tr>    
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;
 }
 ?>