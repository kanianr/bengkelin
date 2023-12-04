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
</head>
<body>
    <?php include "header.php"; ?>
    <!-- banner section start -->
    <div class="body_section">
    <h1 align='center'>Tambah Data Member</h1>
    <?php 
    include "../koneksi.php";
    $id = $_GET['id'];

    if($_POST['button'] == "add") {
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];
        if($password != "") {
            $password = ", password='$password'";
        }
        else {
            $password = "";
        }

        $sql = "UPDATE pelanggan SET nama = '$nama', jk = '$jk', username = '$username' $password , no_telp = '$no_telp', alamat = '$alamat' WHERE id = '$id'";
        $query = mysqli_query($koneksi, $sql);

        if($query) {
            header("location:pelanggan.php?edit=yes");
        }
        else {
            echo "<div class=\"alert alert-danger \">Gagal menambahkan data!!, <br> Email sudah terdaftar</div>";
        }
    }

    $query = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id='$id'");
    $data = mysqli_fetch_assoc($query);
    ?>
    <br>
    <div class="input-box">
        <form method="POST" action="" align="center">
            <label>Nama Lengkap :</label>
                <input type="text" name="nama" maxlength="30" required value="<?=$data['nama']?>">
            <br><br>    
            <label>Jenis Kelamin :</label>
            <input type="radio" name="jk" value="Laki-laki" <?php if($data['jk']=="Laki-laki") { echo "checked"; } ?>> Laki-laki
            <input type="radio" name="jk" value="Perempuan" <?php if($data['jk']=="Perempuan") { echo "checked"; } ?>> Perempuan
            <br><br>
            <label>Username : </label>
                <input type="text" name="username" maxlength="30" required value="<?=$data['username']?>">
                   <!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Hanya huruf dan angka, dan harus terdiri dari 6 atau lebih karakter"-->
            <br><br>
                   <label>Password :</label>
                <input type="password" name="password" autocomplete="off" maxlength="15"> <br>
                <small style="color: red;">* isi jika ingin merubah password</small>
                <!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"-->
            <br><br>
            <label>Nomor Telepon :</label>
                <input type="text" name="no_telp" maxlength="15" required value="<?=$data['no_telp']?>">
            <br><br>
            <label>Alamat :</label>
            <textarea class="uk-textarea" rows="3" name="alamat" maxlength="50" required> <?=$data['alamat']?></textarea>
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