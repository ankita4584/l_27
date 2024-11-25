<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body>
    <h1>Student Registration</h1>
    <form action="" method="POST">
        <label for="name">Enter Name</label>
        <input type="text" id="name" name="name" required>
        <label for="prn">Enter PRN</label>
        <input type="text" id="prn" name="prn" required>
        <button type="submit" name="submit">Register</button>
    </form>

    <?php
    include 'db.php';

    if (isset($_POST['submit'])) {
        $name = $conn->real_escape_string($_POST['name']);
        $prn = $conn->real_escape_string($_POST['prn']);

        $query = "INSERT INTO student (name, prn) VALUES ('$name', '$prn')";

        if ($conn->query($query) === TRUE) {
            echo "Registered successfully!";
            header("Location: index.php"); // Redirect to index.php
            exit();
        } else {
            echo "Invalid registration. Error: " . $conn->error;
        }
    }
    ?>
</body>
</html>
