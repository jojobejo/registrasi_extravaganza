<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../registrasi/css/bootstrap.min.css" rel="stylesheet">
    <link href="../registrasi/css/bootstrap-grid.css" rel="stylesheet">
    <link href="../registrasi/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="../registrasi/js/bootstrap.min.js" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../registrasi/DataTables/datatables.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>

    <title>list hadir</title>
</head>

<body>

    <section class="container">
        <div class="x-container">
            <div class="mt-2 mb-2">
                <button onclick="window.print()">print kehadiran</button>
            </div>
        </div>
        <center>

            <?php
            include 'config.php';
            $qhadir = " SELECT tb_undangan.*,tb_status.*
                        FROM tb_undangan
                        JOIN tb_status ON tb_status.id_status = tb_undangan.status";
            $no = 1;
            $hasil = mysqli_query($conn, $qhadir);
            ?>

            <div class="table">
                <table class="table table-bordered" id="tbhadir">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Kios</th>
                            <th>Nama Owner</th>
                            <th>Asal Kota</th>
                            <th>Status Kehadiran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($hasil)) :; ?>
                            <tr>
                                <th><?= $no++ ?></th>
                                <th><?= $row['nama_kios'] ?></th>
                                <th><?= $row['nama_owner'] ?></th>
                                <th><?= $row['asal_kota'] ?></th>
                                <th><?= $row['ket_status'] ?></th>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </center>
    </section>

</body>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tbhadir').DataTable();
    });
</script>


</html>