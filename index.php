<?php
// data mahasiswa pake array multidimensi
$mhs = [
    [
        "nim" => "25001",
        "nama" => "Andi Pratama",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "andi@upi.edu",
        "nilai" => 88
    ],
    [
        "nim" => "25002",
        "nama" => "Siti Rahmawati",
        "jurusan" => "Ilmu Komputer",
        "email" => "siti@upi.edu",
        "nilai" => 75
    ],
    [
        "nim" => "25003",
        "nama" => "Budi Santoso",
        "jurusan" => "Pendidikan Ilmu Komputer",
        "email" => "budi@upi.edu",
        "nilai" => 62
    ],
    [
        "nim" => "25004",
        "nama" => "Dewi Lestari",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "dewi@upi.edu",
        "nilai" => 95
    ],
    [
        "nim" => "25005",
        "nama" => "Ahmad Fauzi",
        "jurusan" => "Ilmu Komputer",
        "email" => "fauzi@upi.edu",
        "nilai" => 50
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 40px;
        }
        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
        }
        .btn-pesan {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 10px 16px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            margin-bottom: 20px;
            transition: background 0.2s;
        }
        .btn-pesan:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            border-radius: 6px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e9ecef;
        }
        th {
            background-color: #f1f3f5;
            color: #495057;
            font-weight: 600;
        }
        tr:hover {
            background-color: #f8f9fa;
        }
        .badge-lulus {
            color: #28a745;
            font-weight: bold;
        }
        .badge-tidak {
            color: #dc3545;
            font-weight: bold;
        }
        a.detail-link {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
        }
        a.detail-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h2>Daftar Nilai Mahasiswa</h2>
    
    <!-- Tombol buat ke form pesan -->
    <a href="form_pesan.php" class="btn-pesan">+ Isi Form Pesan</a>

    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Nilai</th>
            <th>Grade</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1; ?>
        <?php foreach($mhs as $data): ?>
            <?php
                // tentukan grade pakai if else biasa
                $n = $data['nilai'];
                if ($n >= 80) {
                    $grade = "A";
                } elseif ($n >= 70) {
                    $grade = "B";
                } elseif ($n >= 60) {
                    $grade = "C";
                } else {
                    $grade = "D";
                }

                // tentukan status lulus atau tidak
                if ($n >= 70) {
                    $status = "Lulus";
                    $status_class = "badge-lulus";
                } else {
                    $status = "Tidak Lulus";
                    $status_class = "badge-tidak";
                }
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nim']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['jurusan']; ?></td>
                <td><?php echo $data['nilai']; ?></td>
                <td><strong><?php echo $grade; ?></strong></td>
                <td><span class="<?php echo $status_class; ?>"><?php echo $status; ?></span></td>
                <td>
                    <!-- lempar data pakai GET -->
                    <a href="detail.php?nim=<?php echo $data['nim']; ?>&nama=<?php echo $data['nama']; ?>&jurusan=<?php echo $data['jurusan']; ?>&email=<?php echo $data['email']; ?>&nilai=<?php echo $data['nilai']; ?>&grade=<?php echo $grade; ?>&status=<?php echo $status; ?>" class="detail-link">Lihat Detail</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>