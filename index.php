<!DOCTYPE html>
<html lang="en">
<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Kehadiran</title>

    <link href="../registrasi/css/bootstrap.min.css" rel="stylesheet">
    <link href="../registrasi/css/bootstrap-grid.css" rel="stylesheet">
    <link href="../registrasi/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="../registrasi/js/bootstrap.min.js" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DynaPuff">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<style>
    body {
        background-image: url("img/bg.png");
        background-repeat: no-repeat;
        background-size: cover;
    }

    .logo1 {
        position: absolute;
        left: 430px;
        top: -30px;
    }

    .logo2 {
        position: absolute;
        left: 280px;
        top: -20px;
    }

    .logo3 {
        position: absolute;
        left: 525px;
        top: 200px;
    }

    .form_id {
        position: absolute;
        top: 450px;
        left: 420px;

    }

    .form-control-lg {
        height: 50px;
        width: 500px;
    }

    .h3FontCus {
        font-family: "DynaPuff", sans-serif;
        /* text-decoration: underline; */
        font-weight: bold;
        font-size: 50px;
        position: absolute;
        top: 360px;
        left: 300px;
        color: #eab301;
        -webkit-text-stroke-width: 0.1px;
        -webkit-text-stroke-color: black;
        text-shadow: 0px 0px 26px #ffffff
    }
</style>

<body>
    <div class="page-header" style="margin: top 10px;">
        <img src="img/Karisma.png" class="logo1" height="200px" width="500px" alt="">
        <img src="img/extra.png" class="logo2" height="400px" width="800px" alt="">
        <img src="img/2022.png" class="logo3" height="150px" width="300px" alt="">
    </div>

    <h3 class="h3FontCus">SCAN QRCODE UNDANGAN ANDA</h3>
    <div class="form_id">
        <div class="row">
            <div class="col">
                <form action="tampil_undangan.php">
                    <input class="form-control form-control-lg" name="qrcode" type="text" placeholder="" autocomplete="off">
                </form>
            </div>
        </div>
    </div>
</body>

</html>