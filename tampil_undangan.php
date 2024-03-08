<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Kehadiran</title>

    <link href="../registrasi/css/bootstrap.min.css" rel="stylesheet">
    <link href="../registrasi/css/bootstrap-grid.css" rel="stylesheet">
    <link href="../registrasi/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="../registrasi/js/bootstrap.min.js" rel="stylesheet">
    <link href="../registrasi/js/jquery-3.5.1.min.js" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Russo One">
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
        left: 500px;
        top: -30px;
    }

    .logo2 {
        position: absolute;
        left: 400px;
        top: -20px;
    }

    .logo3 {
        position: absolute;
        left: 555px;
        top: 150px;
    }

    .kuponUndian {
        position: absolute;
        left: 1100px;
        top: 5px;
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
        font-family: "Russo One", sans-serif;
        /* text-decoration: underline; */
        font-weight: 200;
        font-size: 50px;
        color: #eab301;
        -webkit-text-stroke-width: 2px;
        -webkit-text-stroke-color: black;
        text-shadow: 0px 0px 26px #ffffff
    }

    .h3fontWelcome {
        position: absolute;
        top: 240px;
        left: 270px;
    }

    .h3fontTamu {
        position: absolute;
        top: 290px;
        left: 550px;
    }

    .fontTko {
        position: relative;
        top: 370px;
        text-align: center;
    }

    .fontTko1 {
        text-align: center;
        margin-top: -10px;
    }

    .button {
        position: absolute;
        top: 550px;
        left: 480px;

        background-color: #eab301;
        width: 30%;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 8px;
        transition-duration: 0.4s;
    }

    .button1 {
        background-color: #eab301;
        color: white;
    }

    .button1:hover {
        background-color: #eab301;
        /* Green */
        color: black;
    }
</style>

<body>
    <div class="page-header" style="margin: top 10px;">
        <img src="img/Karisma.png" class="logo1" height="150px" width="350px" alt="">
        <img src="img/extra.png" class="logo2" height="300px" width="550px" alt="">
        <img src="img/2022.png" class="logo3" height="125px" width="250px" alt="">
    </div>
    <?php
    include 'config.php';
    $id = $_GET['qrcode'];
    $sql = mysqli_query($conn, "select * from tb_undangan where id_kios = '$id' ");
    while ($d = mysqli_fetch_array($sql)) {
    ?>
        <h3 class="h3FontCus h3fontWelcome">Selamat Datang Tamu Undangan</h3>
        <h3 class="h3FontCus h3fontTamu">Bapak / Ibu</h3>
        <form method="post" id="form_hadir" class="form-inline justify-content-center">
            <input type="text" name="id_kios" id="id_kios" value="<?php echo $d['id_kios'] ?>" style="border:none;text-align:center" hidden />
            <input type="text" name="asal_kota" id="asal_kota" value="<?php echo $d['asal_kota'] ?>" style="border:none;text-align:center" hidden />
            <input type="text" name="nama_owner" id="nama_owner" value="<?php echo $d['nama_owner'] ?>" style="border:none;text-align:center" hidden />
            <input type="text" name="nama_kios" id="nama_kios" value="<?php echo $d['nama_kios'] ?>" style="border:none;text-align:center" hidden />
            <input type="text" name="status" id="status" value="1" style="border:none;text-align:center" hidden />

            <button type="submit" name="simpan" id="btnSimpan" class="button button1">Simpan Kehadiran</button>
        </form>

        <div class="fontTko">

            <h3 class="h3FontCus "><?php echo $d['nama_owner'] ?></h3>
            <h3 class="h3FontCus fontTko1"><?php echo $d['nama_kios'] ?></h3>
            <h3 class="h3FontCus fontTko1"><?php echo $d['asal_kota'] ?></h3>
        </div>

    <?php } ?>

    <script type="text/javascript">
                   $('#btnSimpan').click(function() {

                $("#form_hadir").submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: 'simpanKehadiran.php',
                        type: 'post',
                        data: $(this).serialize(),
                        success: function(data) {
                            window.location.href ="index.php"
                        }
                    });
                })
            });
    </script>

</body>



</html>