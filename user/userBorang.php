	<body>
		<div id="page-wrapper">
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">

							<header id="header">
								<h1><a href="index.php" id="logo">Sistem Keluar Masuk Pelajar</a></h1>
								<nav id="nav">
									<a href="index.php">Utama</a>
									<a href="borangkeluar.php" class="current-page-item"> Borang Keluar </a>
									<a href="login.php"> Login </a>
									<a href=""> </a>
									<a href=""> </a>
								</nav>
							</header>

						</div>
					</div>
				</div>
			</div>
			<div id="main">
				<div class="container">
					<div class="row main-row">
						<div class="4u 12u(mobile)">

							<section>
								<h2>Panduan Mengisi Borang</h2>
								<ul class="small-image-list">
									<li>
										<h4>1. Isi ke semua maklumat yang diperlukan</h4>
										<h4>2. Pastikan ke semua maklumat yang dimasukkan adalah <b>BETUL</b></h4>
										<h4>3. Anda dilarang memasukkan maklumat <b>PALSU</b></h4>
									</li>
								</ul>
							</section>
						</div>
						<div class="8u 12u(mobile)">

							<section class="right-content">

    <legend>
	<h2> Borang Mohon Keluar </h2>
<select name="borang" id="borang" onclick="test()" class="form-control" data-style="btn-primary">
   <option>Sila Pilih</option>
   <option value="keluar">Keluar Bandar</option>
   <option value="balik">Balik Kampung</option>
</select>		
	</legend>
<form class="form-horizontal" method="POST" id="keluar" action="actionKeluar.php"style="display:none;">

<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Nama : </label>  
  <div class="col-md-8">
  <input name="nama" type="text" style="text-transform:uppercase" class="form-control input-md" value="<?php echo $nama; ?>" readonly>
  </div>
</div>
<!--<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">No KP : </label>  
  <div class="col-md-8">
  <input name="nama" type="text" style="text-transform:uppercase" class="form-control input-md" value="<?php echo $nokp; ?>" readonly>
  </div>
</div>-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Lokasi : </label>  
  <div class="col-md-8">
  <input id="textinput" name="lokasikeluar" type="text" style="text-transform:uppercase" placeholder="Lokasi dituju" class="form-control input-md" required>
  </div>
</div>
<center><button type="submit" class="btn btn-sm btn-primary btn-lg pull-center" name="Submit"><span class="glyphicon glyphicon-plus"></span> Hantar</button></center>
</form>

<form class="form-horizontal" method="POST" id="balik" action="actionBalikkampung.php" style="display:none;">
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Nama : </label>  
  <div class="col-md-8">
  <input name="namabalik" type="text" style="text-transform:uppercase" class="form-control input-md" value="<?php echo $nama; ?>" readonly>
  </div>
</div>
<!--<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">No KP : </label>  
  <div class="col-md-8">
  <input name="nama" type="text" style="text-transform:uppercase" class="form-control input-md" value="<?php echo $nokp; ?>" readonly>
  </div>
</div>-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Lokasi : </label>  
  <div class="col-md-8">
  <input id="textinput" name="lokasibalik" style="text-transform:uppercase" type="text" placeholder="Lokasi dituju" class="form-control input-md">
  </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Tarikh : </label>  
  <div class="col-md-8">
  <input id="datepicker" name="tarikhbalik" type="text" class="form-control input-md" readonly>
  <input id="alt-datepicker"  name="tarikhbalik" type="hidden" class="form-control input-md">
  </div>
</div>
<center><button type="submit" class="btn btn-sm btn-primary btn-lg pull-center" name="Submit"><span class="glyphicon glyphicon-plus"></span> Hantar</button></center>
</form>
							</section>

						</div>
					</div>
				</div>
			</div>