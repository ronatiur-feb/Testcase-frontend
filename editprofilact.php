<?php 
include 'config.php';

$nama = $_POST['firstname'];
$name = $_POST['lastname'];
/*$harga = $_POST['harga'];*/

$username = $_POST['username'];
$password = $_POST['password'];
$birthday = $_POST['birthday'];
$nama_kec = $_POST['kecamatan'];
$kecamatan = mysqli_query($koneksi, "SELECT * FROM kecamatan WHERE nama_kec= '$nama_kec'");
$kat = mysqli_fetch_array($kecamatan);
$id_kec = $kat['id_kec'];
$gambar = $_FILES['gambar']['name'];


		move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/'. $gambar);
		
		$sql = mysqli_query($koneksi, "INSERT INTO user VALUES('', '$nama','$name', '$username', '$password', '$gambar', '$id_kec', '$birthday','$kecamatan')");
		if ($sql) {
echo "<script>alert('Data $nama berhasil disimpan!'); window.location ='profil.php'</script>";	
		}else{
			echo "<script>alert('Data $nama gagal disimpan!'); window.location = 'profil.php'</script>";
	}
?>
	