<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BENGKELIN</title>
</head>
<body>
    
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>ADMIN</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<style type="text/css">
        
.alert {
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  margin: 5px;
}

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
}
    </style>
</head>
<body>
    <?php include "header.php"; ?>
    <!-- banner section start -->
    <div class="body_section">
    <h1 align='center'>Edit data reservasi</h1>
<?php 
    include "../koneksi.php";
    if($_POST['button']=="add") {
        $tgl = $_POST['tgl'];
        $waktu = $_POST['waktu'];
        $nama = $_POST['nama'];
        $no_hp = $_POST['no_hp'];
        $tp_motor = $_POST['tp_motor'];
        $layanan = $_POST['layanan'];
        $catatan = $_POST['catatan'];
        $id = $_POST['id'];
        $status = $_POST['status'];

        $sql = "UPDATE reservasi SET tgl = '$tgl', waktu = '$waktu', nama = '$nama', no_hp = '$no_hp', tp_motor = '$tp_motor', layanan = '$layanan', catatan = '$catatan', status = '$status' WHERE id ='$id'";

        $query = mysqli_query($koneksi, $sql);

        if($query) {
            header("location: index.php?edit=yes");
        }
        else {
            echo "<div class=\"alert alert-danger\">Gagal mengedit data!!</div>";
        }
    }

    $query = mysqli_query($koneksi, "SELECT * FROM reservasi WHERE id='$_GET[id]'");
    $data = mysqli_fetch_assoc($query);
?>
    <br>
    <div class="input-box">
        <form method="POST" action="" align="center">
            <input type="hidden" name="id" value="<?=$data['id']?>">
            <label>Tanggal :</label>
            <input type="date" maxlength="30" required name="tgl" value="<?=$data['tgl']?>">
            <br><br>    
            <label>Waktu :</label>
            <input type="time" maxlength="30" required name="waktu"  value="<?=$data['waktu']?>">
            <br><br>    
            <label>Atas Nama :</label>
            <input type="text" maxlength="30" required name="nama"  value="<?=$data['nama']?>">
            <br><br>   
            <label>No Hp :</label>
            <input type="text" maxlength="30" required name="no_hp"  value="<?=$data['no_hp']?>">
            <br><br>    
            <label>Tipe Motor :</label>
            <input type="text" maxlength="30" required name="tp_motor"  value="<?=$data['tp_motor']?>">
            <br><br>    
            <label>Layanan :</label>
            <input type="text" maxlength="30" required name="layanan"  value="<?=$data['layanan']?>">
            <br><br>    
            <label>Catatan :</label>
            <textarea rows="4" cols="14" name="catatan"><?=$data['catatan']?></textarea>
            <br><br>    
            <label>Status :</label>
            <input type="radio" name="status" value="belum selesai" <?php if($data['status']=="belum selesai") { echo "checked"; } ?>> Belum selesai 
            <input type="radio" name="status" value="sudah selesai"  <?php if($data['status']=="sudah selesai") { echo "checked"; } ?>> Sudah selesai
            <br><br>     
            
            <button class="uk-button uk-button-primary" type="submit" name="button" value="add"><b>Simpan</b></button>
        </div>
    </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php include "footer.php"; ?>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
</body>
</html>