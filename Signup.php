 <?php
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
        // Define Variable
        
        $username = $Email = $password = "";
        $usernameErr = $EmailErr = $passwordErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $dateofbirth = $_POST["dateofbirth"];
            $password = $_POST["password"];
            if (empty($username)) {
                $usernameErr = "username required";
            } else {
                $username = data($username);
            }
            if (empty($email)) {
                $EmailErr = "email required";
            } else {
                $Email = data($email);
            }
            if (empty($password)) {
                $passwordErr = "password required";
            } else {
                $password = data($_POST["password"]);
                if (!preg_match("/^[0-9]*$/", $password)) {
                    $passwordErr = "Intege only";
                }
            }
        }
        function data($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if (isset($_POST["submit"])) {
            if ($usernameErr == "" && $EmailErr == "" && $passwordErr == "" && $message = "") {
                $mysqli = "INSERT INTO users VALUES ('',' $username','$password','$email','$dateofbirth')";
                $run = mysqli_query($conn, $mysqli);
                if ($run == true) {
                    $message = "you'he been Registered";
                    header("location:form.php");
                }
                else{
                    $message = "Invalid input";
                }
            };
        }
        ?>
     <div class="container">
         <div class="header">
             <h4>Online Register</h4>
         </div>
         <h2>Sign Up</h2>
         <p>Enter Your Info To Access</p>
         <!-- <p><?php echo $message ?></p> -->
         <form action="" method="post">
             <label for="">Username</label> <span>*</span><br>
             <input type="text" name="username" class="input"><span><?php echo $usernameErr ?></span> <br>
             <label for="">Email</label><span>*</span><br>
             <input type="email" name="email" class="input"><span><?php echo $EmailErr ?></span> <br>
             <label for="">Date of Birth</label> <br>
             <input type="date" name="dateofbirth" class="input"><br>
             <label for="">Password</label><span>*</span> <br>
             <input type="password" name="password" class="input"> <span><?php echo $passwordErr ?></span><br>
             <input type="checkbox">Remember Me <br><br>
             <input type="submit" name="submit" class="submit">
             <p>Already have account!!<a href="form.php">Login</a></p>
             <p>Admin-Log in<a href="Login.php">Login</a></p>
         </form>
     </div>
 </body>

 </html>