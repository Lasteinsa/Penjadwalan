<?php
include 'header.php';
?>

<head>
    <title>Home</title>
</head>

<body>
    <div class="ml-5 mt-5 mb-5">
        <center>
            <h2>Edit Jadwal Kuliah</h2>
            <hr style="color: blue; width: 80%;">
            <br>
        </center>
        <form method="POST" action="/Stella/update" class="border border-primary rounded px-5 py-5 mx-auto" style="width: 50%;">
            <div class="form-group">
                <label>Kode Matakuliah</label>
                <input type="text" class="form-control" placeholder="KP01" name="kodemtk" value="<?= $jadwal->kodemtk; ?>" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Nama Matakuliah</label>
                <input type="text" class="form-control" placeholder="Pemrograman Web" name="namamtk" value="<?= $jadwal->namamtk; ?>" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Nama Dosen</label>
                <input type="text" class="form-control" placeholder="Einsa Rosasineinsa" name="namadosen" value="<?= $jadwal->namadosen; ?>" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Ruang</label>
                <input type="text" class="form-control" placeholder="7.3.2" name="ruang" value="<?= $jadwal->ruang; ?>" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Kelompok</label>
                <input type="text" class="form-control" placeholder="AB" name="kelas" value="<?= $jadwal->kelompok; ?>" required autocomplete="off">
            </div>
            <div class="form-group">
                <label class="form-label">Hari</label>
                <select class="required form-select" name="hari" required>
                    <option value="Senin" <?php echo ($jadwal->hari ? 'Senin' : 'selected'); ?>>Senin</option>
                    <option value="Selasa" <?php echo ($jadwal->hari ? 'Selasa' : 'selected'); ?>>Selasa</option>
                    <option value="Rabu" <?php echo ($jadwal->hari ? 'Rabu' : 'selected'); ?>>Rabu</option>
                    <option value="Kamis" <?php echo ($jadwal->hari ? 'Kamis' : 'selected'); ?>>Kamis</option>
                    <option value="Jumat" <?php echo ($jadwal->hari ? 'Jumat' : 'selected'); ?>>Jumat</option>
                    <option value="Sabtu" <?php echo ($jadwal->hari ? 'Sabtu' : 'selected'); ?>>Sabtu</option>
                    <option value="Minggu" <?php echo ($jadwal->hari ? 'Minggu' : 'selected'); ?>>Minggu</option>
                </select>
            </div>
            <div class="form-group">
                <label>Mulai</label>
                <input type="time" class="form-control" placeholder="" name="mulai" value="<?= $jadwal->mulai; ?>" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Selesai</label>
                <input type="time" class="form-control" placeholder="" name="selesai" value="<?= $jadwal->selesai; ?>" required autocomplete="off">
            </div>
            <div class="form-group">
                <label class="form-label">Fakultas</label>
                <select class="required form-select" name="fakultas" required>
                    <option value="FTI" <?php echo ($jadwal->fakultas ? 'FTI' : 'selected'); ?>>Fakultas Teknologi Informasi</option>
                    <option value="AS" <?php echo ($jadwal->fakultas ? 'AS' : 'selected'); ?>>Akademi Sekretari</option>
                    <option value="FEB" <?php echo ($jadwal->fakultas ? 'FEB' : 'selected'); ?>>Fakultas Ekonomi dan Bisnis</option>
                    <option value="FISIP" <?php echo ($jadwal->fakultas ? 'FISIP' : 'selected'); ?>>Fakultas Ilmu Sosial dan Ilmu Politik</option>
                    <option value="FT" <?php echo ($jadwal->fakultas ? 'FT' : 'selected'); ?>>Fakultas Teknik</option>
                    <option value="FIKOM" <?php echo ($jadwal->fakultas ? 'FIKOM' : 'selected'); ?>>Fakultas Ilmu Komunikasi</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Lokasi</label>
                <select class="required form-select" name="tempat" required>
                    <option value="Reguler Pusat" <?php echo ($jadwal->tempat ? 'Regular Pusat' : 'selected'); ?>>Regular Pusat</option>
                    <option value="Karyawan Pusat" <?php echo ($jadwal->tempat ? 'Karyawan Pusat' : 'selected'); ?>>Karyawan Pusat</option>
                    <option value="Roxy" <?php echo ($jadwal->tempat ? 'Roxy' : 'selected'); ?>>Roxy</option>
                    <option value="Salemba" <?php echo ($jadwal->tempat ? 'Salemba' : 'selected'); ?>>Salemba</option>
                </select>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <textarea type="text" class="form-control" placeholder="Kelas Pengganti" name="keterangan" required autocomplete="off"><?= $jadwal->keterangan; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="min-width: 50px;">Submit</button>
        </form>
    </div>
</body>