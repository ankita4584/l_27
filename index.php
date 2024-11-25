<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login</title>
</head>
<body>
    <h1>Teacher Login</h1>
    <a href="register.php"><button>Register</button></a>
    <h3>Only For Teachers</h3>
    <form action="" method="POST">
        <label for="name">Enter Name</label>
        <input type="text" id="name" name="name" required>
        <label for="password">Enter Login Password</label>
        <input type="password" id="password" name="password" required>
        <button type="submit" name="submit">Login</button>
    </form>

    <?php
    include 'db.php';

    if (isset($_POST['submit'])) {
        $name = $conn->real_escape_string($_POST['name']);
        $password = $conn->real_escape_string($_POST['password']);

        $query = "SELECT * FROM teachers WHERE name = '$name' AND password = '$password'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            echo "Logged in successfully!";
            header("Location: attendance.php"); // Redirect to attendance.php
            exit();
        } else {
            echo "Invalid username or password.";
        }
    }
    ?>
</body>
</html>
