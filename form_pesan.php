<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pesan</title>
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
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }
        textarea {
            height: 90px;
            resize: vertical;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 16px;
            font-size: 14px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .link-kembali {
            display: inline-block;
            margin-top: 15px;
            color: #6c757d;
            text-decoration: none;
            font-size: 14px;
        }
        .link-kembali:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Form Pesan Mahasiswa</h2>

        <form action="hasil_pesan.php" method="POST">
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" required>
            </div>
            <div class="form-group">
                <label>Kelas:</label>
                <input type="text" name="kelas" required>
            </div>
            <div class="form-group">
                <label>Pesan / Kesan:</label>
                <textarea name="pesan" required></textarea>
            </div>
            <button type="submit" name="submit">Kirim Pesan</button>
        </form>

        <a href="index.php" class="link-kembali">&larr; Kembali ke Beranda</a>
    </div>

</body>
</html>