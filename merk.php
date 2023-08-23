<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Merk</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Navbar Search -->
				<li class="nav-item">
					<a class="nav-link" data-widget="navbar-search" href="#" role="button">
						<i class="fas fa-search"></i>
					</a>
					<div class="navbar-search-block">
						<form class="form-inline">
							<div class="input-group input-group-sm">
								<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
								<div class="input-group-append">
									<button class="btn btn-navbar" type="submit">
										<i class="fas fa-search"></i>
									</button>
									<button class="btn btn-navbar" type="button" data-widget="navbar-search">
										<i class="fas fa-times"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index3.html" class="brand-link">
				<img src="assets/dist/img/logo-ngawi.png" alt="SIPeBa Logo" class="brand-image img-circle elevation-3" style="">
				<span class="brand-text font-weight-light">SIPeBa</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          	with font-awesome or any other icon font library -->
			          	<li class="nav-item menu-open">
			          		<a href="index.php" class="nav-link active">
			          			<i class="nav-icon fas fa-tachometer-alt"></i>
			          			<p>
			          				Dashboard
			          			</p>
			          		</a>
			          	</li>

			          	<li class="nav-header">MASTER</li>
			          	<li class="nav-item">
			          		<a href="#" class="nav-link">
			          			<i class="nav-icon fas fa-copy"></i>
			          			<p>
			          				Data Master
			          				<i class="fas fa-angle-left right"></i>
			          				<span class="badge badge-info right"></span>
			          			</p>
			          		</a>
			          		<ul class="nav nav-treeview">
			          			<li class="nav-item">
			          				<a href="barang.php" class="nav-link">
			          					<i class="far fa-circle nav-icon"></i>
			          					<p>Data Barang</p>
			          				</a>
			          			</li>
			          			<li class="nav-item">
			          				<a href="jenis.php" class="nav-link">
			          					<i class="far fa-circle nav-icon"></i>
			          					<p>Jenis Barang</p>
			          				</a>
			          			</li>
			          			<li class="nav-item">
			          				<a href="satuan.php" class="nav-link">
			          					<i class="far fa-circle nav-icon"></i>
			          					<p>Satuan Barang</p>
			          				</a>
			          			</li>
			          			<li class="nav-item">
			          				<a href="merk.php" class="nav-link">
			          					<i class="far fa-circle nav-icon"></i>
			          					<p>Merk Barang</p>
			          				</a>
			          			</li>
			          			<li class="nav-item">
			          				<a href="stok.php" class="nav-link">
			          					<i class="far fa-circle nav-icon"></i>
			          					<p>Stok Barang</p>
			          				</a>
			          			</li>
			          			<li class="nav-item">
			          				<a href="pemberi.php" class="nav-link">
			          					<i class="far fa-circle nav-icon"></i>
			          					<p>Pemberi Barang</p>
			          				</a>
			          			</li>
			          			<li class="nav-item">
			          				<a href="penerima.php" class="nav-link">
			          					<i class="far fa-circle nav-icon"></i>
			          					<p>Penerima Barang</p>
			          				</a>
			          			</li>
			          		</ul>
			          	</li>

			          	<li class="nav-header">TRANSAKSI</li>
			          	<li class="nav-item">
			          		<a href="masuk.php" class="nav-link">
			          			<i class="nav-icon far fa-calendar-alt"></i>
			          			<p>
			          				Data Barang Masuk
			          				<span class="badge badge-info right"></span>
			          			</p>
			          		</a>
			          	</li>
			          	<li class="nav-item">
			          		<a href="keluar.php" class="nav-link">
			          			<i class="nav-icon far fa-image"></i>
			          			<p>
			          				Data Barang Keluar
			          			</p>
			          		</a>
			          	</li>
			          	
			          	<li class="nav-header">LAPORAN</li>
			          	<li class="nav-item">
			          		<a href="laporanStok.php" class="nav-link">
			          			<i class="nav-icon fas fa-ellipsis-h"></i>
			          			<p>Laporan Stok</p>
			          		</a>
			          	</li>
			          	<li class="nav-item">
			          		<a href="laporanMasuk.php" class="nav-link">
			          			<i class="nav-icon fas fa-file"></i>
			          			<p>Laporan Barang Masuk</p>
			          		</a>
			          	</li>
			          	<li class="nav-item">
			          		<a href="laporanKeluar.php" class="nav-link">
			          			<i class="fas fa-circle nav-icon"></i>
			          			<p>Laporan Barang Keluar</p>
			          		</a>
			          	</li>

			          	<li class="nav-header">User</li>
			          	<li class="nav-item">
			          		<a href="user.php" class="nav-link">
			          			<i class="fas fa-circle nav-icon"></i>
			          			<p>Manajemen User</p>
			          		</a>
			          	</li>
			        </ul>
			    </nav>

          	<!-- /.sidebar-menu -->
          	</div>
          <!-- /.sidebar -->
      	</aside>

      	<!-- Content Wrapper. Contains page content -->
      	<div class="content-wrapper">
      		<!-- Content Header (Page header) -->
      		<section class="content-header">

      			<div class="container-fluid">
      				<div class="row mb-2">
      					<div class="col-sm-6">
      						<h1 class="m-0">Merk Barang</h1>
      					</div><!-- /.col -->
      					<div class="col-sm-6">
      					</div>
      					<!-- /.col -->
      				</div><!-- /.row -->
      			</div><!-- /.container-fluid -->	
      		</section>

      	<!-- Main content -->
	      	<section class="content">
	      		<div class="container-fluid">

	      			<div class="row">
	      				<div class="col-12">
	      					<div class="card">
	      						<div class="card-header">
	      							<h3 class="card-title">Data Merk Barang</h3>
	      						</div>
	      						<!-- /.card-header -->
	      						<div class="card-body">
	      							<table id="example1" class="table table-bordered table-striped">
	      								<thead>
	      									<tr>
	      										<th>Rendering engine</th>
	      										<th>Browser</th>
	      										<th>Platform(s)</th>
	      										<th>Engine version</th>
	      										<th>CSS grade</th>
	      									</tr>
	      								</thead>
	      								<tbody>
	      									
	      									<tr>
	      										<td>Other browsers</td>
	      										<td>All others</td>
	      										<td>3</td>
	      										<td>4</td>
	      										<td>t6</td>
	      									</tr>
	      								</tbody>
	      							</table>
	      						</div>
	      						<!-- /.card-body -->
	      					</div>
	      					<!-- /.card -->
	      				</div>
	      				<!-- /.col 12 -->
	      			</div>
	      			<!-- /.row -->		
	      		</div><!-- /.container-fluid -->
	      	</section>
      		<!-- /.content -->
  		</div>
  		<!-- /.content-wrapper -->
	  	<footer class="main-footer">
	  		<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
	  		All rights reserved.
	  		<div class="float-right d-none d-sm-inline-block">
	  			<b>Version</b> 3.2.0
	  		</div>
	  	</footer>

	  	<!-- Control Sidebar -->
	  	<aside class="control-sidebar control-sidebar-dark">
	  		<!-- Control sidebar content goes here -->
	  	</aside>
	  	<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- ChartJS -->
	<script src="assets/plugins/chart.js/Chart.min.js"></script>
	<!-- Sparkline -->
	<script src="assets/plugins/sparklines/sparkline.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="assets/plugins/moment/moment.min.js"></script>
	<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Summernote -->
	<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="assets/dist/js/adminlte.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="assets/assets/dist/js/demo.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="assets/dist/js/pages/dashboard.js"></script>
	<!-- DataTables  & Plugins -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="assets/plugins/jszip/jszip.min.js"></script>
	<script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
	<script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
	<script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
	<!-- Page specific script -->
	<script>
		$(function () {
			$("#example1").DataTable({
				"responsive": true, "lengthChange": false, "autoWidth": false,
				"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
			}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"responsive": true,
			});
		});
	</script>
</body>
</html>
