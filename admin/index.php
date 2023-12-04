<?php 
    session_start();
    if($_SESSION['username']=="") { header("location: login.php"); }
?>
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


.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb;
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
    <h1 align='center'>DATA RESERVASI</h1>
    <?php 
    include "../koneksi.php";
        if($_GET['edit']=="yes") {
            echo "<div class=\"alert alert-success\">Berhasil edit data</div>";
        }
        else if($_GET['edit']=="no") {
            echo "<div class=\"alert alert-danger\">Gagal edit data</div>";
        }
    ?>
    
    <center>
    </center>
    <table border="1" width='55%' cellpadding='5' align='center'>
        <tr align='center'>
            <th>NO</th>
            <th>TANGGAL</th>
            <th>WAKTU</th>
            <th>NAMA</th>
            <th>NO HP</th>
            <th>TIPE MOTOR</th>
            <th>LAYANAN</th>
            <th>CATATAN</th>
            <th>STATUS</th>
            <th>AKSI</th>
        </tr>
        <?php
            include "koneksi.php";
            $query = mysqli_query($koneksi, "SELECT * FROM reservasi");
            $no = 1;
            while ($data = mysqli_fetch_assoc($query)){
            ?>
            <tr align='center'>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['tgl'];?></td>
                <td><?php echo $data['waktu'];?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['no_hp'];?></td>
                <td><?php echo $data['tp_motor'];?></td>
                <td><?php echo $data['layanan'];?></td>
                <td><?php echo $data['catatan'];?></td>
                <td><?php echo $data['status'];?></td>
                <td width='20%'>
                <div align='center'>
                  <a href="reservasi_edit.php?id=<?=$data['id']?>"><img src="images/edit.png" width='15%'></a>
                  <a href="hapus.php?id=<?=$data['id']?>&table=reservasi" onclick="return confirm('Apakah anda yakin ingin menghapus?')"><img src="images/hapus.png" width='20%'></a>
                </div>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
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