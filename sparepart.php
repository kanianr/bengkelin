<html>
<body>
    <head>
    <title>BENGKELIN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: 'alata';
        }

        .container{
            max-width: 1200px;
            width: 90%;
            margin: auto;
        }
        span{
            color:rgb(120, 120, 250);
        }

        .nav-menu{
                text-decoration: none;
                color: black;
                padding: 20px;   
        }
        .row{
            display: flex;
            flex-wrap: wrap;
        }

        @for $i from 1 through 12{
            .col#{$i}{
                width: (100%/ 12/$i ) - 3%;
                margin: 1.5%;
            }
        }

        .nav-container{
            max-width: 1200px;
            width: 90%;
            margin: 0 auto;
        }

        header{
            padding: 20px;
        }

        .nav{
            display: flex;
            flex-wrap: wrap;
            margin: 0 1.5%;
            justify-content: space-between;
            align-items: center;
        }

        a{
            text-decoration: none;
            color: black;
            margin-left: 15px;
        }

        .btn{
            background-color: black;
            color: rgb(249, 249, 250);
            display: inline-block;
            padding: 10px 30px;
            border-radius: 30px;
            text-decoration: none;
            margin-left: 2px;
        }
            img{
                height: 187px;
                margin-top: 20px;
                margin-right: 40px;
                margin-left: 35px;
                margin-bottom: 20px;
            }
            h2{
                font-size: 30px;
                color: beige;
            }
            .table1{
                position: absolute;
                width: 40%;
                height: 200px;
                margin-top: 50px;
                margin-left : 90px;
            }
            td{
                align-items: center;
                width: 2%;
                color: rgb(0, 8, 6);
                height: 50px;
            }
            .footer{
                padding: 30px 0;
                background: linear-gradient(rgb(226, 236, 250), rgb(151, 235, 230));;
                color: rgb(0, 8, 6);
                text-align: center;
                margin-top: 1500px;
                }

            .footer span{
                color: rgb(0, 8, 6);
                position: space-between;
                margin-bottom: -100px;
            }

            .contact-info{
                float: right;
            }

            .contact-form{
                float: left;
                margin-top: 70px;
                margin-bottom: 1px;
                margin-left: 600px;
            }
        </style>
</head>
<body>
    <div class="header">
        <div class="nav-container">
            <div class="nav">
                <div class="nav-brand">
                <h1><a href="">BENGKEL<span>IN</span></a></h1>
                </div>  
                <div class="nav-menu">
                    <a href="index.php">Home</a>
                    <a href="about.php">About</a>
                    <a href="sparepart.php">Sparepart</a>
                    <a href="booking.php">Reservasi</a>
                </div>
                <div class="profile">
                    <a href="login.php" class="btn">Login</a>
                    <a href="registrasi.php" class="btn">Register</a>
                </div>
            </div>
        </div>
    </div>

