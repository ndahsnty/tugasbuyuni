<?php include("layouts_top.php"); ?>
<style>


.rating {
  width: 265px;
  margin: 200px auto 0;
  position: relative;
  direction: rtl;
}
.rating input {
  position: absolute;
  width:40px;
  height: 55px;
  cursor: pointer;
  -webkit-transform: translateX(25px);
  transform: translateX(25px);
  opacity: 0;
  z-index: 5;
}
.rating input:nth-of-type(4):checked ~ .emo:after, .rating input:nth-of-type(4):hover ~ .emo:after, .rating input:nth-of-type(3):checked ~ .emo:after, .rating input:nth-of-type(3):hover ~ .emo:after {
  content: '\f11a';
}
.rating input:nth-of-type(1):checked ~ .emo:after, .rating input:nth-of-type(1):hover ~ .emo:after, .rating input:nth-of-type(2):checked ~ .emo:after, .rating input:nth-of-type(2):hover ~ .emo:after {
  content: '\f118';
}
.rating input:nth-of-type(1) {
  right: 50px;
}
.rating input:nth-of-type(2) {
  right: 100px;
}
.rating input:nth-of-type(3) {
  right: 150px;
}
.rating input:nth-of-type(4) {
  right: 200px;
}
.rating input:nth-of-type(5) {
  right: 250px;
}
.rating input:nth-of-type(6) {
  right: 300px;
}
.rating input:checked ~ .star:after, .rating input:hover ~ .star:after {
  content: '\f005';
}
.rating .star {
  display: inline-block;
  font-family: FontAwesome;
  font-size: 42px;
  color: #FBB202;
  cursor: pointer;
  margin: 3px;
}
.rating .star:after {
  content: '\f006';
}
.rating .star:hover ~ .star:after, .rating .star:hover:after {
  content: '\f005';
}

</style>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="card">
                                    <div class="card-header">Tambah Data</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Review Kuliner</h3>
                                        </div>
                                        <hr>
                                        <form action="db/insert_datareview.php" method="post" id="myform">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Jenis Kuliner</label>
                                                <select name="select_jk" id="select-jk" class="form-control" required>
                                                    <?php
                                                        $sql = "SELECT * FROM jenis_kuliner";
                                                        $query = mysqli_query($db, $sql);
                                                        while($kuliner = mysqli_fetch_array($query)){
                                                            echo "<option value='".$kuliner['id']."'>".$kuliner['nama']."</option>";
                                                            
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Tempat Kuliner</label>
                                                <select name="select_tk" id="select-tk" class="form-control" required>
                                                    <?php
                                                        $sql = "SELECT * FROM tempat_kuliner";
                                                        $query = mysqli_query($db, $sql);
                                                        while($kuliner = mysqli_fetch_array($query)){
                                                            echo "<option value='".$kuliner['id']."'>".$kuliner['nama']."</option>";
                                                            
                                                        }
                                                    ?>
                                                </select>
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Nama Kuliner</label>
                                                <input id="cc-pament" name="nama_kuliner" type="text" class="form-control" value="" required> 
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Harga Kuliner</label>
                                                <input id="cc-pament" name="harga_kuliner" type="text" class="form-control" value="" data-validation="number" required>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Review</label>
                                                <textarea name="review" id="textarea-input" rows="9" placeholder="" class="form-control" required></textarea>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Review</label>
                                                <div class="rating">
                                                    <input type="radio" name="star" value="1"/><span class="star"> </span>
                                                    <input type="radio" name="star" value="2"/><span class="star"> </span>
                                                    <input type="radio" name="star" value="3"/><span class="star"> </span>
                                                    <input type="radio" name="star" value="4"/><span class="star"> </span>
                                                    <input type="radio" name="star" value="5"/><span class="star"> </span>
                                                </div>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div>
                                                <button name="submit" id="button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <span id="payment-button-amount">Submit</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
    <script src="vendor/select2/select2.min.js"></script>
    <script src="js/jqueryui.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="js/datatable.js"></script>
    <script src="js/validasi.js"></script>
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
  <script>
  $("#myform").validate({
  submitHandler: function(form) {
    // do other things for a valid form
    // form.submit();
  }
});
  </script>

</body>

</html>
<!-- end document-->
