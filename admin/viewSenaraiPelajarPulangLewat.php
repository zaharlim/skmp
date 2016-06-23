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
                        <a href="tambahpelajar.php"><i class="fa fa-sitemap fa-2x"></i> Pengurusan Pelajar<span class="fa arrow"></span></a>
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
                        <a class="active-menu" href="#"><i class="fa fa-list-alt fa-2x"></i> Laporan Balik Kampung<span class="fa arrow"></span></a>
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
                     <center><h2>Senarai Pelajar Pulang Lewat</h2> </center>  
                    </div>
                </div>				
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
				<div class="col-md-12">
					<div class="panel-body">
<table id="pulanglewat" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead style="background-color:#ff4d4d;">
						<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>No NDP</th>
						<th>No K/P</th>
						<th>Kursus</th>
						<th>Lokasi</th>
						<th>Masa Keluar</th>
						<th>Masa Masuk</th>
						<th>Action</th>						
						</tr>
						</thead>
						<tbody>
						<?php
						while ($row = mysqli_fetch_array($result5)){
							$balik = $row['masakeluar'];
							if ($balik == NULL){
							$balik = "TIADA";
							}else{
							$balik = date("d/m/Y h:i A", strtotime($row['masakeluar']));
							}
							$pulang = $row['masamasuk'];
							if ($pulang == NULL){
							$pulang = "TIADA";
							}else{
							$pulang = date("d/m/Y h:i A", strtotime($row['masamasuk']));
							}
							?>
							<tr>
							<td><?php echo $row['pid'];?></td>
							<td><?php echo strtoupper($row['nama']);?></td>
							<td><?php echo $row['ndp'];?></td>
							<td><?php echo $row['nokp'];?></td>
							<td><?php echo $row['kursus'];?></td>
							<td><?php echo strtoupper($row['lokasi']);?></td>
							<td><?php echo $balik ?></td>
							<td><?php echo $pulang ?></td>
							<td><a href="deletePulangLewat.php?kid=<?php echo $row['kid']; ?>" onclick="return confirm('Padam record?');">Padam</a></td>

							</tr>
							<?php
						}
						?>
                        </tbody>
                        </table>
						</div>		
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
     <!-- /. WRAPPER  -->