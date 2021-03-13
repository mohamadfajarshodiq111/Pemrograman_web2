Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 
@billyardi123 
chottedifs
/
Unpam-Pemrograman-Web-2
1
00
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
Unpam-Pemrograman-Web-2/Pert2_Latihan2.php /
@chottedifs
chottedifs Commit Kedua Mengupload Tugas pada Pertemuan 2
Latest commit 270b51e 16 hours ago
 History
 1 contributor
112 lines (103 sloc)  3.17 KB
  
<?php 
    // Inisiasi Variabel yang digunakan
    // Nama Peralatan
    $brg1 = "Buku";
    $brg2 = "Mouse";
    $brg3 = "FlashDisk";
    $brg4 = "Pulpen";

    // Harga perunit Peralatan
    $hrg1 = 17500;
    $hrg2 = 30000;
    $hrg3 = 70000;
    $hrg4 = 22300;

    // Jumlah Peralatan yang ada
    $jmlbrg1 = 2;
    $jmlbrg2 = 5;
    $jmlbrg3 = 1;
    $jmlbrg4 = 3;

    // Total Harga per Jenis Peralatan
    $th1 = $jmlbrg1 * $hrg1;
    $th2 = $jmlbrg2 * $hrg2;
    $th3 = $jmlbrg3 * $hrg3;
    $th4 = $jmlbrg4 * $hrg4;

    // Hitung Grand Total nilai Peralatan
    $thrg = $th1 + $th2 + $th3 +$th4;

    // Diskon
    $disc = 5;

    // Hitung Jumlah Diskon yang diberikan
    $tdisc = ($disc * $thrg) / 100;

    // Jumlah Yang harus dibayar
    $tbyr = $thrg - $tdisc;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peralatan yang dibeli</title>
</head>
<style type="text/css">
    body {
        font-size: 14pt;
    }
    table {
        font-size: 25pt;
    }
</style>
<body>
    <center>
        <font face="comic sans serif" size=5 color="blue">Contoh Perhitungan dengan PHP</font>
        <table border="1" cellspacing="0" cellpadding="3">
        <tr>
            <td colspan="4" align="center" valign="middle">
                <b>Daftar Pemesanan Peralatan Kantor</b>
            </td>
        </tr>
        <tr>
            <td><b>Nama Peralatan</b></td>
            <td><b>Jumlah</b></td>
            <td><b>Harga Satuan</b></td>
            <td><b>Jumlah Harga</b></td>
        </tr>

        <?php
            // Mulai untuk mengisi tabel daftar dengan data yang ada
        ?>
        <tr>
            <td align="left"><?php echo $brg1; ?></td>
            <td align="left"><?php echo $jmlbrg1; ?></td>
            <td align="left"><?php echo $hrg1; ?></td>
            <td align="left"><?php echo $th1; ?></td>
        </tr>
        <tr>
            <td align="left"><?php echo $brg2; ?></td>
            <td align="left"><?php echo $jmlbrg2; ?></td>
            <td align="left"><?php echo $hrg2; ?></td>
            <td align="left"><?php echo $th2; ?></td>
        </tr>
        <tr>
            <td align="left"><?php echo $brg3; ?></td>
            <td align="left"><?php echo $jmlbrg3; ?></td>
            <td align="left"><?php echo $hrg3; ?></td>
            <td align="left"><?php echo $th3; ?></td>
        </tr>
        <tr>
            <td align="left"><?php echo $brg4; ?></td>
            <td align="left"><?php echo $jmlbrg4; ?></td>
            <td align="left"><?php echo $hrg4; ?></td>
            <td align="left"><?php echo $th4; ?></td>
        </tr>
        <tr>
            <td colspan="3" align="right">Total Harga</td>
            <td align="right"><?php echo $thrg; ?></td>
        </tr>
        <tr>
            <td colspan="3" align="right">Diskon <?php echo "($disc %)"; ?></td>
            <td align="right"><?php echo $tdisc; ?></td>
        </tr>
        <td colspan="3" align="right">Jumlah harus dibayar</td>
        <td align="right"><?php echo $tbyr; ?></td>
        </table>
    </center>
</body>
</html>
© 2021 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
