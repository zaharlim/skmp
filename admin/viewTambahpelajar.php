
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
                     <center><h2>Tambah Pelajar</h2> </center>  
                    </div>
                </div>				
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
				<div class="col-md-12">
					<div class="panel-body">
			<form method="POST" enctype="multipart/form-data" runat="server" action="actionTambahpelajar.php">
                  <div class="box-body">  
                <div class="form-group">
<div class="image-upload" align="center">
    <label for="file-input">
		<div class="upload-gambar">
        <img src="../images/upload.gif" height="150" width="150" id="preview"/>
		</div>
    </label>
    <input id="file-input" type="file" name="image1" onchange="readURL(this);"/>
</div>
                  </div>			  
                    <div class="form-group">
                      <label for="nama">Nama Pelajar</label>
                      <input type="text" class="form-control" name="nama" style="text-transform:uppercase" placeholder="Nama Pelajar" required>
                    </div>
                    <div class="form-group">
                      <label for="nokp">No. K/P</label>
                      <input type="number" class="form-control" name="nokp" placeholder="No. Kad Pengenalan" required>
                    </div>
                    <div class="form-group">
                      <label for="ndp">No. NDP</label>
                      <input type="text" class="form-control" name="ndp" style="text-transform:uppercase" placeholder="No. NDP" required>
                    </div>
					<div class="form-group">
					<label>Jantina</label>
                      <select class="form-control" name="jantina">
                        <option>Lelaki</option>
                        <option>Perempuan</option>
                      </select>
					</div>
					<div class="form-group">
					<label>Kursus</label>
							<?php 
							$query = "SELECT * FROM kursus";
							$result = mysqli_query($conn,$query);?>
                      <select class="form-control" name="kursus">
                        <?php foreach ($result as $row)
						{
						?>
						<option value="<?php echo $row['fid']; ?>"><?php echo $row['kursus']; ?></option>
						<?php
						}
						?>
                      </select>
					</div>

					<br />

                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
			</div>
			</div>
			</div>
                 <!-- /. ROW  -->
                <hr />                    
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>