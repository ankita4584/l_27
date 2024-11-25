<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Attendance</title>
</head>
<body>
    <h1>Students Attendance</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>PRN</th>
            <th>Attendance</th>
        </tr>

        <?php
        include 'db.php';

        $query = "SELECT * FROM student";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['prn']) . "</td>";
                echo "<td>";
                echo '<input type="checkbox" id="prn_' . htmlspecialchars($row['prn']) . '" name="attendance_' . htmlspecialchars($row['prn']) . '">';
                echo '<label for="prn_' . htmlspecialchars($row['prn']) . '"> Present</label>';
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No records found</td></tr>";
        }

        $conn->close();
        ?>
        <button>Submit</button>
    </table>
</body>
</html>
