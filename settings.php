<?php
include('conn.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `userlogin` WHERE `id` = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    if (!$row) {
       
    }
}


if ($_SERVER['REQUEST_METHOD'] == "POST")  {
    if (isset($_POST['id'])) {
        $id = $_GET['id'];
        $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = $_POST['password'];

        $sql = "UPDATE `userlogin` SET `fullname`='$fullname', `username`='$username', `email`='$email', `password`='$password' WHERE `id` = $id";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

}



?>





<!DOCTYPE html>
<html>

<head>
    <title>Update Account</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1 class="title">Update Account</h1>
    <div class="form">
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div>
                <label for="fullname">Fullname</label>
                <input type="text" name="fullname" id="fullname" value="<?php echo isset($row['fullname']) ? $row['fullname'] : ''; ?>" required>
            </div>
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value="<?php echo isset($row['username']) ? $row['username'] : ''; ?>" required>
            </div>
            <div>
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" value="<?php echo isset($row['email']) ? $row['email'] : ''; ?>" required>
            </div>

            <div>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" required>
            </div>
            <a href="index.php" class="back">Back</a>
            <button type="submit" name="submit">Done</button>
        </form>
    </div>
</body>

</html>
