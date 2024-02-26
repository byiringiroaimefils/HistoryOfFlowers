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
    <style>
        body {
            background-color: black;
            color: white;
            
        }

        h3 {
            background-color: #ccc;
            width: 90%;
            color: black;
            text-align: center;
            align-items: center;
        }
        table,
        th,
        tr,
        td {
            border: 2px solid white;
            border-collapse: collapse;
            /* padding: 20px; */
            background-color: #ccc;
            color: black;
        }

        th {
            width: 46%;
            height: 35px;
        }
        /* td:nth-{

        } */

        .SM {
            width: 5%;
        }

        .LG {
            width: 20%;
        }

        form,fieldset {
            display: flex;
            justify-content: center;
            align-items: center;
             height: 99vh;
             flex-direction: column;
        }
        input{
            width: 50%;
            padding: 5px;
            outline: none;
        }
        .border{
            border: 1px solid #ccc;
            width: 50%;

        }


    </style>
</head>

<body>
    <h3>Welcome to Admin Page</h3>
    <table>
        <tr>
            <th class="SM">No</th>
            <th>Name</th>
            <th>Name of FLower</th>
            <th class="LG">Quantity</th>
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
        $name = $_POST['Des'];
        $value = $_POST['value'];
        $target_dir = "Img/";
        $target_path = $target_dir . $file;
        $query = "INSERT INTO photo VALUES ('','$target_path','$name','$value')";
        $row = mysqli_query($conn, $query);
        if ($row) {
            move_uploaded_file($_FILES['Name']['tmp_name'], $target_path);
        }
    }
    ?>

        <form action="" method="post" enctype="multipart/form-data">
            <h3>Upload Image</h3>
            <input type="text" name="Des" placeholder="Title of Image"> <br>
            <input type="number" name="value" placeholder="Value of Image"><br>
            <input type="file" name='Name' class="border"> <br> <br>
            <input type="submit" name="upload"><br>
        </form>
</body>

</html>