<?php 
include 'conn.php'
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Picasso Grand Hotel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
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
font-size: 16px;"> <?php echo date('l, d-m-Y'); ?> &nbsp; <a href="login.php" class="btn btn-success square-btn-adjust">Logout</a> </div>
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
            
        </nav><!-- 

         body -->

         <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Welcome Back to Picasso Grand Rewards</h2>
                     <left><img src="img/logo.png" width="12%"></left>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">           
                        <div class="panel panel-back noti-box">

                            <span class="icon-box bg-color-red set-icon">
                                <i class="fa fa-user"></i>
                            </span>
                            <div class="text-box" >
                                

        
                                 
                                     <form>  <p class="main-text">My Profile</p><p class="text-muted">Hello Mrs....</p> <div class="text-box" ><center> <a href="profil.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></button></a>  </center>

                                  <p><img src="img\org.png">Member Id</p>
                                  <p><img src="img\email.png">Email</p>
                                  <p><img src="img\telp.png">Phone</p>

                                </form>
                                      
                                
                            </div>                                   
                                
                            </div>
                        </div>
                     </div>
                     <div class="col-md-6">           
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-blue set-icon">
                                <i class="fa fa-user"></i>
                            </span>
                            <div class="text-box">
                                    <p class="main-text">My Points</p>                                    
                                <p class="text-muted">See points</p>
                               <center><img src="img\point.png"></center> 
                              
                              <br>
                              <br>
                              <br><center> <p>No Data Availabel</p></center>
                              <br>
                              <br>
                              
                            </div>
                        </div>
                     </div>
                     
                 </div>
                 <div class="row">
                    <div class="col-md-12">           
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-brown set-icon">
                                <i class="fa fa-list"></i>
                            </span>
                            <div class="text-box" >
                                
                                    <p class="main-text">Booking Status</p>                                    
                                <p class="text-muted">Pemesanan Hotel</p>
                                <br>
                                <br>
                                <img src="img\book.png">
                            </div>
                        </div>
                     </div>
                     
                     </div>
                 </div>

                
                 <hr />
               
        </div>
             <!-- /. PAGE INNER  -->
    </div>
    <footer class="py-5 bg-primary">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Ronatiur Febriani Lumban Gaol</p>
    </div>
  </footer>
         <!-- /. PAGE WRAPPER  -->
        <!-- </div> -->
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
