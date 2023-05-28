<?php
    $id = $_POST['id'];
    $id_penyewa = $_POST['id_penyewa'];
    $nama_penyewa = $_POST['nama_penyewa'];
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $jaminan = $_POST['jaminan'];
    $pembayaran = $_POST['pembayaran'];

    include('koneksi.php');
    
    $result = mysqli_query($koneksi, "UPDATE transaksi SET id_penyewa = '$id_penyewa', nama_penyewa = '$nama_penyewa', id_produk = '$id_produk',
    nama_produk = '$nama_produk',tgl_pinjam = '$tgl_pinjam', tgl_kembali = '$tgl_kembali',jaminan = '$jaminan',pembayaran = '$pembayaran' 
    WHERE id = '$id'; ");
    
    header("location:transaksi.php");
?>