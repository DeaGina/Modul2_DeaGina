<?php
//silahkan jawab disini (menangkap data dari form)
// ============== Mengatur Pola Makan 
if ($_POST) {
    $olahraga = $_POST["olahraga"];
    $kurang_olahraga = $_POST["kurang_olahraga"];
}

//silahkan jawab disini (logika pola makan berdasarkan lama olahraga)
?>
if (empty($olahraga)|| empty($kurang_olahraga)) {
    $error = "Olahraga dan kurang olahraga tidak boleh kosong.";
} elseif ($olahraga <= 0 || $kurang_olahraga <= 0) {
    $error = "Nilai Olahraga dan kurang olahraga harus lebih dari 0.";
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pola Makan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h3>Hasil Pola Makan Anda</h3>
            <p class="alert alert-info">
                <!-- silahkan jawab disini (menampilkan hasil logika berdasarkan kondisi olahraga) -->
            if ($olahraga >15 )
            </p>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
