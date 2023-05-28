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
<!-- jQuery -->
<script type="text/javascript" 
          src="https://code.jquery.com/jquery-3.5.1.js">
  </script>
  
  <!-- DataTables CSS -->
  <link rel="stylesheet"
        href=
"https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
  
  <!-- DataTables JS -->
  <script src=
"https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
  </script>

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
                <td><h1 class="text-center" style="padding-top: 40px; padding-bottom: 10px;">Data Transaksi</h1></td>
            </tr>
        </table>
        </center>
        <br>

        <div class="row">
            <div class="col">
                <a href="index-admin.php"><button type="button" class="btn btn-dark">Kembali ke Home Admin</button></a>
            </div>
            <div class="col text-right">
                <a href="tambah_transaksi.php" class="btn btn-primary">Tambah Data Transaksi</a>
            </div>
        </div>

        <br><br>

        <table id="MyTable" class="table table-striped table-bordered text-center">
            <thead>
				<tr>			
					<th class="align-middle">No</th>
					<th>Nama Penyewa</th>
					<th class="align-middle">Nama Produk</th>
					<th>Tanggal Pinjam</th>
					<th>Tanggal Kembali</th>
					<th class="align-middle">Jaminan</th>
					<th class="align-middle">Pembayaran</th>
					<th class="align-middle">Aksi</th>
				</tr>
			</thead>
            <?php
            include('koneksi.php');

            $no=0;
            $query = mysqli_query($koneksi, "SELECT * FROM transaksi; ");
            while ($data = mysqli_fetch_array($query)){
            $no++

            ?>
			<tbody>
				<tr>				
					<td class="align-middle"><?php echo $no?></td>
					<td class="align-middle"><?php echo $data['nama_penyewa']?></td>
					<td class="align-middle" style="width: 150px;"><?php echo $data['nama_produk']?></td>
					<td class="align-middle"><?php echo $data['tgl_pinjam']?></td>
					<td class="align-middle"><?php echo $data['tgl_kembali']?></td>
					<td class="align-middle"><?php echo $data['jaminan']?></td>
					<td class="align-middle"><?php echo $data['pembayaran']?></td>
					<td style="width: 150px;">
                        <a href="edit_transaksi.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete_transaksi.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
				</tr>
			</tbody>
            <?php } ?>
		</table>
    </div>

    <!-- copyright section start -->
    <div class="copyright_section-2">
        <div class="container">
            <p class="copyright_text-2">Copyright 2023 All Right Reserved By Nadif Rayhan</p>
        </div>
    </div>
    <!-- copyright section end -->
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$('#MyTable').DataTable();
	});
</script>
</html>