<div class="table1">
<table align="center">
        <tr>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="image/download (1).jpg" /></td></tr>
        <tr><td colspan="2" align="center">OLI GARDAN YAMALUBE</td></tr>
        <tr><td align="center">Rp 20.000</td><td align="center">Stock : 5</td>
        </table>
        </td>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="https://sinarmotor.com/assets/images//sparepart/thumbnail/sinarmotor-3e738-YAMALUBE_MATIC_0.8_Ltr.png" /></td></tr>
        <tr><td colspan="2" align="center">OLI YAMALUBE MATIC 0.8 Ltr</td></tr>
        <tr><td align="center">Rp 38.000</td><td  align="center">Stock : 6</td></tr>
        </table>
        </td>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="https://sinarmotor.com/assets/images//sparepart/thumbnail/sinarmotor-a4aa3-OLI_FLICK_FEDERAL_MATIC.png" /></td></tr>
        <tr><td colspan="2" align="center">OLI FLICK FEDERAL MATIC</td></tr>
        <tr><td align="center">Rp 38.000</td><td align="center">Stock : 10</td>
        </table>
        </td>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="https://sinarmotor.com/assets/images//sparepart/thumbnail/sinarmotor-96e39-OLI_GARDAN_AHM_HONDA.jpg" /></td></tr>
        <tr><td colspan="2" align="center">OLI GARDAN AHM HONDA</td></tr>
        <tr><td align="center">Rp 20.000</td><td align="center">Stock : 13</td>
        </table>
        </td>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="https://sinarmotor.com/assets/images//sparepart/thumbnail/sinarmotor-06ca7-OLI_YAMALUBE_4T_SPORT.jpg" /></td></tr>
        <tr><td colspan="2" align="center">OLI YAMALUBE 4T SPORT</td></tr>
        <tr><td align="center">Rp 45.000</td><td  align="center">Stock : 12</td></tr>
        </table>
        </td>
        </tr>
        <tr>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="https://sinarmotor.com/assets/images//sparepart/thumbnail/sinarmotor-4b2c5-OLI_SUPREME_XX_0.8_LTR.jpg" /></td></tr>
        <tr><td colspan="2" align="center">OLI SUPREME XX 0.8 LTR</td></tr>
        <tr><td align="center">Rp 38.000</td><td  align="center">Stock : 8</td></tr>
        </table>
        </td>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="https://sinarmotor.com/assets/images//sparepart/thumbnail/sinarmotor-e950c-OLI_SUPREME_ULTRATEC_0.8_LTR.png" /></td></tr>
        <tr><td colspan="2" align="center"> OLI SUPREME ULTRATEC 0.8 LTR </td></tr>
        <tr><td align="center">Rp 36.000</td><td align="center">Stock : 11</td></tr>
        </table>
        </td>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="https://sinarmotor.com/assets/images//sparepart/thumbnail/sinarmotor-f2a1a-OLI_SHELL_ADVANCE_SCOOTER.jpg" /></td></tr>
        <tr><td colspan="2" align="center">OLI SHELL ADVANCE SCOOTER</td></tr>
        <tr><td align="center">Rp 45.000</td><td align="center">Stock : 6</td>
        </table>
        </td>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="https://sinarmotor.com/assets/images//sparepart/thumbnail/sinarmotor-bf42c-OLI_SHELL_ADVANCE_AX5.jpg"></td></tr>
        <tr><td colspan="2" align="center">OLI SHELL ADVANCE AX5</td></tr>
        <tr><td align="center">Rp 38.000</td><td align="center">Stock : 9</td></tr>
        </table>
        </td>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="image/mesran.jpg" /></td></tr>
        <tr><td colspan="2" align="center">OLI MESRAN SUPER 1 LTR</td></tr>
        <tr><td align="center">Rp 35.000</td><td align="center">Stock : 10</td>
        </table>
        </td>
        </tr>
        <tr>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="https://sinarmotor.com/assets/images//sparepart/thumbnail/sinarmotor-294b1-OLI_AHM_MPX_2_MATIC.jpg" /></td></tr>
        <tr><td colspan="2" align="center">OLI AHM MPX 2</td></tr>
        <tr><td align="center">Rp 45.000</td><td align="center">Stock : 6</td></tr>
        </table>
        </td>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="https://sinarmotor.com/assets/images//sparepart/thumbnail/sinarmotor-e6936-OLI_YAMALUBE_4T_SJ_SILVER.jpg" /></td></tr>
        <tr><td colspan="2" align="center">OLI YAMALUBE 4T SJ SILVER</td></tr>
        <tr><td align="center">Rp 37.000</td><td  align="center">Stock : 10</td></tr>
        </table>
        </td>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="https://sinarmotor.com/assets/images//sparepart/thumbnail/sinarmotor-987f4-OLI_SGO_4T_0.8_LTR.jpg" /></td></tr>
        <tr><td colspan="2" align="center"> OLI SGO 4T 0.8 LTR </td></tr>
        <tr><td align="center">Rp 36.000</td><td align="center">Stock : 2</td></tr>
        </table>
        </td>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="https://sinarmotor.com/assets/images//sparepart/thumbnail/sinarmotor-c8163-OLI_VALVOLINE_CHAMP.jpg" /></td></tr>
        <tr><td colspan="2" align="center">OLI VALVOLINE CHAMP</td></tr>
        <tr><td align="center">Rp 45.000</td><td align="center">Stock : 7</td>
        </table>
        </td>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="https://sinarmotor.com/assets/images//sparepart/thumbnail/sinarmotor-94647-OLI_VALVOLINE_4T_1_Liter.jpg" /></td></tr>
        <tr><td colspan="2" align="center">OLI VALVOLINE 4T 1 LITER</td></tr>
        <tr><td align="center">Rp 60.000</td><td align="center">Stock : 10</td>
        </table>
        </td>
        </tr>
        <tr>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="https://sinarmotor.com/assets/images//sparepart/thumbnail/sinarmotor-75c4f-OLI_SGO_4T_1_ltr.jpg" /></td></tr>
        <tr><td colspan="2" align="center">OLI SGO 4T 1 Ltr</td></tr>
        <tr><td align="center">Rp 40.000</td><td  align="center">Stock : 4</td></tr>
        </table>   
        </td>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="https://sinarmotor.com/assets/images//sparepart/thumbnail/sinarmotor-0b8a6-KAMPAS_REM_AHM_VARIO_4130-KZL.jpg" /></td></tr>
        <tr><td colspan="2" align="center">KAMPAS REM AHM VARIO 4130 KZL</td></tr>
        <tr><td align="center">Rp 50.000</td><td align="center">Stock : 18</td>
        </table>
        </td>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="https://sinarmotor.com/assets/images//sparepart/thumbnail/sinarmotor-ee683-KAMPAS_REM_DEPAN_CAKRAM_KR3.jpg" /></td></tr>
        <tr><td colspan="2" align="center">KAMPAS REM DEPAN CAKRAM KR3</td></tr>
        <tr><td align="center">Rp 65.000</td><td align="center">Stock : 3</td>
        </table>
        </td>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="https://sinarmotor.com/assets/images//sparepart/thumbnail/sinarmotor-0a670-KAMPAS_REM_BELAKANG_MIO.jpg" /></td></tr>
        <tr><td colspan="2" align="center">KAMPAS REM BELAKANG MIO</td></tr>
        <tr><td align="center">Rp 65.000</td><td align="center">Stock : 5</td>
        </table>
        </td>
        <td>
        <table border="1">
        <tr><td colspan="2" align="center"><img src="image/BAN.jpg" /></td></tr>
        <tr><td colspan="2" align="center">BAN LUAR BELAKANG HONDA KTM</td></tr>
        <tr><td align="center">Rp 165.000</td><td align="center">Stock : 9</td>
        </table>
        </td>
        </tr>
        </table>
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
</body>
</html>