<?php
// =========================================
// FILE: index.php
// CRUD Mahasiswa - SEMUA JADI SATU FILE
// =========================================

// ---------- KONEKSI DATABASE ----------
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "kampus";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$currentScript = basename($_SERVER['PHP_SELF']);

// ---------- PROSES SIMPAN DATA BARU (CREATE) ----------
if (isset($_POST['simpan'])) {
    $nim      = $_POST['nim'];
    $nama     = $_POST['nama'];
    $prodi    = $_POST['prodi'];
    $angkatan = $_POST['angkatan'];

    $stmt = mysqli_prepare($conn,
        "INSERT INTO mahasiswa (nim, nama, prodi, angkatan) VALUES (?, ?, ?, ?)"
    );
    mysqli_stmt_bind_param($stmt, "sssi", $nim, $nama, $prodi, $angkatan);
    mysqli_stmt_execute($stmt);

    header("Location: " . $currentScript);
    exit();
}

// ---------- PROSES UPDATE DATA ----------
if (isset($_POST['update'])) {
    $id       = $_POST['id'];
    $nim      = $_POST['nim'];
    $nama     = $_POST['nama'];
    $prodi    = $_POST['prodi'];
    $angkatan = $_POST['angkatan'];

    $stmt = mysqli_prepare($conn,
        "UPDATE mahasiswa SET nim=?, nama=?, prodi=?, angkatan=? WHERE id=?"
    );
    mysqli_stmt_bind_param($stmt, "sssii", $nim, $nama, $prodi, $angkatan, $id);
    mysqli_stmt_execute($stmt);

    header("Location: " . $currentScript);
    exit();
}

// ---------- PROSES HAPUS DATA (DELETE) ----------
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    $stmt = mysqli_prepare($conn, "DELETE FROM mahasiswa WHERE id=?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    $currentScript = rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . '/' . rawurlencode(basename($_SERVER['PHP_SELF']));
    header("Location: " . $currentScript);
    exit();
}

// ---------- AMBIL DATA UNTUK MODE EDIT ----------
$editData = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $stmt = mysqli_prepare($conn, "SELECT * FROM mahasiswa WHERE id=?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $hasil = mysqli_stmt_get_result($stmt);
    $editData = mysqli_fetch_assoc($hasil);
}

$currentScript = rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . '/' . rawurlencode(basename($_SERVER['PHP_SELF']));
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Data Mahasiswa</title>
</head>
<body>

    <h2><?= $editData ? "Edit Data Mahasiswa" : "Tambah Data Mahasiswa" ?></h2>

    <?php if ($editData): ?>
        <!-- FORM EDIT -->
        <form method="POST" action="<?= htmlspecialchars($currentScript) ?>">
            <input type="hidden" name="id" value="<?= htmlspecialchars($editData['id']) ?>">
            NIM :
            <input type="text" name="nim" value="<?= htmlspecialchars($editData['nim']) ?>" required><br><br>
            Nama :
            <input type="text" name="nama" value="<?= htmlspecialchars($editData['nama']) ?>" required><br><br>
            Prodi :
            <input type="text" name="prodi" value="<?= htmlspecialchars($editData['prodi']) ?>" required><br><br>
            Angkatan :
            <input type="number" name="angkatan" value="<?= htmlspecialchars($editData['angkatan']) ?>" required><br><br>
            <button type="submit" name="update">Update</button>
            <a href="<?= htmlspecialchars($currentScript) ?>">Batal</a>
        </form>
    <?php else: ?>
        <!-- FORM TAMBAH -->
        <form method="POST" action="<?= htmlspecialchars($currentScript) ?>">
            NIM :
            <input type="text" name="nim" required><br><br>
            Nama :
            <input type="text" name="nama" required><br><br>
            Prodi :
            <input type="text" name="prodi" required><br><br>
            Angkatan :
            <input type="number" name="angkatan" required><br><br>
            <button type="submit" name="simpan">Simpan</button>
        </form>
    <?php endif; ?>

    <hr>

    <h2>Data Mahasiswa</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Angkatan</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($conn, "SELECT * FROM mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $d['nim'] ?></td>
            <td><?= $d['nama'] ?></td>
            <td><?= $d['prodi'] ?></td>
            <td><?= $d['angkatan'] ?></td>
            <td>
                <a href="<?= htmlspecialchars($currentScript) ?>?edit=<?= $d['id'] ?>">Edit</a>
                <a href="<?= htmlspecialchars($currentScript) ?>?hapus=<?= $d['id'] ?>"
                   onclick="return confirm('Yakin hapus data?')">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>

</body>
</html>