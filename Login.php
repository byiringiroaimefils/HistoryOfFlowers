<?php
session_start();;
include("conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignupFForm</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $Message = "";

    if (isset($_POST["Login"])) {
        $Passcode = $_POST["Passcode"];

        $sqli = "SELECT * FROM admin WHERE Passcode='$Passcode'";
        $run = mysqli_query($conn, $sqli);
        $row = mysqli_fetch_array($run);

        if ($row) {
            $_SESSION["Passcode"] = $row["Passcode"];
            header("Location:Admin.php");
        } else {
            $Message = " Error  Passcode!!";
        }
    }
    ?>
    <div class="container">
        <div class="header">
            <h4>BEST FLOWER COLLECTION</h4>
        </div>
        <h2>Admin-Log in </h2>
        <form action="" method="post">
            <label for="">PassCode</label> <br>
            <input type="password" name="Passcode" class="input" required> <br><br>
            <input type="submit" name="Login" value="Log in" class="submit">
        </form>
    </div>
    <script src="form.js"></script>
</body>

</html>