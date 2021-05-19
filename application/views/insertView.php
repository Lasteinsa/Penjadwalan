<?php
include 'header.php';
?>

<head>
    <title>Home</title>
</head>

<body>
    <div class="ml-5 mt-5 mb-5">
        <center>
            <h2>Masukkan Jadwal Kuliah</h2>
            <hr style="color: blue; width: 80%;">
            <br>
        </center>
        <form method="POST" action="/Stella/uAdd" class="border border-primary rounded px-5 py-5 mx-auto" style="width: 50%;">
            <div class="form-group">
                <label>Kode Matakuliah</label>
                <input type="text" class="form-control" placeholder="KP01" name="kodemtk" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Nama Matakuliah</label>
                <input type="text" class="form-control" placeholder="Pemrograman Web" name="namamtk" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Nama Dosen</label>
                <input type="text" class="form-control" placeholder="Einsa Rosasineinsa" name="namadosen" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Ruang</label>
                <input type="text" class="form-control" placeholder="7.3.2" name="ruang" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Kelompok</label>
                <input type="text" class="form-control" placeholder="AB" name="kelas" required autocomplete="off">
            </div>
            <div class="form-group">
                <label class="form-label">Hari</label>
                <select class="required form-select" name="hari" required>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                </select>
            </div>
            <div class="form-group">
                <label>Mulai</label>
                <input type="time" class="form-control" placeholder="" name="mulai" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Selesai</label>
                <input type="time" class="form-control" placeholder="" name="selesai" required autocomplete="off">
            </div>
            <div class="form-group">
                <label class="form-label">Fakultas</label>
                <select class="required form-select" name="fakultas" required>
                    <option value="FTI">Fakultas Teknologi Informasi</option>
                    <option value="AS">Akademi Sekretari</option>
                    <option value="FEB">Fakultas Ekonomi dan Bisnis</option>
                    <option value="FISIP">Fakultas Ilmu Sosial dan Ilmu Politik</option>
                    <option value="FT">Fakultas Teknik</option>
                    <option value="FIKOM">Fakultas Ilmu Komunikasi</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Lokasi</label>
                <select class="required form-select" name="tempat" required>
                    <option value="Reguler Pusat">Regular Pusat</option>
                    <option value="Karyawan Pusat">Karyawan Pusat</option>
                    <option value="Roxy">Roxy</option>
                    <option value="Salemba">Salemba</option>
                </select>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <textarea type="text" class="form-control" placeholder="Kelas Pengganti" name="keterangan" required autocomplete="off"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="min-width: 50px;">Submit</button>
        </form>
    </div>
</body>