<?php
include 'header.php';
?>

<head>
    <title>Home</title>
    <style>
        .uSelect {
            margin: 15px 20%;
        }
    </style>
</head>

<body>
    <div class="ml-5 mt-5 mb-5">
        <center>
            <h2>Jadwal Kuliah Universitas Budi Luhur</h2>
            <?= strftime('%A, %d %B %G'); ?>
            <hr style="color: blue; width: 80%;">
        </center>
        <br>
        <form method="POST" action="show">
            <div class="uSelect">
                <label class="form-label">Fakultas</label>
                <div class="input-group mb-3">
                    <select class="required form-select" name="fakultas" required>
                        <option value="FTI">Fakultas Teknologi Informasi</option>
                        <option value="AS">Akademi Sekretari</option>
                        <option value="FEB">Fakultas Ekonomi dan Bisnis</option>
                        <option value="FISIP">Fakultas Ilmu Sosial dan Ilmu Politik</option>
                        <option value="FT">Fakultas Teknik</option>
                        <option value="FIKOM">Fakultas Ilmu Komunikasi</option>
                    </select>
                </div>
                <label class="form-label">Lokasi</label>
                <div class="input-group mb-3">
                    <select class="required form-select" name="tempat" required>
                        <option value="Reguler Pusat">Regular Pusat</option>
                        <option value="Karyawan Pusat">Karyawan Pusat</option>
                        <option value="Roxy">Roxy</option>
                        <option value="Salemba">Salemba</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Show</button>
            </div>
        </form>
    </div>
</body>