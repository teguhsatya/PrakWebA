<?php
                include('assets/searchbar.php');
                if (isset($_GET['cari'])) {
                    $cari = $_GET['cari'];
                    $query = "SELECT * FROM books, book_genre WHERE books.bGen=book_genre.bGen AND books.bTit LIKE '%" . $cari . "%' ORDER BY bId DESC";
                    $sql = mysqli_query($conn, $query);
                } else {
                    $query = 'SELECT * FROM books, book_genre WHERE books.bGen=book_genre.bGen ORDER BY bId DESC';
                    $sql = mysqli_query($conn, $query);
                }
                while ($row = mysqli_fetch_array($sql)) {  ?>
                    <div class="card mt-1 mb-1 mr-1 my-card">
                        <div class="card-body">
                            <h5 class="h3"><?php echo $row['bTit'] ?></h5>
                            <p class="small">Penulis : <?php echo $row['bAuth'] ?></p>
                            <input type="button" name="view" value="view" id="<?php echo $row["bId"]; ?>" class="btn btn-info btn-xs view_data" /></td>
                            <!-- Modal -->
                            <div class="modal" tabindex="-1" role="dialog" id="detailModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Detail Buku</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" id="book_detail"></div>
                                        <div class="modal-footer">
                                            <a href="#list-profiles" id="list-profile" type="button" class="btn btn-primary">Pinjam Buku</a>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php }

                ?>
                <script>
                    $("#list-profile").click(function () { 
                        window.location.href = "sidebar-user.php";
                        
                    });
                </script>