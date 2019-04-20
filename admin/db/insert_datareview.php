<?php include("../config.php"); ?>
<?php

    if(isset($_POST['submit'])){
        
        $jk = $_POST['select_jk'];
        
        $tk = $_POST['select_tk'];
        $harga_kuliner = $_POST['harga_kuliner'];
        $nama_kuliner = $_POST['nama_kuliner'];
        $review = $_POST['review'];
        $sql = "INSERT INTO menu_kuliner (id_jk, id_tk, nama_menu, harga, review) VALUES ('".$jk."', '".$tk."', '".$nama_kuliner."', '".$harga_kuliner."', '".$review."')";
        $query = mysqli_query($db, $sql);
        if( $query ) {
            header('Location: ../index.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: ../index.php?status=gagal');
        }
        
    }
?>