<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Latihan Praktikum 7</h1>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <br>
        <label>Tanggal Lahir: </label>
        <input type="text" name="tgl_lahir">
        <br>
        <label>Pekerjaan: 
        <select name='pekerjaan'>
            <option value='Wirausaha'>Wirausaha</option>
            <option value='TNI'>TNI</option>
            <option value='Dosen'>Dosen</option>
            <option value='Buruh'>Buruh</option>
        </select>
        </label>
        <br>
        <input type="submit" value="Kirim">
    </form>
    <br>
     <?php
        # Memanggil Nama
        echo 'Nama: ' . $_POST['nama'];

        #Menghitung Umur
        $tanggal_lahir = new DateTime("1998-06-08");
        $sekarang = new DateTime("today");
        if ($tanggal_lahir > $sekarang) { 
        $thn = "0";
        $bln = "0";
        $tgl = "0";
        }
        #Memanggil Umur
        $thn = $sekarang->diff($tanggal_lahir)->y;
        $bln = $sekarang->diff($tanggal_lahir)->m;
        $tgl = $sekarang->diff($tanggal_lahir)->d;
        echo "<br> umur:". $thn." tahun ".$bln." bulan ".$tgl." hari";

        # Memanggil pekerjaan
        echo "<br> Pekerjaan: ". $_POST['pekerjaan'];

        # Kondisi if pekerjaan untuk menentukan gaji
        $pekerjaan = @$_POST['pekerjaan'];

        if($pekerjaan == "Wirausaha"){
            echo '<br> Gaji: Rp. 10.000.000,-';
        }elseif($pekerjaan == "TNI"){
            echo '<br> Gaji: Rp. 8.000.000,-';
        }elseif($pekerjaan == "Dosen"){
            echo '<br> Gaji: Rp. 5.000.000,-';
        }elseif($pekerjaan == "Buruh"){
            echo '<br> Gaji: Rp. 4.000.000,-';
        }
    ?>
</body>
</html>