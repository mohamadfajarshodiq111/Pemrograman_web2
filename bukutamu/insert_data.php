<?php 
if(isset($_POST['submit']))
{
 include "koneksi.php";
 $sql= mysqli_query($conn,"INSERT INTO bukutamu values
 ('','$_POST[nama_lengkap]','$_POST[email]','$_POST[alamat]','$_POST[pesan]')");
 $kueri= mysqli_query($conn,$sql);
}
if($kueri)
{
 header("location:index.php?");
}
?>