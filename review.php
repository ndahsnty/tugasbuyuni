<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>DAPUR KULINER | HOME</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">   
     <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet"> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->

    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- LOGO -->       

           <!--  Text based logo  -->
          <!-- <a class="navbar-brand" href="index.html">Osteria<span>X</span></a>  -->

		      <!--  Image based logo  -->
          <a class="navbar-brand" href="index.html"><img src="assets/img/logo-text.jpg" alt="Logo img"></a> 
         

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="index.html">BERANDA</a></li>
            <li><a href="#mu-restaurant-menu">MENU</a></li>
            <li><a href="#mu-chef">RUMAH MAKAN</a></li>
            <li><a href="#mu-gallery">GALERI</a></li>
            <li><a href="#mu-about-us">TENTANG KAMI</a></li>
            <li><a href="#mu-contact">KONTAK</a></li> 
            <li><a href="login.html">LOGIN</a></li> 
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section -->
  <!-- Start About us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">

            <div class="mu-title">
              <h2>UPDATE REVIEW</h2>
            </div>

            <div class="row">
              <div class="col-md-6">
               <div class="mu-about-us-left">     
                <img src="assets/img/logo.jpg" alt="img">           
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-about-us-right">
                    <div>
                        <label for="tgl">Tanggal Kunjungan</label>
                        <div class="alert alert-danger alert-tgl">
                            <strong>Maaf, </strong>tanggal kunjungan tidak boleh kosong, ya!
                        </div>
                        <input type="date" class="form-control tgl" id="tgl" placeholder="Tanggal">

                        <label for="alamat">Alamat Rumah Makan</label>
                        <div class="alert alert-danger alert-alamat">
                            <strong>Maaf, </strong>alamat tidak boleh kosong, ya!
                        </div>
                        <input type="text" class="form-control alamat" id="alamat" placeholder="Alamat">
                        
                        <label for="jam-buka">Jam Buka</label>
                        <div class="alert alert-danger alert-jam-buka">
                            <strong>Maaf, </strong>jam buka tidak boleh kosong, ya!
                        </div>
                        <input type="time" class="form-control jam-buka" id="jam_buka" placeholder="Jam Buka">
                        
                        <label for="jam-tutup">Jam Tutup</label>
                        <div class="alert alert-danger alert-jam-tutup">
                            <strong>Maaf, </strong>jam tutup tidak boleh kosong, ya!
                        </div>
                        <input type="time" class="form-control jam-tutup" id="jam_tutup" placeholder="Jam Tutup">

                        <label for="menu">Nama Menu</label>
                        <div class="alert alert-danger alert-menu">
                            <strong>Maaf, </strong>nama menu tidak boleh kosong, ya!
                        </div>
                        <input type="text" class="form-control menu" id="menu" placeholder="Nama Meny">
                        
                        <label for="harga">Harga</label>
                        <div class="alert alert-danger alert-harga">
                            <strong>Maaf, </strong>harga tidak boleh kosong, ya!
                        </div>
                        <input type="text" class="form-control harga" id="harga" placeholder="Harga Makanan">

                        <label for="ket">Keterangan Makanan</label>
                        <div class="alert alert-danger alert-ket">
                            <strong>Maaf, </strong>keterangan makanan tidak boleh kosong, ya!
                        </div>
                        <input type="text" class="form-control ket" id="ket" placeholder="Keterangan Makanan">

                        <label for="jam">Review</label>
                        <div class="alert alert-danger alert-review">
                            <strong>Maaf, </strong>review makanan tidak boleh kosong, ya!
                        </div>
                        <input type="text" class="form-control review" id="review" placeholder="Review Makanan">
                        
                        <label for="rating">Rating</label>
                        <div class="alert alert-danger alert-rating">
                            <strong>Maaf, </strong>rating tidak boleh kosong, ya!
                        </div>
                        <br>
                        <input type="hidden" id="rating" name="rating" value="">
                        <button type="button" class="btnrating btn btn-default btn-lg" data-attr="1" id="rating-star-1">
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btnrating btn btn-default btn-lg" data-attr="2" id="rating-star-2">
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btnrating btn btn-default btn-lg" data-attr="3" id="rating-star-3">
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btnrating btn btn-default btn-lg" data-attr="4" id="rating-star-4">
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btnrating btn btn-default btn-lg" data-attr="5" id="rating-star-5">
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </button>

                        <br>
                        <label for="saran">Saran</label>
                        <div class="alert alert-danger alert-saran">
                            <strong>Maaf,</strong> pesan tidak boleh kosong, ya!.
                        </div>                        
                        <textarea class="form-control saran" id="saran" name="saran"  cols="30" rows="10" placeholder="Ajukkan Saran"></textarea>
                        <br>
                        <button onclick="sendData()" type="button" class="mu-send-btn">Posting</button>
                        
                        
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us --> 

  <!-- Start Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mu-footer-area">
           <div class="mu-footer-social">
            <a href="http:://www.facebook.com/indahnordianasanty"><span class="fa fa-facebook"></span></a>
          </div>
          <div class="mu-footer-copyright">
            <p>&copy; Copyright <a rel="nofollow" href="http://markups.io">markups.io</a>. All right reserved.</p>
          </div>         
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/simple-animated-counter.js"></script>
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="assets/js/app.js"></script>
 
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 
  <script src="assets/js/sweetalert.min.js"></script>  

  </body>
