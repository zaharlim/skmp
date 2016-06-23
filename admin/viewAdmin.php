
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
                        <a class="active-menu"  href="administrator.php"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a>
                    </li>								                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-2x"></i> Pengurusan Pelajar<span class="fa arrow"></span></a>
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
                     <h2><center>Admin Dashboard</center></h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">

			 <div class="col-md-5 col-sm-6 col-xs-12">
              <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon"><i class="fa fa-users"></i></span>
                <div class="text-box">
                  <span class="text-muted"><b>Jumlah Pelajar</b></span>
                  <p><span class="main-text"><big><?php echo $total; ?></big> Orang</span></p>
                </div>
              </div>
            </div>
			 <div class="col-md-5 col-sm-6 col-xs-12">
              <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon"><i class="ion-person-stalker"></i></span>
                <div class="text-box">
                  <span class="text-muted"><b>Pelajar DLPV</b></span>
                  <p><span class="main-text"><big><?php echo $dlpv; ?></big> Orang</span></p>
                </div>
              </div>
            </div>
			 <div class="col-md-5 col-sm-6 col-xs-12">
              <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon"><i class="ion-person-stalker"></i></span>
                <div class="text-box">
                  <span class="text-muted"><b>Pelajar VTO</b></span>
                  <p><span class="main-text"><big><?php echo $vto; ?></big> Orang</span></p>
                </div>
              </div>
            </div>
			 <div class="col-md-5 col-sm-6 col-xs-12">
              <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon"><i class="ion-person-stalker"></i></span>
                <div class="text-box">
                  <span class="text-muted"><b>Pelajar SKM3 + VTO</b></span>
                  <p><span class="main-text"><big><?php echo $skm3; ?></big> Orang</span></p>
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
        </div>
     <!-- /. WRAPPER  -->
