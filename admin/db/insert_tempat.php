<?php include("../config.php"); ?>
<?php

    if(isset($_POST['submit'])){
        
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $sql = "INSERT INTO tempat_kuliner (nama, alamat) VALUES ('".$nama."', '".$alamat."')";
        $query = mysqli_query($db, $sql);
        if( $query ) {
            header('Location: ../tempat_kuliner.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: ../tempat_kuliner.php?status=gagal');
        }
        
    }
?>