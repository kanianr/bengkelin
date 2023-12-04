
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
    background-color: #ffffffcb;
    margin: 12% auto;
    padding: 50px 0;
    color: #222221;
    box-shadow: 0 0 20px 2px rgba(0,0,0,0.5);
    text-align: center;
    font-weight: bolder;
}
h1{
    text-align: center;
    margin-bottom: 10px;
}
.input-box{
    margin: 31px auto;
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
}

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
}


</style>
<body>
    <div class="form-box">
<h1>Daftar Akun</h1>
<?php 
    include "koneksi.php";
    // print_r($_POST);

    if($_POST['button'] == "add") {
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];

        $sql = "INSERT INTO pelanggan (nama, jk, username, password, no_telp, alamat) VALUES ('$nama', '$jk', '$username', '$password', '$no_telp', '$alamat')";
        $query = mysqli_query($koneksi, $sql);

        if($query) {
            echo "<div class=\"alert alert-success \">Anda berhasil melakukan register, silahkan login <a href='login.php'>disini!!</a></div>";
        }
        else {
            echo "<div class=\"alert alert-danger \">Gagal melakukan registrasi, username mungkin sudah pernah melakukan registrasi sebelumnya</div>";
        }
    }
?>

    <form class="uk-form-stacked" action="" method="POST">
        <div class="input-box">
            <label>Nama Lengkap :</label>
                <input type="text" name="nama" maxlength="30" required>
            <br><br>    
            <label>Jenis Kelamin :</label>
            <select name="jk">
                <option name="laki-laki">Laki-Laki</option>
                <option name="perempuan">Perempuan</option>
            </select>
            <br><br>
            <label>Username : </label>
                <input type="text" name="username" maxlength="30" required>
                   <!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Hanya huruf dan angka, dan harus terdiri dari 6 atau lebih karakter"-->
            <br><br>
                   <label>Password :</label>
                <input type="password" name="password" autocomplete="off" maxlength="15"  required>
                <!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"-->
            <br><br>
            <label>Nomor Telepon :</label>
                <input type="text" name="no_telp" maxlength="15" required>
            <br><br>
            <label>Alamat :</label>
            <textarea class="uk-textarea" rows="3" name="alamat" maxlength="50" required></textarea>
            <br><br>
            <button class="uk-button uk-button-primary" type="submit" name="button" value="add"><b>Simpan</b></button>
        </div>
        </form>
        Silahkan Login <a href="login.php"><b>Disini</b></a>
       
</body>
</html>