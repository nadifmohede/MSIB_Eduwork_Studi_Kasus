<?php
    include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Action! Camera Rental</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
    .copyright_section-2 {
    width: 100%;
    float: left;
    background-color: #000000;
    height: auto;
    }

    .copyright_text-2 {
    width: 100%;
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    margin-left: 0px;
    }
</style>
</head>
<body>
	<!--top header section start -->
	<div class="top_header_section">
		<div class="container">
			<div class="top_section">
				<div class="row">
					<div class="col-sm-6">
						<div class="call_taital">
							<ul>
								<li><a href="#"><img src="images/call-icon.png"></a></li>
								<li><a href="#">+6282233550928</a></li>
								<li class="mail"><a href="#"><img src="images/mail-icon.png"></a></li>
								<li><a href="#">actionrental@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="top_taital">Best Camera Rental in Town !</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- top header section start -->
	<!-- header section start -->
	<div class="header_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-lg-3">
					<div class="logo"><a href="index.html"><img src="images/main-logo.png"></a></div>
				</div>
				<div class="col-sm-5">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        	<ul>
                                <li><a class="nav-item nav-link" href="index.php">Home</a></li>
                                <li>|</li>
                                <li><a class="nav-item nav-link" href="about.php">About</a></li>
                                <li>|</li>
                                <li><a class="nav-item nav-link" href="produk.php">Product</a></li>
                                <li>|</li>
                                <li><a class="nav-item nav-link" href="contact.php">Contact Us</a></li>
                           </ul>
                        </div>
                    </div>
                    </nav>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="search_main">
						<div class="left_main">
							<form class="form-inline my-2 my-lg-0">
							     <input class="submit_bt" placeholder="Search"></input>
						    </form>
						</div>
						<div class="right_main">
							<div class="login_text"><a href="index-admin.php">Admin</a></div>
						</div>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- header section end -->

    <div class="container">
        <center>
        <table>
            <tr>
                <td><h1 class="text-center" style="padding-top: 40px; padding-bottom: 10px;">TAMBAH DATA TRANSAKSI</h1></td>
            </tr>
        </table>
        </center>

        <a href="transaksi.php"><button type="button" class="btn btn-dark">Kembali ke Transaksi</button></a>
        <br><br>
        <form action="tambah_transaksi_proses.php" method="post">
            <div class="form-group">
                <label>ID Penyewa</label>
                <select name="id_penyewa" class="form-control">
                    <option disabled selected>--PILIH SALAH SATU--</option>
                    <?php 
                    $sql=mysqli_query($koneksi, "SELECT id, nama_penyewa FROM penyewa ORDER BY id ASC");
                    while ($data=mysqli_fetch_array($sql)) {
                    ?>
                    <option value="<?=$data['id']?>"><?=$data['id']." (Nama Penyewa = ".$data['nama_penyewa'].")" ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Nama Penyewa</label>
                <select name="nama_penyewa" class="form-control">
                    <option disabled selected>--PILIH YANG SESUAI DENGAN ID YANG TELAH DIPILIH DI ATAS--</option>
                    <?php 
                    $sql=mysqli_query($koneksi, "SELECT id, nama_penyewa FROM penyewa ORDER BY id ASC");
                    while ($data=mysqli_fetch_array($sql)) {
                    ?>
                    <option value="<?=$data['nama_penyewa']?>"><?=$data['nama_penyewa']." (ID Penyewa = ".$data['id'].")"?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>ID Produk</label>
                <select name="id_produk" class="form-control">
                    <option disabled selected>--PILIH SALAH SATU--</option>
                    <?php 
                    $sql=mysqli_query($koneksi, "SELECT id, nama_produk FROM produk ORDER BY id ASC");
                    while ($data=mysqli_fetch_array($sql)) {
                    ?>
                    <option value="<?=$data['id']?>"><?=$data['id']." (Nama Produk = ".$data['nama_produk'].")" ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Nama Produk</label>
                <select name="nama_produk" class="form-control">
                    <option disabled selected>--PILIH YANG SESUAI DENGAN ID YANG TELAH DIPILIH DI ATAS--</option>
                    <?php 
                    $sql=mysqli_query($koneksi, "SELECT id, nama_produk FROM produk ORDER BY id_kategori ASC");
                    while ($data=mysqli_fetch_array($sql)) {
                    ?>
                    <option value="<?=$data['nama_produk']?>"><?=$data['nama_produk']." (ID Produk = ".$data['id'].")"?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal Pinjam</label>
                <input type="text" name="tgl_pinjam" id="date1" class="form-control" placeholder="Masukkan Tanggal Pinjam Barang">
            </div>
            <div class="form-group">
                <label>Tanggal Kembali</label>
                <input type="text" name="tgl_kembali" id="date2" class="form-control" placeholder="Masukkan Tanggal Kembali Barang">
            </div>
            <div class="form-group">
                <label>Jaminan</label>
                <select name="jaminan" class="form-control">
                    <option disabled selected>--PILIH SALAH SATU--</option>
                    <option value="ktp">KTP</option>
                    <option value="sim">SIM</option>
                    <option value="kk">Kartu Keluarga</option>
                    <option value="passport">Passport</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pembayaran</label>
                <select name="pembayaran" class="form-control">
                    <option disabled selected>--PILIH SALAH SATU--</option>
                    <option value="tunai">Tunai</option>
                    <option value="transfer">Transfer Bank</option>
                    <option value="edc">Mesin EDC</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <!-- copyright section start -->
    <div class="copyright_section-2">
        <div class="container">
            <p class="copyright_text-2">Copyright 2023 All Right Reserved By Nadif Rayhan</p>
        </div>
    </div>
    <!-- copyright section end -->
</body>
<script>
$( function() {
  $( "#date1" ).datepicker({
    dateFormat: "yy-mm-dd"
  });
  $( "#date2" ).datepicker({
    dateFormat: "yy-mm-dd"
  });
} );
</script>

</html>