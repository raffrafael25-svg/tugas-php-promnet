<?php
// cek dulu datanya udah dikirim apa belom pake isset
if (isset($_GET['nim']) && isset($_GET['nama'])) {
    $nim = $_GET['nim'];
    $nama = $_GET['nama'];
    $jurusan = $_GET['jurusan'];
    $email = $_GET['email'];
    $nilai = $_GET['nilai'];
    $grade = $_GET['grade'];
    $status = $_GET['status'];
} else {
    // kalau langsung dibuka tanpa parameter, balikin ke index
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mahasiswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 40px;
        }
        .card {
            background: white;
            max-width: 450px;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        h2 {
            color: #2c3e50;
            margin-top: 0;
            margin-bottom: 20px;
            border-bottom: 2px solid #f1f3f5;
            padding-bottom: 10px;
        }
        p {
            margin: 10px 0;
            font-size: 15px;
        }
        .btn-back {
            display: inline-block;
            background-color: #6c757d;
            color: white;
            padding: 8px 14px;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
            font-size: 14px;
        }
        .btn-back:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Detail Mahasiswa</h2>

        <p><strong>NIM:</strong> <?php echo $nim; ?></p>
        <p><strong>Nama:</strong> <?php echo $nama; ?></p>
        <p><strong>Jurusan:</strong> <?php echo $jurusan; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Nilai:</strong> <?php echo $nilai; ?></p>
        <p><strong>Grade:</strong> <?php echo $grade; ?></p>
        <p><strong>Status:</strong> <?php echo $status; ?></p>

        <a href="index.php" class="btn-back">&larr; Kembali</a>
    </div>

</body>
</html>