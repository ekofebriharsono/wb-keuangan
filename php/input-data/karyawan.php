<?php
include '../koneksi.php';
$conn = OpenCon();

if(isset($_POST['submitKaryawan'])){
   $nama = $_POST['nama'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $repassword = $_POST['repassword'];

   $sql = "INSERT INTO `karyawan` (`id_karyawan`, `nama`, `email`, `password`) VALUES (NULL, '$nama', '$email', MD5('$password'))";
   $res = mysqli_query($conn, $sql);
   if($res){
        echo "Berhasil disimpan!";
   }else {
    echo "Gagal disimpan!";
   }

}

if(isset($_POST['submitKaryawanUpdate'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
     
    $sql = "UPDATE `karyawan` SET `nama` = '$nama', `email` = '$email', `password` = '$password' WHERE `karyawan`.`id_karyawan` = $id;";
    $res = mysqli_query($conn, $sql);
    if($res){
         echo "Berhasil diperbarui!";
    }else {
     echo "Gagal diperbarui!";
    }
 
 }

 if(isset($_POST['submitKaryawanDelete'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $sql = "DELETE FROM `karyawan` WHERE `karyawan`.`id_karyawan` = $id";
    $res = mysqli_query($conn, $sql);
    if($res){
         echo "Berhasil dihapus!";
    }else {
     echo "Gagal dihapus!";
    }
 
 }

if(isset($_POST['submitKaryawanCancel'])){
    echo "tes";
}

CloseCon($conn);
?>