<?php
date_default_timezone_set('Asia/Kuala_Lumpur');
include_once 'database.php';
include_once 'session.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Sistem Keluar Masuk Pelajar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Sistem Keluar Masuk Pelajar" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/borangmasuk.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css" />
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
   $(document).ready(function() {
    $('select').material_select();
  });
</script>
    </head>
    <body>
        <div class="container">
		<br />
		<br />
		<br />
		<br />		
            <header>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                        <div id="login" class="animate form">
                        <center><h3>MAKLUMAT PELAJAR MASUK</h3></center>
<div class="row">
    <form class="col s12" action="actionMasuk.php" method="POST">
     <div class="row">
<center><?php $photo = $row['img_path']; echo "<img src=uploaded_files/$photo  style=width:170px;height:170px;border-radius:50%; > " ; ?></center>
	 </div>
     <div class="row">
        <div class="input-field col s6 tengah">
          <input name="id" type="hidden" class="validate" value="<?php echo $pid;?>" readonly>
        </div>
	 </div>	 
     <div class="row">
        <div class="input-field col s6 tengah">
          <input name="nama" type="text" class="validate" style="text-transform:uppercase" value="<?php echo $nama;?>" readonly>
          <label><font color="#26a69a" size="4">Nama</font></label>
        </div>
	 </div>
     <div class="row">
        <div class="input-field col s6 tengah">
          <input name="nokp" type="text" class="validate" value="<?php echo $row['nokp'];?>" readonly>
          <label><font color="#26a69a" size="4">No K/P</font></label>
        </div>
	 </div>
     <div class="row">
		<div class="input-field col s6 tengah">
          <input name="kursus" type="text" class="validate" value="<?php echo $row['kursus'];?>" readonly>
          <label><font color="#26a69a" size="4"><b>Kursus</b></font></label>
        </div>
	 </div>
     <div class="row">
		<div class="input-field col s6 tengah">
          <input name="lokasi" type="text" class="validate" style="text-transform:uppercase" value="<?php echo $row['lokasi'];?>" readonly>
          <label><font color="#26a69a" size="4"><b>Lokasi</b></font></label>
        </div>
	 </div>
     <div class="row">
		<div class="input-field col s6 tengah">
          <input name="keluar" type="text" class="validate" value="<?php echo date("d/m/Y h:i A", strtotime($row['masakeluar']));?>" readonly>
          <label><font color="#26a69a" size="4"><b>Masa Keluar</b></font></label>
        </div>
	 </div>
     <div class="row">
		<div class="input-field col s6 tengah">
          <input name="masakeluar" type="text" class="validate" value="<?php echo date("d/m/Y h:i A");?>" readonly>
          <label><font color="#26a69a" size="4"><b>Masa Masuk</b></font></label>
        </div>
	 </div>
<center>
<a href="logout.php" class="button btn waves-effect waves-light" name="action">Back<i class="material-icons left">chevron_left</i></a>
<button class="btn waves-effect waves-light" type="submit" name="action">Submit<i class="material-icons right">chevron_right</i></i></button>
</center> 
  </form>    
    </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>