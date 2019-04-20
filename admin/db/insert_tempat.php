<?php include("../config.php"); ?>
<?php

    if(isset($_POST['submit'])){
        
        $nama = $_POST['nama'];
        $rating = $_POST['star'];
        $alamat = $_POST['alamat'];
        $sql = "INSERT INTO tempat_kuliner (nama, alamat, rating) VALUES ('".$nama."', '".$alamat."','".$rating."')";
        $query = mysqli_query($db, $sql);
        if( $query ) {
            header('Location: ../tempat_kuliner.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: ../tempat_kuliner.php?status=gagal');
        }
        
    }
?>