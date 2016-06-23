<?php
session_start(); // Starting Session
include_once 'database.php';

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<script>
window.onload = function() {
  document.getElementById("nokp").focus();
};
</script>
<script language="JavaScript" type="text/JavaScript">
var x=12;//nr characters
function submitT(t,f){
if(t.value.length==x){
f.submit()
}
}
</script>
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
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<script type="text/javascript" src="assets/js/jquery.js"></script>
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
                <div id="container_demo">
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form" style="background-color:orange;">
                            <form action="actionKeluarMasuk.php" autocomplete="on" method="POST">
                        <h1><img src="images/logociast.png" width="100" height="120"><br />Sistem Keluar Masuk Pelajar</h1>
						<?php if(isset($_SESSION['error_message'])){
						   echo '<span style="color: red;" /><center>"'.$_SESSION['error_message'].'"</center></span>';
						   unset($_SESSION['error_message']);
						}
						?>
  <br />
  <div class="form-group">
    <label for="pilihan">Pilihan: &nbsp;<font color="red"><strong>*</strong></font></label>
    <select name="pilihan" class="form-inline">
            <option value="keluarbandar">Keluar Bandar</option>
            <option value="balikkampung">Balik Kampung</option>
    </select>
  </div>
  <br />					
                                <p> 
                                    <label data-icon="u" > Scan Barcode </label>
                                    <input id="nokp" name="nokp" autofocus onkeyup="submitT(this,this.form)" type="number" placeholder="Scan Card" style="background-color:white;">
                                </p>
								<br />
                                <p class="login button"> 
								</p>
                                <p class="change_link">
								</p>
                            </form>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>