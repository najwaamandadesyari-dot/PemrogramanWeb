<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 9 - Cek Kategori Usia Mahasiswa</title>
    <link rel="stylesheet" href="../Assets/style.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding-top: 70px;
            padding-bottom: 60px;
            font-family: Arial, sans-serif;
            background: radial-gradient(circle at top, #385d9b, #132041 60%, #0c1732 100%);
            color: #f4f7ff;
            min-height: 100vh;
        }

        .page-title {
            background: linear-gradient(135deg, #193c7a, #0e1f3b);
            padding: 30px 20px;
            text-align: center;
            margin-top: -70px;
            padding-top: 100px;
        }

        .page-title h1 {
            margin: 0;
            color: white;
            font-size: 32px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        .container {
            width: 80%;
            margin: 30px auto;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        }

        .container > h1 {
            text-align: center;
            color: #333;
            font-size: 28px;
            margin-top: 0;
        }

        .deskripsi {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 20px;
        }

        /* Form Styling */
        .form-group {
            margin-bottom: 16px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            color: #444;
            margin-bottom: 6px;
            font-size: 15px;
        }

        .form-group input {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            transition: border-color 0.2s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #4f78d4;
        }

        .btn-submit {
            background: linear-gradient(135deg, #3e69c2, #1f3f8c);
            color: white;
            border: none;
            padding: 12px 28px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
            transition: opacity 0.2s, transform 0.2s;
        }

        .btn-submit:hover {
            opacity: 0.95;
            transform: translateY(-1px);
        }

        .hasil {
            margin-top: 24px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.95);
            border-left: 4px solid #3e69c2;
            border-radius: 8px;
        }

        .hasil h3 {
            margin-top: 0;
            color: #1f3f8c;
        }

        .hasil p {
            margin: 6px 0;
            font-size: 15px;
            color: #444;
        }

        .badge {
            display: inline-block;
            background: linear-gradient(135deg, #4f78d4, #1f3f8c);
            color: white;
            padding: 4px 14px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 14px;
        }

        hr {
            border: none;
            border-top: 1px solid #eee;
            margin: 24px 0;
        }

        /* Responsive untuk Tablet */
        @media (max-width: 768px) {
            body {
                padding-top: 70px;
                padding-bottom: 60px;
            }

            .page-title {
                padding-top: 80px;
                padding: 20px;
            }

            .page-title h1 {
                font-size: 24px;
            }

            .container {
                width: 90%;
                padding: 20px;
                margin: 20px auto;
            }

            .container > h1 {
                font-size: 24px;
            }

            .deskripsi {
                font-size: 16px;
            }
        }

        /* Responsive untuk Mobile */
        @media (max-width: 480px) {
            body {
                padding-top: 100px;
                padding-bottom: 60px;
            }

            .page-title {
                padding-top: 80px;
                padding: 15px;
                margin-top: -100px;
            }

            .page-title h1 {
                font-size: 20px;
            }

            .container {
                width: 95%;
                padding: 15px;
                margin: 15px auto;
            }

            .container > h1 {
                font-size: 20px;
            }

            .deskripsi {
                font-size: 14px;
            }
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<?php include '../Assets/v1/header.php'; ?>
<?php include '../Assets/v1/navbar.php'; ?>

<section class="page-title">
    <h1>Pertemuan 9 - Pemrograman Web</h1>
</section>

<main>
    <div class="container">
        <h1>Cek Kategori Usia Mahasiswa</h1>
        <p class="deskripsi">Masukkan nama dan umur untuk mengetahui kategori usia kamu.</p>

        <hr>

        <form method="POST">
            <div class="form-group">
                <label>Nama :</label>
                <input type="text" name="nama" required>
            </div>

            <div class="form-group">
                <label>Umur :</label>
                <input type="number" name="umur" required>
            </div>

            <button type="submit" name="submit" class="btn-submit">Cek Kategori</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = htmlspecialchars($_POST['nama']);
            $umur = (int)$_POST['umur'];

            if ($umur < 13) {
                $kategori = "Anak-anak";
            } elseif ($umur >= 13 && $umur <= 17) {
                $kategori = "Remaja";
            } elseif ($umur >= 18 && $umur <= 59) {
                $kategori = "Dewasa";
            } else {
                $kategori = "Lansia";
            }

            echo "<div class=\"hasil\">";
            echo "<h3>Hasil Kategori Usia</h3>";
            echo "<p>Nama : $nama</p>";
            echo "<p>Umur : $umur tahun</p>";
            echo "<p>Kategori Usia : $kategori</p>";
            echo "</div>";
        }
        ?>

    </div>
</main>

<?php include '../Assets/v1/footer.php'; ?>

</body>
</html>