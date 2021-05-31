<?php
include 'header.php';
?>

<head>
    <title>Show</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="ml-5 mt-5 mb-5">
        <center>
            <h2>Semua Jadwal yang Tersedia</h2>
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
            <td>Action</td>
        </tr>
        <?php foreach ($matakulias as $q) { ?>
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
                <td><a href="stella/delete/<?= $q->kodemtk; ?>" class="badge bg-danger" onclick="return confirm('Delete?')"> Delete </a>
                    <a href="stella/edit/<?= $q->kodemtk; ?>" class="badge bg-warning"> Edit </a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>