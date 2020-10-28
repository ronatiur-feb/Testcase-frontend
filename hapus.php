<?php 
  global $conn;
  $conn = mysqli_connect("localhost", "root", "", "homestay");

  //$conn = mysqli_connect("localhost", "p1d4ti08", "6YsE4o1p", "p1d4ti08_pu");
    
  if(!$conn){
    die("Masalah Pada Database");
  }

  $db_use = mysqli_select_db($conn, "homestay") or die("Select Database Problem !!");

  $id = $_GET['id_homestay'];
    $query = "DELETE FROM homestay WHERE id_homestay='$id'";
  if($conn->query($query)==true){
    echo"<script>alert('Hapus Homestay Berhasil');</script>";
  }
    header('Refresh:0 url=data_homestay.php');
?>