<?php 
include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Poppins&display=swap" rel="stylesheet">
 <title>Buku Tamu</title>
 <style>
 body{
  background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%);
 background-repeat: no-repeat;
 box-sizing:border-box;
 }
 section form input,textarea{
  font-size:16px;
  width:70%;
  border:1px solid #607d8b;
  outline:none;
  background:transparent;
  border-radius:8px;
  padding:5px 10px;
 }
 </style>
</head>
<body>
<section class="p-4">
<div class="row">
<div class="col-3" style="font-family: 'Poppins', sans-serif;">
<form action="insert_data.php" method="POST">
 <h2 style="font-family: 'Nunito', sans-serif; font-weight:700;">Form Input Buku Tamu</h2>
 <p>
 Nama Lengkap <br>
 <input type="text" name="nama_lengkap" id="nama_lengkap">
 </p>
 <p>
Email <br>
 <input type="text" name="email" id="email">
 </p>
 <p>
 Alamat <br>
 <textarea name="alamat" id="alamat" cols="25" rows="5"></textarea>
 </p>
 <p>
Pesan <br>
 <textarea name="pesan" id="pesan" cols="25" rows="5"></textarea>
 </p>
 <button type="submit" id="submit" name="submit" class="btn btn-primary"> Kirim Buku Tamu</button>
 <button type="reset" id="reset" class="btn btn-danger"> Hapus</button>
</form>
</div>
<div class="col-9 pe-4">
<h2 class="text-center" style="font-family: 'Nunito', sans-serif; font-weight:700;">Data Buku Tamu</h2>
<table class="table fw-bold" style="font-family: 'Poppins', sans-serif; color:#111;">
<thead class="table-dark">
<tr>
<td>No</td>
<td>Nama Lengkap</td>
<td>Email</td>
<td>Alamat</td>
<td>Pesan</td>
</tr>
</thead>
<?php 
$sql_select = "SELECT *FROM bukutamu ORDER BY id_bukutamu ASC";
$kueri_select = mysqli_query($conn,$sql_select);
while ($data = mysqli_fetch_array($kueri_select))
{
?>
<tr>
<td><?php echo $data['id_bukutamu']; ?></td>
<td><?php echo $data['nama_lengkap']; ?></td>
<td><?php echo $data['email']; ?></td>
<td><?php echo $data['alamat']; ?></td>
<td><?php echo $data['pesan']; ?></td>
</tr>
<?php }?>

</table>
</div>
</div>
</section>
</body>
</html>