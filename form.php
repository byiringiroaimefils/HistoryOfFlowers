<?php
session_start();
// $conn = mysqli_connect("localhost", "root", "", "collectionofflower");
include("conn.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $Message = "";

    if (isset($_POST["Login"])) {
        $email= $_POST["email"];
        $password = $_POST["password"];

        $sqli = "SELECT * FROM users WHERE email='$email' AND Passwords='$password'";
        $run = mysqli_query($conn, $sqli);
        $row = mysqli_num_rows($run);

        if ($row){
            $_SESSION["email"] = $row["email"];
            $_SESSION["password"] = $row["Passwords"];
            header("Location:index.php");
        } else {
            $Message = "Invalid Username or password!!";
        }
    }
    ?>
    <div class="container">
        <div class="header">
            <h4>BEST FLOWER COLLECTION</h4>
        </div>
        <h2>Log in </h2>
        <form action="" method="post">
            <p><?php echo  $Message ?></p>
            <label for="">Username</label><br>
            <input type="text" name="email" class="input" required><br>
            <label for="">Password</label> <br>
            <input type="password" name="password" class="input" required><br>
            <input type="checkbox">Remember Me <br><br>
            <input type="submit" name="Login" value="log in" class="submit">
            <p>No account?<a href="Signup.php">Signup</a></p>
        </form>
    </div>
    <script src="form.js"></script>
</body>

</html>
<?php
