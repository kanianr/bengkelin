
<html>
<head></head>
<style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100;
    background-color: #5F9EA0;
    background-image: url(image/kan.png);
    background-size: cover;
    background-repeat: no-repeat;
}
.form-box{
    width: 450px;
    background-color: rgba(253, 253, 246, 0.582);
    margin: 12% auto;
    padding: 50px 0;
    color: #222221;
    box-shadow: 0 0 20px 2px rgba(0,0,0,0.5);
    text-align: center;
    font-weight: bold;
}
h1{
    text-align: center;
    margin-bottom: 10px;
}
.input-box{
    margin: 20px auto;
    width: 80%;
    border-bottom: 1px solid #222221;
    padding-top: 10px;
    padding-bottom: 5px;
    text-align: center;
}
button {
    border: none;
    outline: none;
    padding: 8px;
    width: 100px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    border-radius: 20px;
    background: #6e9de4;
    font-family:'calibri';
    align-content: center;
    
}
.input-box input{
    width: 50%;
    border: none;
    outline: none;
    color: black;
    float: right;
    height: 20;
}
.input-box textarea{
    width: 50%;
    border: none;
    outline: none;
    color: black;
    float: right;
}
.input-box select{
    width: 50%;
    border: none;
    outline: none;
    color: rgb(8, 8, 8);
    float: right;
    text-align: center;
    font-family: 'calibri';
}
.a{
    text-align: justify;
}
.alert {
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  margin: 5px;
}


.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb;
  text-align: left;
}

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
}

</style>
<body>
    <div class="form-box">
<h1>Reservasi</h1>
<?php
    include "koneksi.php";

    if($_POST['button']=="add") {
        $tgl = $_POST['tanggal'];
        $waktu = $_POST['waktu'];
        $nama = $_POST['nama'];
        $no_hp = $_POST['no_hp'];
        $tp_motor = $_POST['tp_motor'];
        $layanan = $_POST['layanan'];
        $catatan = $_POST['catatan'];
        $status = 'belum selesai';

        $array_jam = explode(":", $waktu);
        $jam = $array_jam[0];

        $query_cek = mysqli_query($koneksi, "SELECT * FROM reservasi WHERE tgl='$tgl' AND EXTRACT(hour FROM waktu) = $jam AND status='belum selesai'");
        $cek_jml = mysqli_num_rows($query_cek);

        if($cek_jml <= 0) {
                
            $sql = "INSERT INTO reservasi (tgl, waktu, nama, no_hp, tp_motor, layanan, catatan, status) VALUES ('$tgl', '$waktu', '$nama', '$no_hp', '$tp_motor', '$layanan', '$catatan', '$status')";

            $query = mysqli_query($koneksi, $sql);
            if($query) {
                echo "<div class=\"alert alert-success\">Reservasi berhasil dibuat, silahkan tunggu!!
                    <p>Dengan data sebagai berikut </p>
                    <p>Tanggal : $tgl</p>
                    <p>Waktu : $waktu</p>
                    <p>Nama : $nama</p>
                    <p>No HP : $no_hp</p>
                    <p>Tipe Motor : $tp_motor</p>
                    <p>Layanan : $layanan</p>
                    <p>Catatan : $catatan</p>
                    <!--<p><a href='print.php?tgl=$tgl&waktu=$waktu&nama=$nama&no_hp=$no_hp&tp_motor=$tp_motor&layanan=$layanan&catatan=$catatan&status=$status' target='blank'>print reservasi</a></p>-->

                    <p><a href='reservasi.php'>buat reservasi</a></p>
                    <p><a href='logout.php'>logout</a></p>
                </div>";
            }
            else {
                echo "<div class=\"alert alert-danger\">Reservasi gagal dibuat!!</div>";
            }
        }
        else {
            
            echo "<div class=\"alert alert-danger\">Maaf, reservasi di $tgl $waktu sudah ada yang booking, silahkan pesan di waktu yang berbeda</div>";
        }
    }
    else {
        ?>

    <form class="uk-form-stacked" action="" method="POST">
        <div class="input-box">
            <label>Tanggal :</label>
                <input type="date" name="tanggal" maxlength="30" required value="<?=$tgl?>">
            <br><br>    
            <label>Waktu :</label>
                <input type="time" name="waktu" value="<?=$waktu?>" required>
            <br><br>
            <label>Atas Nama :</label>
                <input type="text" name="nama" value="<?=$nama?>" required>
            <br><br>
            <label>No HP :</label>
                <input type="text" name="no_hp" value="<?=$no_hp?>" required>
            <br><br>
            <label>Tipe Motor :</label>
                <input type="text" name="tp_motor" value="<?=$tp_motor?>" required>
            <br><br>
            <label>Layanan :</label>
            <select name="layanan">
                <option name="perawatan">Perawatan</option>
                <option name="service">Service</option>
                <option name="pemasangan sparepart">Pemasangan Sparepart</option>
            </select>
            <br><br>    
            <label>Catatan :</label>
            <textarea class="uk-textarea" rows="3" name="catatan" maxlength="100" required><?=$catatan?></textarea>
            <br><br>
            <button class="uk-button uk-button-primary" type="submit" name="button" value="add"><b>Simpan</b></button>
            <a href="index.php">Home</a>
        </div>
        </form>
        <?php
    }
?>
</body>
</html>