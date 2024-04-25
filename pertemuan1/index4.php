<!-- <?php
// Fungsi untuk memeriksa tahun kabisat
function tahun_kabisat($year) {
    if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)) {
        return true;
    }
    return false;
}

// Jika form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST["year"];
    $isLeap = tahun_kabisat($year);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Pengecekan Tahun Kabisat</title>
</head>

<body>
    <h1>Pengecekan Tahun Kabisat</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Masukkan tahun: <input type="number" name="year" required>
        <input type="submit" name="submit" value="Cek">
    </form>

    <?php
    // Tampilkan hasil jika form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($isLeap) {
            echo "<p>$year adalah tahun kabisat.</p>";
        } else {
            echo "<p>$year bukan tahun kabisat.</p>";
        }
    }
    ?>
</body>

</html> -->
<!-- <?php
    $tahun = 2023;
    if ($tahun % 400 == 0 || ($tahun % 4 == 0 && $tahun % 100 != 0)) {
echo "<p>$tahun adalah tahun kabisat.</p>";
    }else {
echo "<p>$tahun bukan tahun kabisat.</p>";
    }
?> -->