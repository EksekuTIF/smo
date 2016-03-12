<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title> Theme Simple SMO </title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

	<style>
		body {
			padding-top: 150px;
		}
	</style>
</head>

<body>
	<!-- Start Header -->
	<header>
		<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#nav-coll">
					<span  class="sr-only">toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>

					</button>

					<a href="#" class="navbar-brand">UIN SUSKA</a>
				</div>

				<div class="collapse navbar-collapse" id="nav-coll">
					<ul class="nav navbar-nav">
						<li> <a href="#"> Home </a> </li>
						<li> <a href="#"> Daftar </a> </li>
					</ul>

					<form class="navbar-form navbar-right">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button class="btn btn-default">Search</button>

					</form>

				</div>
				
			</div>
		</nav>
		<!-- Stop Header -->
	</header>

	<div class="container">
		<div class="row">

			<div class="col-md-2"></div>
			<div class="col-md-4">
				<div class="panel panel-default panel-primary">
				<div class="panel-heading">Data Anda</div>
					<div class="table-responsive">
	 					<table class="table table-striped table-bordered">
	                        <tr>
	                            <td>NIM</td>
	                            <td>11451105689</td>
	                        </tr>
	                        <tr>
	                            <td>Nama</td>
	                            <td>Jufianto Henri</td>
	                        </tr>
	                        <tr>
	                            <td>Semester</td>
	                            <td>4</td>
	                        </tr>
	    				</table>
	    			</div>
	    		</div>


			</div>

			<div class="col-md-4">
				<div class="panel panel-default panel-primary">
				<div class="panel-heading">Data Surat</div>
					
					<!-- Start Content -->
					<div class="table-responsive">
 						<table class="table table-bordered">
                              <tr>
	                            <th>Jenis Surat</th>
	                            <th>Status</th>
	                        </tr>
	                        <tr>
	                            <td>KHS</td>
	                            <td>OK</td>
	                        </tr>
	                        <tr>
	                            <td>Aktif Kuliah</td>
	                            <td>Waiting</td>
	                        </tr>
    					</table>
					
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>

		</div>
	</div>




	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>