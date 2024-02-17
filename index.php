<?php
session_start();

if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: login.php");
    exit();
}

include('conn.php');

$id = $_SESSION["id"];

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Student Information</title>
</head>
<body>
    <div class="header">
        <div class="logo">
            <h3>MY CRUD</h3>
        </div>
        <div>
            <?php
            // Fetch user information from database
            $sql = "SELECT * FROM `userlogin` WHERE `id` = $id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            // Check if user information is fetched
            if ($row) {
                echo "<a href='settings.php?id=" . $row['id'] . "' class='logout'>Account</a>";
            }
            ?>
            <a href="logout.php" class="logout">logout</a>
        </div>
    </div>
    <div class="span">
      <h1 style=" text-align: center;  ">Welcome <?php echo $row['username']; ?>!</h1>
    </div>
    <h1 class="title">Student Information</h1>

    <div class="table">
        <div class="span"><a href="create.php" class="btn-primary">ADD STUDENT</a></div>
        <table>
            <thead>
               <tr>
                  <th>Fullname</th>
                  <th>Date of Birth</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Action</th>
               </tr>
           </thead>
           <tbody>
                <?php
                $query = "SELECT * FROM `student`";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['fullname']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['dob']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['address']) . "</td>";
                    echo "<td>
                            <a href='update.php?studentID=" . $row['studentID'] . "' class='btn-primary'>UPDATE</a> |
                            <a href='delete_request.php?studentID=" . $row['studentID'] . "' class='btn-danger'>DELETE</a>
                          </td>";
                    echo "</tr>";
                }
                mysqli_close($conn);
                ?>
           </tbody>
       </table>
   </div>
</body>
</html>
