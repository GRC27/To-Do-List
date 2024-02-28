<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>To-Do List</title>
            <!-- <link rel="stylesheet" href="style.css"> Sertakan stylesheet CSS jika diperlukan -->
            <style>
                .sticky-note {
                    position: relative;
                    background-color: #f6fdc3;
                    max-width: 250px;
                    width: 250px;
                    height: 250px;
                    max-height: 250px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    padding: 20px;
                    border-radius: 10px;
                    margin: 10px 10px;
                }
                .kosong{
                    background-color: #f6fdc3;
                    max-width: 250px;
                    width: 250px;
                    height: 250px;
                    max-height: 250px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    padding: 20px;
                    border-radius: 10px;
                    margin: 0px -10px;
                }
                .button-delete{
                    position: absolute;
                    bottom: 10px;
                    right: 10px;
                    background-color: #ecee81;
                    border: 5px solid #ecee81;
                    border-radius: 10px;
                    padding: 5px;
                }
                .flex-container{
                    display: flex;
                    padding: 10px;
                    margin: 0px -20px;
                    height: 100%;
                    width: 100%;
                    flex-wrap: wrap;  
                    justify-content: flex-start;
                    align-content: flex-start;
                }
            </style>
        </head>
        <body>
            <div class="flex-container">
            <?php
            // Membaca isi dari file task.txt
            $tasks = file_get_contents('task.txt');
            $kosong = "Tidak ada tugas yang tersimpan.";

            // Memeriksa apakah ada data yang tersimpan di task.txt
            if(!empty($tasks)) {
                // Memecah data menjadi array berdasarkan baris baru
                $task_list = explode(PHP_EOL, $tasks);
                
                // Menampilkan setiap tugas sebagai sticky note
                foreach($task_list as $task) {
                    if(!empty($task)) {
                        echo "
                        <div class='sticky-note'>$task
                            <form action='delete.php' method='post'>
                                <input type='hidden' name='task_to_delete' value='$task'>
                                <button class='button-delete' type='submit'>Delete</button>
                            </form>
                        </div>";
                    }
                }
            } else {
                // Jika tidak ada tugas yang tersimpan
                echo "<div class='kosong'>$kosong</div>";
            }
            ?>
            </div>
        </body>
</html>
