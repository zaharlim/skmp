<body>
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirm Logout</h4>
                </div>
            
                <div class="modal-body">
                    <p>Do you want to proceed?</p>
                    <p class="debug-url"></p>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok" href="logout.php">Yes</a>
                </div>
            </div>
        </div>
    </div>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="administrator.php">Administrator</a> 
            </div>
 <div style="
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="index.php" class="btn btn-danger square-btn-adjust" data-toggle="modal" data-target="#confirm-delete">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../assets/img/find_user.png" class="user-image img-responsive" width="80" height="80"/>
					</li>
				
					
                    <li>
                        <a href="administrator.php"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a>
                    </li>								                   
                    <li>
                        <a class="active-menu" href="tambahpelajar.php"><i class="fa fa-sitemap fa-2x"></i> Pengurusan Pelajar<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="tambahpelajar.php"><span class="fa fa-user-plus"> Tambah Pelajar</span></a>
                            </li>
                            <li>
                                <a href="senaraipelajar.php"><span class="fa fa-list"> Senarai Pelajar</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-list-alt fa-2x"></i> Laporan Keluar Bandar<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="senaraipelajarkeluar.php"><span class="fa fa-user"> Senarai Pelajar Keluar Bandar</span></a>
                            </li>
                            <li>
                                <a href="senaraipelajarlewat.php"><span class="fa fa-user-times"> Senarai Pelajar Masuk Lewat</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-list-alt fa-2x"></i> Laporan Balik Kampung<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="senaraipelajarbalik.php"><span class="fa fa-user"> Senarai Pelajar Balik Kampung</span></a>
                            </li>
                            <li>
                                <a href="senaraipelajarpulanglewat.php"><span class="fa fa-user-times"> Senarai Pelajar Pulang Lewat</span></a>
                            </li>
                        </ul>
                    </li>					
                  <li  >
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <center><h2>Kemaskini Maklumat Pelajar </h2> </center>  
                    </div>
                </div>				
                 <!-- /. ROW  -->
                  <hr />
			<form method="POST" enctype="multipart/form-data" runat="server" action="actionEdit.php">
                  <div class="box-body">  
                <div class="form-group">
                  </div>
                    <div class="form-group">
                      <input type="hidden" class="form-control" name="id" style="text-transform:uppercase" value="<?php echo $id?>" required>
                    </div>				  
                    <div class="form-group">
                      <label for="nama">Nama Pelajar</label>
                      <input type="text" class="form-control" name="nama" style="text-transform:uppercase" value="<?php echo $nama?>" required>
                    </div>
                    <div class="form-group">
                      <label for="nokp">No. K/P</label>
                      <input type="number" class="form-control" name="nokp" value="<?php echo $nokp?>" required>
                    </div>
                    <div class="form-group">
                      <label for="ndp">No. NDP</label>
                      <input type="text" class="form-control" name="ndp" style="text-transform:uppercase" value="<?php echo $ndp?>" required>
                    </div>
					<div class="form-group">
					<label>Jantina</label>
                      <select class="form-control" name="jantina">
					   <option <?php echo ($jantina == 'Lelaki')?"selected":"" ?> >Lelaki</option>
					   <option <?php echo ($jantina == 'Perempuan')?"selected":"" ?> >Perempuan</option>
                      </select>
					</div>
					<div class="form-group">
					<label>Kursus</label>
                      <select class="form-control" name="kursus">
					   <option value="1" <?php echo ($kursus == '1')?"selected":"" ?> >SKM3 + VTO AUTOMOTIF</option>
					   <option value="2" <?php echo ($kursus == '2')?"selected":"" ?> >SKM3 + VTO ELEKTRONIK</option>
					   <option value="3" <?php echo ($kursus == '3')?"selected":"" ?> >SKM3 + VTO KIMPALAN</option>
					   <option value="4" <?php echo ($kursus == '4')?"selected":"" ?> >SKM3 + VTO MEKATRONIK</option>
					   <option value="5" <?php echo ($kursus == '5')?"selected":"" ?> >DLPV KOMPUTER RANGKAIAN</option>
					   <option value="6" <?php echo ($kursus == '6')?"selected":"" ?> >DLPV KOMPUTER SISTEM</option>
					   <option value="7" <?php echo ($kursus == '7')?"selected":"" ?> >DLPV KIMPALAN</option>
					   <option value="8" <?php echo ($kursus == '8')?"selected":"" ?> >DLPV ELEKTRONIK</option>
					   <option value="9" <?php echo ($kursus == '9')?"selected":"" ?> >DLPV AUTOMOTIF</option>
					   <option value="10" <?php echo ($kursus == '10')?"selected":"" ?> >DLPV MEKATRONIK</option>
					   <option value="11" <?php echo ($kursus == '11')?"selected":"" ?> >DLPV PENGELUARAN</option>
					   <option value="12" <?php echo ($kursus == '12')?"selected":"" ?> >VTO</option>
                      </select>
					</div>

					<br />

                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <center><button onclick="goBack()" class="btn btn-primary">Back</button>
					<button type="submit" name="submit" class="btn btn-primary">Submit</button></center>
                  </div>
                </form>
			</div>
                 <!-- /. ROW  -->
                <hr />                    
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->