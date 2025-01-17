<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = 'alumni.json';
    $data = json_decode(file_get_contents($file), true) ?: [];

    // Tambah Data
    if (isset($_POST['action']) && $_POST['action'] === 'add') {
        $data[] = [
            'nim' => $_POST['nim'],
            'name' => $_POST['name'],
            'major' => $_POST['major'],
            'year' => $_POST['year']
        ];
        file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
        echo json_encode(['status' => 'success', 'message' => 'Data berhasil ditambahkan']);
        exit;
    }

    // Hapus Data
    if (isset($_POST['action']) && $_POST['action'] === 'delete') {
        $index = $_POST['index'];
        array_splice($data, $index, 1);
        file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
        echo json_encode(['status' => 'success', 'message' => 'Data berhasil dihapus']);
        exit;
    }

    // Ambil Data
    if (isset($_POST['action']) && $_POST['action'] === 'get') {
        echo json_encode($data);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracer Alumni</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Tracer Alumni</h1>
        <form id="alumni-form">
            <input type="text" id="nim" name="nim" placeholder="NIM" required>
            <input type="text" id="name" name="name" placeholder="Nama" required>
            <input type="text" id="major" name="major" placeholder="Jurusan" required>
            <input type="number" id="year" name="year" placeholder="Angkatan" required>
            <button type="submit">Tambah Alumni</button>
        </form>
        <h2>Daftar Alumni</h2>
        <table id="alumni-table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Angkatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr><td colspan="5">Memuat data...</td></tr>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
