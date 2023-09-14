<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newTask = $_POST['task'];
    
    if (!empty($newTask)) {
        file_put_contents('tasks.txt', $newTask . PHP_EOL, FILE_APPEND);
    }
}

header('Location: index.php');
?>