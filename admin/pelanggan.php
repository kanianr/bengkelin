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
<title>Admin</title>
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
</head>
<body>
    <?php include "header.php"; ?>
    <!-- banner section start -->
    <div class="body_section">
    <h1 align='center'>DATA MEMBER</h1>

    <?php 
    include "../koneksi.php";
        if($_GET['edit']=="yes") {
            echo "<div class=\"alert alert-success\">Berhasil edit data</div>";
        }
        else if($_GET['edit']=="no") {
            echo "<div class=\"alert alert-danger\">Gagal edit data</div>";
        }


        if($_GET['add']=="yes") {
            echo "<div class=\"alert alert-success\">Berhasil Tambah data</div>";
        }
        else if($_GET['add']=="no") {
            echo "<div class=\"alert alert-danger\">Gagal Tambah data</div>";
        }
    ?>
    <center>
    <form class="form-inline my-2 my-lg-0">
        <div align='center'><a href="tambah_data.php"><img src="images/TAMBAH.png" width='10%'>Tambah Data</a></div>
    </form>
    </center>
    <table border="1" width='55%' cellpadding='5' align='center'>
        <tr align='center'>
            <th>NO</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>USERNAME</th>
            <th>NO TELEPON</th>
            <th>ALAMAT</th>
            <th>AKSI</th>
        </tr>
        <?php
            include "koneksi.php";
            $query = mysqli_query($koneksi, "SELECT * FROM pelanggan");
            $no = 1;
            while ($data = mysqli_fetch_assoc($query)){
            ?>
            <tr align='center'>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['jk'];?></td>
                <td><?php echo $data['username'];?></td>
                <td><?php echo $data['no_telp'];?></td>
                <td><?php echo $data['alamat'];?></td>
                <td width='20%'>
                <div align='center'>
                  <a href="pelanggan_edit.php?id=<?=$data['id']?>"><img src="images/edit.png" width='15%'></a>
                  <a href="hapus.php?id=<?=$data['id']?>&table=pelanggan"  onclick="return confirm('Apakah anda yakin ingin menghapus?')"><img src="images/hapus.png" width='20%'></a>
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
    <!-- footer section start -->
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