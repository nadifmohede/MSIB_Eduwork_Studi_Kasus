<?php
    $nama_produk = $_POST['nama_produk'];
    $id_kategori = $_POST['id_kategori'];
    $stok = $_POST['stok'];
    $harga_sewa = $_POST['harga_sewa'];
    $file_gambar = $_POST['file_gambar'];

    include('koneksi.php');

    // Ambil Data yang Dikirim dari Form upload
    $nama_file = $_FILES['file_gambar']['name'];
    // Ambil url path folder
    $tmp_file = $_FILES['file_gambar']['tmp_name'];

    // Set path folder tempat menyimpan gambarnya
    $path = "images/".$file_gambar;
    $target_file = $path . basename($produk["name"]); // nama file
    move_uploaded_file($gambar["tmp_name"], $target_file); // simpan file ke folder

    $result = mysqli_query($koneksi, "INSERT INTO `produk` (`nama_produk`, `id_kategori`, `stok`, `harga_sewa`, `file_gambar`) VALUES ('$nama_produk','$id_kategori','$stok','$harga_sewa','$file_gambar'); ");

    header("Location: data_produk.php");
?>