<?php
    include('koneksi.php');

    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "DELETE FROM produk WHERE id = '$id' ");
   
    header("Location: data_produk.php");
?>