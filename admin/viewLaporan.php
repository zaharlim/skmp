<body>
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
  <div style="padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="index.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                                <a href="#"><span class="fa fa-user-times"> Senarai Pelajar</span></a>
                            </li>
                        </ul>
                    </li>						
                  <li>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <center><h2>Senarai Pelajar</h2> </center>  
                    </div>
                </div>				
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
				<div class="col-md-12">
					<div class="panel-body">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>No K/P</th>
						<th>NDP</th>
						<th>Kursus</th>
						<th>Bidang</th>
						<th>Action</th>
						<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<?php
						while ($row = mysqli_fetch_array($result)){
							?>
							<tr>
							<td><?=$row['id']?></td>
							<td><?=$row['nama']?></td>
							<td><?=$row['nokp']?></td>
							<td><?=$row['ndp']?></td>
							<td><?=$row['jantina']?></td>
							<td><?=$row['kursus']?></td>
							<td>Edit</td>
							<td>Delete</td>

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