<?php
session_start();
// require_once("conn.php");
$usernames = $_POST['username'];
$tanggallahirs = $_POST['birthday'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emails = $_POST['email'];
$passwords= $_POST['password'];



  global $conn;
  require_once(dirname(__FILE__).'/koneksi.php');

  function execQ($strQ){
    global $conn;
    $res = mysqli_query($conn, $strQ);

    return $res;
  }

  $query = "INSERT INTO user VALUES(NULL,'$usernames' , '$tanggallahirs', '$firstname', '$lastname', '$emails', '$passwords')";

  if(execQ($query)){
    $SIGN['is_sign_in'] = TRUE;
    header("location:login.php");
  }else{
    echo "gagal";
  }




// $q = mysqli_query($conn,"select * from `user` where `username`='".$username."' and `password`='".$password."'");
   
//    if(mysqli_num_rows($q) > 0) {
//      echo "<div align='center'>Data Informasi Customer Sudah Terdaftar  <a href='register.php'>Back</a>";
//    } else {
//      if(!$username || !$password) {
//        echo "<div align='center'>Masih ada data yang kosong! <a href='register.php'>Back</a>";
    

//      } else {$query = "INSERT INTO user VALUES ('$namalengkaps','$tanggallahirs','$jenis_kelamins','$alamats','$nomortelepons','$emails','$usernames','$passwords',2)";
//    $simpan = mysqli_query($conn,$query);
 
//        if($simpan) {
//          echo '<script language="javascript">
//          alert("Registrasi Berhasil Di Lakukan");
//          window.location="index.php";
//          </script>';
//          exit();
//        } else {
//          echo "<div align='center'>Proses Gagal!</div>";
//        }
//      }
//    }
// 
?>