<?php
if(isset($_POST['task_to_delete'])) {
    $task_to_delete = $_POST['task_to_delete'];
    
    // Baca isi dari file task.txt
    $tasks = file_get_contents('task.txt');
    
    // Ganti nilai task yang akan dihapus dengan string kosong
    $tasks = str_replace($task_to_delete, '', $tasks);
    
    // Tulis kembali isi file task.txt tanpa task yang dihapus
    if(file_put_contents('task.txt', $tasks) !== false) {
        echo "<script>alert('Task berhasil dihapus.'); window.location.href = 'index.php';</script>";
    } else {
        echo "Gagal menghapus task.";
    }
} else {
    echo "<script>alert('Tidak ada task yang dipilih untuk dihapus.'); window.location.href = 'index.php';</script>";
}
?>
