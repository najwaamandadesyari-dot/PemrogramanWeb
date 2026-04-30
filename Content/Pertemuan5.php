<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 5 Pemrograman Web</title>
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
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            min-height: 100vh;
        }

        .page-title {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
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
    <h1>Pertemuan 5 Pemrograman Web</h1>
</section>

<main>
    <div class="container">
        <h1>Konten Pertemuan 5</h1>
        <p class="deskripsi">
            Halaman ini menampilkan konten materi Pertemuan 5 dengan background yang menarik dan responsive.
        </p>
    </div>
</main>

<?php include '../Assets/v1/footer.php'; ?>

</body>
</html>