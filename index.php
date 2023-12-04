<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BENGKELIN</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style type="text/css">
        
    .popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 300px;
      padding: 20px;
      background-color: #f2f2f2;
      border: 1px solid #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    </style>
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
                    <a href="login.php" class="btn">Login</a>
                </div>
            </div>
        </div>
    </div>
    <div calss="hero">
        <div class="container">
            <div class="row">
                <div class="col6">
                    <div class="hero-desc">
                        <h2>Bengkelin aja!</h2>
                        <p>Jasa perbaikan dan perawatan motor dengan kualitas tinggi dan harga yang terjangkau.</p>
                        <p>Solusi service tanpa antri, reservasi service mudah hanya disini.</p>
                        <p>Silahkan tekan register untuk menjadi member!</p><br>
                        <p><a href="registrasi.php" class="btn">Register</a></p>
                    </div>
                </div>
                <div class="right">
                    <img src="image/image.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="titles">
            <h1>Panduan</h1>
    </div>
    <div class="services">
        <div class="card card-1">
            <div class="icon">
                <i class="fas fa-handshake"></i>
            </div>
            <h2>Layanan</h2>
            <p>Klik untuk melihat layanan kami</p>
            <a href="#popup1" class="buttons"  onclick="showPopup('popup1')">Read More</a>
        </div>
        <div class="card card-2">
            <div class="icon">
                <i class="fas fa-calendar"></i>
            </div>
            <h2>Reservasi</h2>
            <p>Klik untuk melihat panduan reservasi</p>
            <a href="#popup2" class="buttons"  onclick="showPopup('popup2')">Read More</a>
        </div>
        <div class="card card-3">
            <div class="icon">
                <i class="fas fa-wrench"></i>
            </div>
            <h2>Service</h2>
            <p>Klik untuk melihat panduan service</p>
            <a href="#popup3" class="buttons"  onclick="showPopup('popup3')">Read More</a>
        </div>
    </div>
    <div class="popup" id="popup1">
        <p><b>Panduan Layanan</b></p>
        <p>1. Jasa perbaikan motor</p>
        <p>2. Jasa perawatan motor</p>
        <p>3. Penjualan Sparepart</p>
        <p>4. Pemasangan Sparepart</p>
        <br>
    <button class="buttons" onclick="hidePopup('popup1')">Tutup</button>
    </div>
    <div class="popup" id="popup2">
        <p><b>Panduan Reservasi</b></p>
        <p>1. Registrasi terlebih dahulu</p>
        <p>2. Login sebagai member</p>
        <p>3. Mengisi Form Reservasi</p>
        <p>4. Datang sesuai jadwal saat reservasi</p>
        <br>
    <button class="buttons" onclick="hidePopup('popup2')">Tutup</button>
    </div>
    <div class="popup" id="popup3">
        <p><b>Panduan Service</b></p>
        <p>1. Jika ingin service tanpa antri, maka diharuskan untuk reservasi terlebih dahulu</p>
        <p>2. Konsultasikan dengan mekanik terkait kendala kendaraan anda</p>
        <p>3. Tunggu proses service</p>
        <p>4. Bayar dan dapatkan struk di loket admin</p>
        <p>5. Selesai</p>
        <br>
    <button class="buttons" onclick="hidePopup('popup3')">Tutup</button>
    </div>

    <div class="titles">
    <h2>Gallery Bengkel</h2>
    </div>
    <div class="wrapper">
    <div class="slides">
        <span id="slide-1"></span>
        <span id="slide-2"></span>
        <span id="slide-3"></span>
        <span id="slide-4"></span>
    <div class="imeg">
    <img src="image/0.jpg">
    <img src="image/4.jpg">
    <img src="image/2.jpg">
    <img src="image/5.jpg">
    </div>
    </div>
    <div class="navigation">
        <a href="#slide-1">1</a>
        <a href="#slide-2">2</a>
        <a href="#slide-3">3</a>
        <a href="#slide-4">4</a>
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
                <div><i class="fa fa-clock"></i> Monday - Friday 08:00 PM to 05:00 AM</div><br>
                <br>
                <small>
				<span class="clearfix"> Bengkelin</span>
				<span class="clearfix"> Jalan KH. Zaenal Mustafa No. 46 Cihideung, Tasikmalaya. </span>
				<span class="footer_copy_text">Copyright &copy; 2023  bengkelin.com - Developed by Team IT bengkelin</span>
                </small>


    </div>
    </div>
    </footer>

  <script>
    function showPopup(popupId) {
      var popup = document.getElementById(popupId);
      popup.style.display = "block";
    }

    function hidePopup(popupId) {
      var popup = document.getElementById(popupId);
      popup.style.display = "none";
    }
  </script>
</body>
</html>