<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
  
<body>


	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
		<img
        src="https://www.pssi.org/files/logo-pssi.png"
        height="50"
        alt="MDB Logo"
        loading="lazy"
      />
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">Home</a>
            <a class="navbar-brand" href="<?= base_url('data/insertData/') ?>">Add Student</a>
            <a class="navbar-brand" href="<?= base_url('login') ?>">Log Out</a>
            <a class="navbar-brand" href="<?= base_url('report') ?>">Report</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">

				</ul>
			</div>
		</div>
	</nav>

	<header class="jumbotron jumbotron-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="h1">DATA INPUT MAHASISWA</h1>
				</div>
			</div>
		</div>
	</header>

    <!-- <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> 
    <link rel ="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap4.min.css">  -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script> -->
</head>
<body>

<!-- <button class="" tabindex="" aria-controls="" type="">
    <span>
        COPY
        </span>
</button>
<button class="" tabindex="" aria-controls="" type="">
    <span>
        CSV
        </span>
</button>
<button class="" tabindex="" aria-controls="" type="">
    <span>
        EXCEL
        </span>
</button>
<button class="" tabindex="" aria-controls="" type="">
    <span>
        PDF
        </span>
</button>
<button class="" tabindex="" aria-controls="" type="">
    <span>
        PRINT
        </span>
</button> -->
    <!-- <a href="data/insertData/">Tambah Data </a> -->

    <!-- <script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script> -->

<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script> -->


    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Fakultas</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach ($hasil as $row) {

            
        
        ?>
        <tr>
            <td><?php echo $row->nim; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->fakultas; ?></td>
            <td><?php echo $row->alamat; ?></td>
            <td> <a href="data/editData/<?php echo $row->nim; ?>">Edit </a>
                 <a href="data/hapusData/<?php echo $row->nim; ?>">Hapus </a>
            </td>
        </tr>
        <?php
            }
        ?>
</tbody>
</table>