<?php
session_start();
include("conn.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Histories</title>
  <!-- <link rel="icon" href="img/logo.png" /> -->

  <link rel="stylesheet" href="i.css" />
</head>

<body>
  <header>
    <div class="con">
      <div class="logo">
        <a href="">Flowers</a>
      </div>
      <nav>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="#Flower">Gallery</a></li>
          <li><a href="#ContactUs">Contact Us</a></li>
        </ul>
      </nav>
      <div class="login">
        <div>
          <p id="resultElement"></p>
        </div>
        <div>
          <a href="Logout.php">Logout</a>
          <p><?php echo   $_SESSION["email"] ?></p>
        </div>
      </div>
    </div>
  </header>
  <section>
    <div class="cont">
      <div class="img">
        <img src="Img/pexels-pixabay-45901.jpg" alt="" id="img" />
        <img src="Img/pexels-daniel-spase-699919.jpg" alt="" id="img" />
        <img src="Img/pexels-anthony-📷📹🙂-133507.jpg" alt="" id="img" />
        <div class="best">
          <h2>COLLECTION OF FLOWERS</h2>
          <p>Best of the best flower over the world</p>
        </div>
      </div>
      <br />
      <br />
    </div>




    <div id="Flower">
      <h2>BEST FLOWER COLLECTION</h2>
      <br />
      <div class="imgs">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "collectionofflower");
        $sqli = "SELECT * FROM photo WHERE value='1'";
        $run = mysqli_query($conn, $sqli);
        $row = mysqli_fetch_assoc($run)
        ?>

        <div class="image">
          <img src="<?= $row['img'] ?>" class="img" alt="" />
          <div class="description">
            <button>Add to Favorite</button>
            <h4><?= $row['Description'] ?></h4>
          </div>
        </div>



        <?php
        $conn = mysqli_connect("localhost", "root", "", "collectionofflower");
        $sqli = "SELECT * FROM photo WHERE value='2'";
        $run = mysqli_query($conn, $sqli);
        $row = mysqli_fetch_assoc($run)
        ?>

        <div class="image">
          <img src="<?= $row['img'] ?>" class="img" alt="" />
          <div class="description">
            <button>Add to Favorite</button>
            <h4><?= $row['Description'] ?></h4>
          </div>
        </div>


        <?php
        $conn = mysqli_connect("localhost", "root", "", "collectionofflower");
        $sqli = "SELECT * FROM photo WHERE value='3'";
        $run = mysqli_query($conn, $sqli);
        $row = mysqli_fetch_assoc($run)
        ?>

        <div class="image">
          <img src="<?= $row['img'] ?>" class="img" alt="" />
          <div class="description">
            <button>Add to Favorite</button>
            <h4><?= $row['Description'] ?></h4>
          </div>
        </div>


        <?php
        $conn = mysqli_connect("localhost", "root", "", "collectionofflower");
        $sqli = "SELECT * FROM photo WHERE value='4'";
        $run = mysqli_query($conn, $sqli);
        $row = mysqli_fetch_assoc($run)
        ?>
        <div class="image">
          <img src="<?= $row['img'] ?>" class="img" alt="" />
          <div class="description">
            <button>Add to Favorite</button>
            <h4><?= $row['Description'] ?></h4>
          </div>
        </div>


        <?php
        $conn = mysqli_connect("localhost", "root", "", "collectionofflower");
        $sqli = "SELECT * FROM photo WHERE value='5'";
        $run = mysqli_query($conn, $sqli);
        $row = mysqli_fetch_assoc($run)
        ?>
        <div class="image">
          <img src="<?= $row['img'] ?>" class="img" alt="" />
          <div class="description">
            <button>Add to Favorite</button>
            <h4><?= $row['Description'] ?></h4>
          </div>
        </div>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "collectionofflower");
        $sqli = "SELECT * FROM photo WHERE value='6'";
        $run = mysqli_query($conn, $sqli);
        $row = mysqli_fetch_assoc($run)
        ?>

        <div class="image">
          <img src="<?= $row['img'] ?>" class="img" alt="" />
          <div class="description">
            <button>Add to Favorite</button>
            <h4>Flyer</h4>
          </div>
        </div>
      </div>
    </div> <br> <br>

    <div id="ContactUs">

      <?php
      // Define Variable
      $usernameErr = $nameErr = $QuantityErr = "";
      $username = $name = $Quantity = "";


      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $nameofFlower = $_POST["name"];
        $Quantity = $_POST["Quantity"];

        if (empty($username)) {
          $usernameErr = "Required";
        } else {
          $username = data($_POST["username"]);
        }
        if (empty($_POST["name"])) {
          $nameErr = "Required";
        } else {
          $name = data($_POST["name"]);
        }
        if (empty($_POST["Quantity"])) {
          $QuantityErr = "Required";
        } else {
          $Quantity = data($_POST["Quantity"]);
        }
      }

      function data($data)
      {
        $data = trim($data);
        $data = htmlspecialchars(($data));
        $data = stripcslashes($data);
        return $data;
      }

      $Message = "";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $nameofFlower = $_POST["name"];
        $Quantity = $_POST["Quantity"];

        $Sqli = "INSERT INTO Flower VALUES ('','$username',' $nameofFlower','$Quantity')";
        $run = mysqli_query($conn, $Sqli);
        if ($run == true) {
          $Message = "Item Successful Added !!!";
        }
      }
      // header('location:#ContactUs');
      ?>



      <h2>CONTACT Us</h2>
      <br /><br />
      <p><?php echo $Message ?></p>
      <br /><br />
      <div class="container">
        <form action="" method="post">
          <label for="">Name</label><span>*</span><br />
          <input type="text" name="username" placeholder="UserName" required /><span><?php echo  $usernameErr ?> </span><br />
          <label for="">Name of Flower</label><span>*</span><br />
          <input type="text" name="name" placeholder="Name of Flower" required /><span><?php echo  $nameErr ?></span><br />
          <label for="">Quantity</label> <span>*</span><br />
          <select name="Quantity" id="">
            <option>Quantity</option>
            <option value="High">High</option>
            <option value="Medium">Medium</option>
            <option value="Small">Small</option>
          </select><span><?php echo  $QuantityErr ?></span>
          <br />
          <br />
          <input type="submit" />
        </form>
      </div>
    </div>
  </section>

  <script src="i.js"></script>
  <script src="form.js"></script>
</body>

</html>