<?php 
include 'config.php';
 ?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profil | Picasso Grand Hotel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<style>
	#gambarGaleri{
		width: 60px;
		height: 30px;
	}
</style>

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
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="150" height="50"></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="login.php" class="btn btn-success square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<!-- <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li> -->
				
					 
                   <li>
                        <a  class="active-menu" href="index.php"><img src="img\home.png"></i> Beranda</a>
                    </li>
                    <li>
                        <a  href="profil.php"><img src="img\profil.png"></i> Profil</a>
                    </li>
                     <li>
                        <a  href="points.php"><img src="img\points.png"></i> Points of activity</a>
                    </li>
                  
               <li  >
                        <a  href="stays.php"><img src="img\stays.png"></i>Stays</a>
                    </li> 
                      <li  >
                        <a  href="invoice.php"><img src="img\invoice.png"></i> Invoice</a>
                    </li>
                    <li  >
                        <a  href="inbox.php"><img src="img\inbox.png"></i> Inbox </a>
                    </li>       
                  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <!-- <div class="row">
                    <div class="col-md-12">
                     <h2>Blank Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div> -->

                <!--  -->
                <!--  -->
     <div class="container">
	<div class="row">
		<div class="col-sm-8">
		<h3><span class="glyphicon glyphicon-plus"></span> Edit Profile</h3>
<br/>

<br/>
        <form action="editprofilact.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>First Name</label>
            <input name="nama" type="text" class="form-control" placeholder="First Name">
          </div>
           <div class="form-group">
            <label>Last Name</label>
            <input name="name" type="text" class="form-control" placeholder="Last Name">
          </div>
          <div class="form-group">
            <label>Birthday</label>
            <input name="date" type="date" class="form-control" placeholder="Jumlah ..">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input name="username" type="text" class="form-control" placeholder="Username"></textarea> 
          </div>
          <div class="form-group">
            <label>Password</label>
            <textarea name="password" type="text" class="form-control" placeholder="Password.."></textarea>
          </div>
          <div class="form-group">
            <label>Nationallity</label>
            <select class="form-control" name="kecamatan">
            <?php
              $query = mysqli_query($koneksi, "SELECT * FROM kecamatan");
              while($q = mysqli_fetch_assoc($query)){
              echo '<option>'. $q['nama_kec'] .'</option>';   
              }
            ?>
            </select>
          </div>
          <div class="form-group">
            <label>Photo Profil</label>
            <input name="gambar" type="file" class="form-control">
          </div>
          <input type="submit" class="btn btn-primary" value="Simpan" name="tambah">
          <a href="profil.php" class="btn btn-default" data-dismiss="modal">Batal</a>
      </form>
    <br><br>
  </div>

                            <!--  -->
                            <!--  -->
        

                 <!-- /. ROW  -->
    <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
