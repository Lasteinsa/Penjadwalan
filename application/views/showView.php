<?php
include 'header.php';
?>

<head>
    <title>Show</title>
</head>

<body>
    <div class="ml-5 mt-5 mb-5">
        <center>
            <h2>Jadwal Kuliah Universitas Budi Luhur</h2>
            <p>Pada Hari <?php setlocale(LC_TIME, 'id_ID');
                            echo strftime('%A'); ?> </p>
            <hr style="color: blue; width: 80%;">
        </center>
    </div>
    <table class="table table-striped table-hover">
        <tr>
            <td>Kode Matakuliah</td>
            <td>Nama Matakuliah</td>
            <td>Nama Dosen</td>
            <td>Ruang</td>
            <td>Kelas</td>
            <td>Hari</td>
            <td>Mulai</td>
            <td>Selesai</td>
            <td>Fakultas</td>
            <td>Tempat</td>
            <td>Keterangan</td>
        </tr>
        <?php foreach ($query as $q) { ?>
            <tr>
                <td><?php echo $q->kodemtk; ?></td>
                <td><?php echo $q->namamtk; ?></td>
                <td><?php echo $q->namadosen; ?></td>
                <td><?php echo $q->ruang; ?></td>
                <td><?php echo $q->kelas; ?></td>
                <td><?php echo $q->hari; ?></td>
                <td><?php echo $q->mulai; ?></td>
                <td><?php echo $q->selesai; ?></td>
                <td><?php echo $q->fakultas; ?></td>
                <td><?php echo $q->tempat; ?></td>
                <td><?php echo $q->keterangan; ?></td>
            </tr>
        <?php } ?>
    </table>
    <?php
    echo $this->pagination->create_links();
    ?>

</body>