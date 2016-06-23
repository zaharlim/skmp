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
									<a href="AksesBorang.php" class="current-page-item"> Borang Keluar </a>
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
						<div class="12u 12u(mobile)">

							<section>
								<center><h2>Masukkan No. NDP</h2><center>
								  <div class="col-md-4 col-lg-offset-4">
<form class="form-horizontal" method="POST" action="actionAksesBorang.php">
<input name="nondp" type="text" style="text-transform:capitalize" placeholder="No NDP" class="form-control input-md" required>
&nbsp;
<center><button type="submit" class="btn btn-sm btn-primary btn-lg pull-center" name="Submit"><span class="glyphicon glyphicon-plus"></span> Submit</button></center>
</form>
<br />
						<?php if(isset($_SESSION['error_message'])){
						   echo '<span style="color: red;" /><center>"'.$_SESSION['error_message'].'"</center></span>';
						   unset($_SESSION['error_message']);
						}
						?>
</div>
							</section>

						</div>
					</div>
				</div>
			</div>
