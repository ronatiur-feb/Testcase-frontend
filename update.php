<?php 
include 'config.php';
$id=$_POST['id'];	
$nama=$_POST['nama'];
/*$harga=$_POST['harga'];*/
$jumlah=$_POST['qty'];
$deskripsi=$_POST['deskripsi'];
$fasilitas=$_POST['fasilitas'];
$alamat=$_POST['alamat'];
$poi=$_POST['poi'];
$status=$_POST['status'];
$gambar = $_FILES['gambar']['name'];

if ($_FILES['gambar']['name']) {
	move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/'. $gambar);
}

$query = mysqli_query($koneksi, "update homestay set nama='$nama', /*harga='$harga',*/ qty='$jumlah', keterangan='$deskripsi', gambar='$gambar', fasilitas='$fasilitas',alamat='$alamat',poi='$poi' where id_homestay='$id'");
if($query){
	echo "<script>alert('Data $nama berhasil disimpan!'); window.location = 'data_homestay.php'</script>";
}else{
	echo "<script>alert('Data $nama gagal disimpan!'); window.location = 'data_homestay.php'</script>";
}
?>