</html>
<script>
$(".alert-tgl").hide();
$(".alert-alamat").hide();
$(".alert-jam-buka").hide();
$(".alert-jam-tutup").hide();
$(".alert-menu").hide();
$(".alert-harga").hide();
$(".alert-ket").hide();
$(".alert-review").hide();
$(".alert-rating").hide();
$(".alert-saran").hide();



$(".btnrating").on('click',(function(e) {
	
	var previous_value = $("#rating").val();
	
	var selected_value = $(this).attr("data-attr");
	$("#rating").val(selected_value);
	
	$(".selected-rating").empty();
	$(".selected-rating").html(selected_value);
	
	for (i = 1; i <= selected_value; ++i) {
	$("#rating-star-"+i).toggleClass('btn-warning');
	$("#rating-star-"+i).toggleClass('btn-default');
	}
	
	for (ix = 1; ix <= previous_value; ++ix) {
	$("#rating-star-"+ix).toggleClass('btn-warning');
	$("#rating-star-"+ix).toggleClass('btn-default');
	}
	
}));

function sendData(){
    $submit = false;
    
    // alert($("#rating").val());
    $tgl = $("#tgl").val();
    if($tgl != ""){
        $(".alert-tgl").hide();
        $submit = true;
    }else{
        $(".alert-tgl").show();
        $submit = false;
    }

    $alamat = $("#alamat").val();
    if($alamat != ""){
        $(".alert-alamat").hide();
        $submit = true;
    }else{
        $(".alert-alamat").show();
        $submit = false;
    }

    $jam_buka = $("#jam_buka").val();
    if($jam_buka != ""){
        $(".alert-jam-buka").hide();
        $submit = true;
    }else{
        $(".alert-jam-buka").show();
        $submit = false;
    }

    $jam_tutup = $("#jam_buka").val();
    if($jam_tutup != ""){
        $(".alert-jam-tutup").hide();
        $submit = true;
    }else{
        $(".alert-jam-tutup").show();
        $submit = false;
    }

    $menu = $("#menu").val();
    if($jam_tutup != ""){
        $(".alert-menu").hide();
        $submit = true;
    }else{
        $(".alert-menu").show();
        $submit = false;
    }

    $harga = $("#harga").val();
    if($harga != ""){
        $(".alert-harga").hide();
        $submit = true;
        
    }else{
        $(".alert-harga").show();
        $submit = false;
    }

    $ket = $("#ket").val();
    if($ket != ""){
        $(".alert-ket").hide();
        $submit = true;
    }else{
        $(".alert-ket").show();
        $submit = false;
    }

    $review = $("#review").val();
    if($review != ""){
        $(".alert-review").hide();
        $submit = true;
    }else{
        $(".alert-review").show();
        $submit = false;
    }

    $rating = $("#rating").val();
    if($rating != ""){
        $(".alert-rating").hide();
        $submit = true;
    }else{
        $(".alert-rating").show();
        $submit = false;
    }

    $saran = $("#saran").val();
    if($saran != ""){
        $(".alert-saran").hide();
        $submit = true;
        
    }else{
        $(".alert-saran").show();
        $submit = false;
    }

    
    if($submit){
        swal({
        title: "Terima Kasih!",
        text: "Data tersimpan!",
        icon: "success",
        button: "Ok!",
      }).then((value) => {
        location.href = "index.html";
      });
    }

    
}
</script>
