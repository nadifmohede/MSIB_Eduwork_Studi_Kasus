<?php
    include('koneksi.php');

    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "DELETE FROM transaksi WHERE id = '$id' ");
   
    header("Location: transaksi.php");
?>