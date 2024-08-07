<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple To-Do List</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>To-Do List</h1>
        <form action="index.php" method="post">
            <input type="text" name="task" placeholder="Enter a new task">
            <button type="submit" name="add">Add Task</button>
        </form>

        <?php
        if (isset($_POST['add'])) {
            $task = $_POST['task'];
            if ($task) {
                $sql = "INSERT INTO tasks (task) VALUES ('$task')";
                if ($conn->query($sql) === TRUE) {
                    echo "New task added successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }

        if (isset($_GET['del_task'])) {
            $id = $_GET['del_task'];
            $sql = "DELETE FROM tasks WHERE id=$id";
            if ($conn->query($sql) === TRUE) {
                echo "Task deleted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        $sql = "SELECT * FROM tasks";
        $result = $conn->query($sql);
        ?>

        <ul>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <li>
                    <?php echo $row['task']; ?>
                    <a href="index.php?del_task=<?php echo $row['id']; ?>">Delete</a>
                </li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>
