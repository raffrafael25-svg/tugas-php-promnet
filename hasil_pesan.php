<?php
// cek data post
if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $pesan = $_POST['pesan'];
} else {
    header("Location: formesan.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pesan</title>
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
            margin-bottom: 10px;
        }
        .success-text {
            color: #28a745;
            font-weight: 600;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
        }
        td {
            padding: 6px 0;
            vertical-align: top;
        }
        .btn-home {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 8px 14px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
        }
        .btn-home:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Pesan Berhasil Dikirim</h2>
        <p class="success-text">Terima kasih, <?php echo $nama; ?>!</p>
    
        <table>
            <tr>
                <td width="30%"><strong>Nama</strong></td>
                <td width="5%">:</td>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <td><strong>Kelas</strong></td>
                <td>:</td>
                <td><?php echo $kelas; ?></td>
            </tr>
            <tr>
                <td><strong>Pesan / Kesan</strong></td>
                <td>:</td>
                <td><?php echo $pesan; ?></td>
            </tr>
        </table>

        <a href="index.php" class="btn-home">Kembali ke Halaman Utama</a>
    </div>

</body>
</html>