<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 6 Pemrograman Web</title>
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
            background-color: #f5f5f5;
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
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
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
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }
        
        input,
        select,
        textarea {  
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Arial, sans-serif;
        }
        
        input:focus,
        select:focus,
        textarea:focus {
            border-color: #007BFF;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }
        
        .pilihan {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        
        .pilihan input {
            width: auto;
            margin-right: 5px;
        }
        
        .pilihan label {
            margin: 0;
            font-weight: normal;
        }
        
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #007BFF; 
            color: white;
            font-size: 14px;
            cursor: pointer;
            margin-top: 10px;
            transition: all 0.3s ease;
        }
        
        button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 2px 8px rgba(0, 123, 255, 0.3);
        }
        
        .reset {
            background-color: #6c757d;
            margin-left: 10px;
        }
        
        .reset:hover {
            background-color: #5a6268;
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

            .pilihan {
                flex-direction: column;
                gap: 5px;
            }

            button {
                width: 100%;
                margin-left: 0;
                margin-bottom: 10px;
            }

            .reset {
                margin-left: 0;
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

            label {
                font-size: 14px;
            }

            input,
            select,
            textarea {
                font-size: 16px;
            }

            button {
                padding: 8px 15px;
                font-size: 12px;
            }

            .pilihan {
                flex-direction: column;
            }
        }
    </style>

</head>
<body>

<?php include '../Assets/v1/header.php'; ?>
<?php include '../Assets/v1/navbar.php'; ?>

<section class="page-title">
    <h1>Pertemuan 6 Pemrograman Web</h1>
</section>

<main>
    <div class="container"> 
        <h1>Form Pendaftaran Mahasiswa</h1> 
        <p class="deskripsi"> 
        Silakan isi data pendaftaran dengan lengkap dan benar. 
        </p> 
    
        <form action="#" method="post"> 
    
            <div class="form-group"> 
                <label for="nama">Nama Lengkap</label> 
                <input  
                    type="text"  
                    id="nama"  
                    name="nama"  
                    placeholder="Masukkan nama lengkap" 
                    required 
                > 
            </div> 
 
            <div class="form-group"> 
                <label for="email">Alamat Email</label> 
                <input  
                    type="email"  
                    id="email"  
                    name="email"  
                    placeholder="contoh@email.com" 
                    required 
                > 
            </div> 
 
            <div class="form-group"> 
                <label for="password">Password</label> 
                <input  
                    type="password"  
                    id="password"  
                    name="password"  
                    placeholder="Masukkan password" 
                    required 
                > 
            </div> 
 
            <div class="form-group"> 
                <label for="tanggal">Tanggal Lahir</label> 
                <input  
                    type="date"  
                    id="tanggal"  
                    name="tanggal" 
                    required 
                > 
            </div> 
 
            <div class="form-group"> 
                <label for="jurusan">Jurusan</label> 
                <select id="jurusan" name="jurusan" required> 
                    <option value="">Pilih jurusan</option> 
                    <option value="informatika">Teknik Informatika</option> 
                    <option value="sistem-informasi">Sistem Informasi</option> 
                    <option value="manajemen">Manajemen</option> 
                    <option value="akuntansi">Akuntansi</option> 
                </select> 
            </div> 
 
            <div class="form-group"> 
                <label>Jenis Kelamin</label> 
        
                <div class="pilihan"> 
                    <input  
                        type="radio"  
                        id="laki"  
                        name="jenis_kelamin"  
                        value="Laki-laki" 
                        required 
                    > 
                    <label for="laki">Laki-laki</label> 
                </div> 
 
                <div class="pilihan"> 
                    <input  
                        type="radio"  
                        id="perempuan"  
                        name="jenis_kelamin"  
                        value="Perempuan" 
                    > 
                    <label for="perempuan">Perempuan</label> 
                </div> 
 
                <div class="form-group"> 
                    <label>Minat Belajar</label> 
            
                    <div class="pilihan"> 
                        <input  
                            type="checkbox"  
                            id="html"  
                            name="minat"  
                            value="HTML" 
                        > 
                        <label for="html">HTML</label> 
                    </div> 
 
                    <div class="pilihan"> 
                        <input  
                            type="checkbox"  
                            id="css"  
                            name="minat"  
                            value="CSS" 
                        > 
                        <label for="css">CSS</label> 
                    </div> 
                </div>
                <div class="pilihan"> 
                    <input  
                        type="checkbox"  
                        id="javascript"  
                        name="minat"  
                        value="JavaScript" 
                    > 
                    <label for="javascript">JavaScript</label> 
                </div> 
            </div> 
        
            <div class="form-group"> 
                <label for="alamat">Alamat</label> 
                <textarea  
                    id="alamat"  
                    name="alamat"  
                    rows="4"  
                    placeholder="Masukkan alamat lengkap" 
                    required 
                ></textarea> 
            </div> 
 
            <div class="form-group"> 
            <button type="submit">Kirim Data</button> 
            <button type="reset" class="reset">Reset</button> 
            </div> 
        </form>
    </div>
</main>

<?php include '../Assets/v1/footer.php'; ?>

</body>
</html>