<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Web</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
        }

        .navbar {
            position: absolute;
            top: 20px;
            left: 20px;
            font-weight: bold;
        }

        .menu {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 24px;
        }

        .content-box {
            width: 80%;
            margin: 70px auto;
            background: white;
            padding: 25px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
        }

        img {
            border-radius: 8px;
        }

        h2, h3 {
            margin: 5px 0;
        }

        p {
            line-height: 1.6;
        }
    </style>
</head>
<body>

    <div class="navbar">Navbar</div>
    <div class="menu">☰</div>

    <div class="content-box">

        <table border="1">
            <tr>
                <td width="10%" align="center" valign="middle">
                    <img src="https://1.bp.blogspot.com/-yAQgSUZf2oY/VRIVSGc8rvI/AAAAAAAABA0/DkDFFf71muY/s1600/Logo+UNSIQ+Polos.jpg" 
                         alt="Logo UNSIQ" width="100" height="100">
                </td>
                <td width="90%">
                    <h2>SELAMAT DATANG DI MATA KULIAH PEMROGRAMAN WEB</h2>
                    <h3>Pertemuan 2: HTML Dasar</h3>
                </td>
            </tr>
        </table>

        <p align="center">
            Mata kuliah ini memperkenalkan dasar-dasar pemrograman web menggunakan HTML, CSS, dan JavaScript.
        </p>

        <p align="center">
            Pada pertemuan ini, kita fokus pada struktur dan elemen dasar HTML.
        </p>

        <hr>

        <p>
            HTML adalah bahasa markup yang digunakan untuk membuat halaman web. 
            Dengan HTML, kita bisa menampilkan teks, gambar, dan link secara terorganisir.
            Untuk informasi lengkap dapat mengunjungi 
            <a href="https://id.wikipedia.org/wiki/HTML">Penjelasan HTML</a>
        </p>

        <h2>Topik Utama Pertemuan Ini:</h2>
        <ul>
            <li>Struktur HTML</li>
            <li>Heading dan Paragraf</li>
            <li>List (Unordered and Ordered)</li>
            <li>Link dan Gambar</li>
            <li>Tabel</li>
        </ul>

        <h2>Langkah Praktikum</h2>
        <ol>
            <li>Buat file index.php</li>
            <li>Tulis kode HTML</li>
            <li>Simpan dan buka di browser</li>
            <ul>
                <li>Buka XAMPP</li>
                <li>Nyalakan server</li>
                <li>Buka browser dengan URL localhost/...</li>
            </ul>
            <li>Verifikasi hasil</li>
        </ol>

    </div>

</body>
</html>