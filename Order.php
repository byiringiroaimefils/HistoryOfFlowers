<?php
include("conn.php");
$sqli = "SELECT * FROM flower";
$run = mysqli_query($conn, $sqli);
// $row = mysqli_fetch_array($run);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>

<body>
    <table>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Name of FLower</th>
            <th>Quantity</th>
        </tr>
        <tr>
            <?php
            while ($row = mysqli_fetch_assoc($run)) {
            ?>
                <td><?php echo $row['ID'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['Quantity'] ?></td>
        </tr>
    <?php
            }
    ?>
    </table>


    <?php
    include("conn.php");
    if (isset($_POST["upload"])) {
        $file = $_FILES['Name']["name"];
        $name=$_POST['Des'];
        $value=$_POST['value'];
        $target_dir = "Img/";
        $target_path = $target_dir . $file;
        $query = "INSERT INTO photo VALUES ('','$target_path','$name','$value')";
        $row = mysqli_query($conn, $query);
        if ($row) {
            move_uploaded_file($_FILES['Name']['tmp_name'], $target_path);
        }
        echo "Helloword";
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="Des"> <br>
        <input type="number" name="value"><br>
        <input type="file" name='Name'> <br>
        <input type="submit" name="upload"><br>
    </form>
</body>

</html>