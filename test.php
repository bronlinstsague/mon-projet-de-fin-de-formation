<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Example</title>
</head>
<body>
    <?php
    // Include database configuration
    require_once 'connection.php';

    // Handle CRUD operations
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Create operation
        if (isset($_POST['create'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];

            $sql = "INSERT INTO users (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";

            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

        // Read operation
        elseif (isset($_POST['read'])) {
            $sql = "SELECT id, firstname, lastname, email FROM users";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<h2>Users</h2>";
                echo "<table border='1'>";
                echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>{$row['id']}</td><td>{$row['firstname']}</td><td>{$row['lastname']}</td><td>{$row['email']}</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
        }

        // Update operation
        elseif (isset($_POST['update'])) {
            $id = $_POST['id'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];

            $sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id=$id";

            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }

        // Delete operation
        elseif (isset($_POST['delete'])) {
            $id = $_POST['id'];

            $sql = "DELETE FROM users WHERE id=$id";

            if (mysqli_query($conn, $sql)) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . mysqli_error($conn);
            }
        }
    }

    // Close the connection
    // mysqli_close($conn);
    ?>

    <h2>Create User</h2>
    <form method="post">
        First name:<br>
        <input type="text" name="firstname"><br>
        Last name:<br>
        <input type="text" name="lastname"><br>
        Email:<br>
        <input type="text" name="email"><br><br>
        <input type="submit" name="create" value="Create">
    </form>

    <h2>Update User</h2>
    <form method="post">
        ID to update:<br>
        <input type="text" name="id"><br>
        First name:<br>
        <input type="text" name="firstname"><br>
        Last name:<br>
        <input type="text" name="lastname"><br>
        Email:<br>
        <input type="text" name="email"><br><br>
        <input type="submit" name="update" value="Update">
    </form>

    <h2>Delete User</h2>
    <form method="post">
        ID to delete:<br>
        <input type="text" name="id"><br><br>
        <input type="submit" name="delete" value="Delete">
    </form>

    <h2>Read Users</h2>
    <form method="post">
        <input type="submit" name="read" value="Read">
    </form>
</body>
</html>
