<?php
if(isset($_POST['task'])) {
    $task = $_POST['task'];
    // Menulis teks ke dalam file task.txt
    if(file_put_contents('task.txt', $task . PHP_EOL, FILE_APPEND) !== false) {
        echo "<script>alert('Data berhasil dikirimkan.'); window.location.href = 'index.php';</script>";
    } else {
        echo "Gagal menambahkan task.";
    }
} else {
    // Kirimkan alert kepada pengguna
    echo "<script>alert('Tidak ada data yang dikirimkan.'); window.location.href = 'index.php';</script>";
}
?>
