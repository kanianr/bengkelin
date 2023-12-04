<html lang="en">
    
    <!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bengkelin</title>
    <link rel="stylesheet" href="login.css">
    <style type="text/css">
        
.alert {
  padding: 0.40rem 1.25rem;
  margin-bottom: 5px;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  margin: 5px;
}

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
  margin-bottom: -50px;
}
    </style>
</head>

<body>
    <div class="container">
        <div class="login">
            <h1>Login</h1>
            <hr>
            <h2>BENGKELIN</h2>
            <?php 
                include "koneksi.php";
                session_start();

                if($_POST['login'] == "login") {
                    $username = $_POST['username'];
                    $password = sha1($_POST['password']);

                    $query = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE username='$username'");
                    $cek = mysqli_num_rows($query);
                    $data = mysqli_fetch_assoc($query);

                     if($cek > 0) {
                        if($data['password']==$password) {
                            $_SESSION['username'] = $data['username'];

                            header("location: reservasi.php");
                        }
                        else {
                            echo "<div class=\"alert alert-danger\">Password salah!!!</div>";
                        }
                    }
                    else {
                        echo "<div class=\"alert alert-danger\">Username salah!!!</div>";
                    }
                }

            ?>
            <form action="" method="POST">
                <label for="">Username</label>
                <input type="text" placeholder="Username" name="username">
                <label for="">Password</label>
                <input type="password" id="password" name="password" placeholder="password">
                <div style="float: left; display: block;  width: 100%">
                    <input type="checkbox" id="showPassword" onclick="togglePasswordVisibility()" style="width: 10px">
                    <small for="showPassword">Show Password</small>
                </div>
                
                <button name="login" value="login">Login</button>
                <p>
                    <a href="index.php">Kembali</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="image/image.jpeg" alt="">
        </div>
    </div>
<script>
  function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var showPasswordCheckbox = document.getElementById("showPassword");

    if (showPasswordCheckbox.checked) {
      passwordInput.type = "text";
    } else {
      passwordInput.type = "password";
    }
  }
</script>
</body>

</html>