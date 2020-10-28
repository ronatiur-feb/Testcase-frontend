<?php 
include 'config.php';
 ?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perbarui Homestay | Admin Toba Homestay</title>
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
                <a class="navbar-brand" href="index.php">Toba Homestay</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="../logout.php" class="btn btn-success square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <!-- <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                        </li> -->
                    <li>
                        <a  class="active-menu" href="index.php"><i class="fa fa-dashboard fa-3x"></i> Beranda</a>
                    </li>
                    <li>
                        <a  href="data_homestay.php"><i class="fa fa-tree fa-3x"></i> Toba Homestay</a>
                    </li>
                     <li>
                        <a  href="data_pendaftaran.php"><i class="fa fa-folder-open fa-3x"></i> Daftar Homestay</a>
                    </li>
                      <li>
                        <a  href="data_user.php"><i class="fa fa-user fa-3x"></i> Daftar Pengguna</a>
                    </li>
                     <li>
                        <a  href="data_pemesanan.php"><i class="fa fa-user fa-3x"></i> Pemesanan Homestay</a>
                    </li>
                  <li >
                        <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
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
     <style>
    #gambarMobil{
        width:100px; 
        height:60px;
    }
</style>
  <div class="container"> 
    <div class="row">
      <div class="col-md-10">
       <h3><span class="glyphicon glyphicon-list"></span> Edit Homestay</h3>
       <a class="btn" href="data_homestay.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_brg=mysqli_real_escape_string($koneksi, $_GET['id']);
$det=mysqli_query($koneksi, "select * from homestay where id_homestay='$id_brg'")or die(mysql_error());
$d=mysqli_fetch_array($det);
?>                  
    <form action="update.php" method="post" enctype="multipart/form-data">
        <table class="table">
            <tr>
                <td></td>
                <td><input type="hidden" name="id" value="<?php echo $d['id_homestay'] ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" class="form-control" name="nama" value="<?php echo $d['nama'] ?>"></td>
            </tr>
            <!-- <tr>
                <td>Harga</td>
                <td><input type="text" class="form-control" name="harga" value="<?php echo $d['harga'] ?>"></td>
            </tr> -->
            <tr>
                <td>Kecamatan</td>
                <td>
                    <select class="form-control" name="kecamatan">
                    <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM kecamatan");
                        while($q = mysqli_fetch_array($query)){
                        echo '<option>'. $q['nama_kec'] .'</option>';       
                        }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah Kamar</td>
                <td><input type="text" class="form-control" name="qty" value="<?php echo $d['qty'] ?>"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><textarea class="form-control" name="deskripsi"><?php echo $d['keterangan'] ?></textarea>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>
                    <img src="gambar/<?= $d['gambar']?>" width="500" height="210"><br/>
                    <input type="file" class="form-control" name="gambar" value="<?php echo $d['gambar'] ?>">
                </td>
                <tr>
                <td>Fasilitas</td>
                <td><textarea class="form-control" name="fasilitas"><?php echo $d['fasilitas'] ?></textarea>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea class="form-control" name="alamat"><?php echo $d['alamat'] ?></textarea>
            </tr>
            <tr>
                <td>POI</td>
                <td><textarea class="form-control" name="poi"><?php echo $d['poi'] ?></textarea>
            </tr>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-info" value="Simpan"></td>
            </tr>
        </table>
    </form>
