<?php
include('config.php');

// Memasukan data ke tabel mahasiswa
$mhs = "INSERT INTO mahasiswa (NIM, NamaMHS, ALAMAT, TELP) VALUES
    ('0440101001', 'WAHYUDIN', 'SOLO', '081905878712'),
    ('0440101002', 'SRIYONO', 'KLATEN', '089088767677'),
    ('0440202001', 'RUSTANTO', 'SUKOHARJO', '082123878727'),
    ('0440103001', 'MARIYATUN', 'WONOGIRI', '081389698889'),
    ('0440202002', 'SRI HANDAYANI', 'BANDUNG', '081289787890'),
    ('0440204001', 'HERDIYANI', 'KLATEN', '081789773262'),
    ('0440204002', 'SRI MARIYATUN', 'SURAKARTA', '086778687889'),
    ('0440103002', 'EKO WAHYUDI', 'SURAKARTA', '081363902840');";

$prodi = "INSERT INTO prodi (NAMA_PRODI) VALUES
    ('SISTEM INFORMASI'),
    ('MANAJEMEN INFORMATIKA'),
    ('TEKNIK INFORMATIKA'),
    ('TEKNIK KOMPUTER');";


$dosen = "INSERT INTO dosen (KD_DOSEN, NAMA_DOSEN, ALAMAT, NO_TELP) VALUES
    ('040001', 'EKO PURWANTO, M.Kom', 'SUKOHARJO', '08121823872'),
    ('040002', 'FAULINDA ELY NASTITI, M.Eng', 'SUKOHARJO', '08987092982'),
    ('040003', 'JONI MAULINDAR, M.Eng',	'SURAKARTA', '08976327188'),
    ('040024', 'SRI SUMARLINDA, M.Kom',	'YOGYAKARTA', '08934738299'),
    ('040015', 'JAMES BOND, M.T', 'YOGYAKARTA', '08232847089'),
    ('040006', 'EGI SUMINAR, MBA', 'BANDUNG', '08912120078');";

$matkul = "INSERT INTO matkul (KD_MATKUL, NAMA_MATKUL, SKS) VALUES
    ('04211', 'SISTEM INFORMASI AKUNTANSI', '3'),
    ('04212', 'REKAYASA PERANGKAT LUNAK', '3'),
    ('04213', 'BASIS DATA', '2'),
    ('04311', 'MATEMATIKA BISNIS', '3'),
    ('04312', 'PENGANTAR TEKNOLOGI', '2'),
    ('04411', 'ANALISA LAPORAN KEUANGAN', '2');";

$queries = [$mhs, $prodi, $dosen, $matkul];

foreach ($queries as $sql) {
    if (mysqli_multi_query($conn, $sql)) {
        echo "Data inserted successfully <br>";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
}
