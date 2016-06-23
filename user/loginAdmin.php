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
									<a href="AksesBorang.php"> Borang Keluar </a>
									<a href="login.php" class="current-page-item"> Login </a>
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
<center><h2>ADMIN LOGIN</h2></center>
<br />
							<section class="right-content">
								  <div class="col-md-5 col-lg-offset-3">
<form class="form-horizontal" method="POST" action="actionAdmin.php">
  <label class="col-md-3 control-label" for="textinput">Username : </label>  
  <div class="col-md-8">
  <input name="username" type="text" style="text-transform:uppercase" class="form-control input-md" >
  </div>
  <label class="col-md-3 control-label" for="textinput">Password : </label>  
  <div class="col-md-8">
  <input name="password" type="password" style="text-transform:uppercase" class="form-control input-md" >
  </div>
  </div>				

<div class="col-md-5 col-lg-offset-5">
<br />
<button type="submit" class="btn btn-sm btn-primary btn-lg pull-center" name="Submit">
<span class="glyphicon glyphicon-plus"></span> Submit</button>
</div>
</form>

						
</section>


						</div>
					</div>
				</div>
			</div>
<br />
						<?php if(isset($_SESSION['error_message'])){
						   echo '<span style="color: red;" /><center>"'.$_SESSION['error_message'].'"</center></span>';
						   unset($_SESSION['error_message']);
						}?>
		</div>