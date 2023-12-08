<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    include "db_conn.php";
    // Call the stored procedure
    $result = mysqli_query($conn, "CALL profile_manager.getAll()");
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }
    // Fetch column names from the result set
    $columns = [];
    while ($fieldInfo = mysqli_fetch_field($result)) {
        $columns[] = $fieldInfo->name;
    }
} else {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>ADMIN</h1>
    <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
    <table>
        <thead>
            <tr>
                <?php
                // Display the table header using the fetched column names
                foreach ($columns as $column) {
                    echo "<th>{$column}</th>";
                }
                ?>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                // Display the data for each column
                foreach ($columns as $column) {
                    echo "<td>".$row[$column]."</td>";
                }
                $status = isset($row['status']) ? $row['status'] : ''; // Check if 'status' key exists
                $strStatus = ''; // Initialize $strStatus
                $status = $row['status'];
                echo "<td>";
if ($status == 1) {
     echo "<a href='deactive.php?id={$row['id']}'>Deactivate</a>";
    
} elseif ($status == 0) {
    echo "<a href='active.php?id={$row['id']}'>Activate</a>";
   
}
echo "</td>";

                $i = $i + 1;
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>
    <br>
    <br>
    <nav>
        <a href="AdminChangePass.php"> Change Password</a> <br>
        <a href="EditprofileAdmin.php">Edit Profile</a><br>
        <a href="ViewUsers.php">View Users</a> <br>
        <a href="logout.php">Logout</a> <br>
    </nav>
</body>
</html>
