<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BENGKELIN</title>
    <link rel="stylesheet" href="booking.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="header">
        <div class="nav-container">
            <div class="nav">
                <div class="nav-brand">
                <h1><a href="index.php">BENGKEL<span>IN</span></a></h1>
                </div>  
                <div class="nav-menu">
                    <a href="index.php">Home</a>
                    <a href="about.php">About</a>
                    <a href="sparepart.php">Sparepart</a>
                    <a href="booking.php">Reservasi</a>
                </div>
                <div class="profile">
                    <a href="registrasi.php" class="btn">Register</a>
                </div>
            </div>
        </div>
    </div>
    <div calss="hero">
        <div class="container">
            <?php
            // session_start();
            //  print_r($_SESSION); 
             ?>
            <div class="row">
                <div class="col6">
                    <div class="hero-desc">
                        <h2>Selamat datang member, silahkan login untuk reservasi!</h2>
                            
                        <p><a href="login.php" class="btn2">Login</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- <table width="100%" border="1" >
                <tr>
                    <th>No</th>
                    <th>Waktu Pengajuan</th>
                    <th>Atas nama</th>
                    <th>Tipe Motor</th>
                    <th>Layanan</th>
                    <th>Catatan</th>
                    <th>Status</th>
                </tr>
            </table> -->
        </div>
    </div>
    <footer>
    <div class="footer">
    <div class="text-container">
                <h3>For More Information</h3>
                <br>
                <div><i class="fa-solid fa-location-dot"></i> KH. Zaenal Mustafa, Tasikmalaya, Indonesia</div><br>
                <div><i class="fa-solid fa-envelope"></i> Bengkelin@gmail.com</div><br>
                <div><i class="fa fa-phone"></i> +62 8734657638738</div><br>
                <div><i class="fa fa-clock"></i> Monday - Friday 08:00 AM to 05:00 PM</div><br>
                <br>
                <small>
				<span class="clearfix"> Bengkelin</span>
				<span class="clearfix"> Jalan KH. Zaenal Mustafa No. 46 Cihideung, Tasikmalaya. </span>
				<span class="footer_copy_text">Copyright &copy; 2023  bengkelin.com - Developed by Team IT bengkelin</span>
                </small>

    </div>
    </div>
    </footer>
</body>
</html>