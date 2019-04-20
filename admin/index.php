<?php include("layouts_top.php"); ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                
                                <h2 class="title-1 m-b-25">Review Makanan</h2>
                                <a href="tambahdata.php">
                                    <button type="button" class="btn btn-primary btn-sm">
                                        <i class="fa fa-plus"></i>&nbsp; Tambah Data
                                    </button>
                                </a>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table id="myTable" class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jenis Kuliner</th>
                                                <th>Tempat Kuliner</th>
                                                <th class="text-right">Nama Menu</th>
                                                <th class="text-right">Harga</th>
                                                <th class="text-right">Review</th>
                                                <th class="text-right">Rating</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sql = "SELECT * FROM view_kuliner";
                                                $query = mysqli_query($db, $sql);
                                                while($kuliner = mysqli_fetch_array($query)){
                                                    if($kuliner['rating'] > 3){
                                                        echo "<tr style='background-color: #66ff66;'>";
                                                    }else{
                                                        echo "<tr style='background-color: #ffb3b3;'>";
                                                    }
                                                    
                                                    echo "<td>".$kuliner['id']."</td>";
                                                    echo "<td>".$kuliner['Jenis Kuliner']."</td>";
                                                    echo "<td>".$kuliner['Tempat Kuliner']."</td>";
                                                    echo "<td>".$kuliner['nama_menu']."</td>";
                                                    echo "<td>".$kuliner['harga']."</td>";
                                                    echo "<td>".$kuliner['review']."</td>";
                                                    echo "<td>".$kuliner['rating']."</td>";
                                                    echo "</tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="js/jqueryui.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="js/datatable.js"></script>
    <script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
    </script>
    <script>
  $( function() {
    var availableTags = [
      <?php
        $sql = "SELECT * FROM view_kuliner";
        $query = mysqli_query($db, $sql);
        while($kuliner = mysqli_fetch_array($query)){
            echo "'".$kuliner['nama_menu']."',";
        }
    ?>
    ];
    $( "#tag" ).autocomplete({
      source: availableTags
    });
  } );
  </script>

</body>

</html>
<!-- end document-->
<?php if(isset($_GET['status'])): ?>

    <?php
        if($_GET['status'] == 'sukses'){
            echo '<script>swal("Berhasil!", "Data Telah Terinput!", "success");</script>';
        }
    ?>


<?php endif; ?>