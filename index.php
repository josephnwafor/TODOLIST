<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="heading">
        <h1>ToDo List</h1>
    </div>
    <form action="add.php" method="post">
        <input type="text" name="task" placeholder="Enter a new task" required>
        <button type="submit">Add Task</button>
    </form>
    
    <h2>Tasks:</h2>
    <ul>
        <?php
        $tasks = file('tasks.txt', FILE_IGNORE_NEW_LINES);
        foreach ($tasks as $index => $task) {
            echo "<li> $task <a href=\"delete.php?index=$index\">X</a></li>";
        }
        ?>
    </ul>
</body>
</html>
