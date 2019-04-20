<?php include("../config.php"); ?>
<?php

    if(isset($_POST['submit'])){
        
        $nama = $_POST['nama'];
        $sql = "INSERT INTO jenis_kuliner (nama) VALUES ('".$nama."')";
        $query = mysqli_query($db, $sql);
        if( $query ) {
            header('Location: ../jenis_kuliner.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: ../jenis_kuliner.php?status=gagal');
        }
        
    }
?>