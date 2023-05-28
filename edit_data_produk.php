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

	<?php
    include('koneksi.php');
    $id = $_GET['id'];

    $data_produk =mysqli_query($koneksi, "SELECT * FROM produk WHERE id = '$id' ");

    while($produk = mysqli_fetch_array($data_produk)){
		$nama_produk = $produk['nama_produk'];
		$id_kategori = $produk['id_kategori'];
		$stok = $produk['stok'];
		$harga_sewa = $produk['harga_sewa'];
		$file_gambar = $produk['file_gambar'];
    }

    ?>

    <div class="container">
        <center>
        <table>
            <tr>
                <td><h1 class="text-center" style="padding-top: 40px; padding-bottom: 10px;">EDIT DATA PRODUK</h1></td>
            </tr>
        </table>
        </center>

        <a href="data_produk.php"><button type="button" class="btn btn-dark">Kembali ke Data Produk</button></a>
        <br><br>
        <form action="edit_data_proses.php?id=<?php echo $produk['id']; ?>" method="post">
		<div class="form-group">
                <label>Nama Produk</label>
				<input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="text" name="nama_produk" value="<?php echo $nama_produk; ?>" class="form-control" placeholder="Masukkan Nama Produk">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select name="id_kategori" class="form-control">
                    <option value="1" <?= ($id_kategori == '1' ? 'selected' : ''); ?>>Kamera</option>
                    <option value="2" <?= ($id_kategori == '2' ? 'selected' : ''); ?>>Lensa</option>
                </select>
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stok" value="<?php echo $stok; ?>" class="form-control" placeholder="Masukkan Stok Yang Tersedia">
            </div>
            <div class="form-group">
                <label>Harga Sewa</label>
                <input type="number" name="harga_sewa" value="<?php echo $harga_sewa; ?>" class="form-control" placeholder="Masukkan Harga Sewa">
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="file_gambar" class="form-control">
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