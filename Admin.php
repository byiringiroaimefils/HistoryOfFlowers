<?php
session_start();

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
          <li> <a href="">Home</a> </li>
          <li> <a href="#Flower">Gallery</a> </li>
          <li> <a href="Order.php">Flower Order</a> </li>
          <li> <a href="#ContactUs">Contact Us</a> </li>

        </ul>
      </nav>
      <div class="login">
        <a href="Logout.php">Logout</a><br> 
      </div>
    </div>
  </header>
  <section>
    <div class="cont">
      <div class="img">
        <img src="Img/pexels-pixabay-45901.jpg" alt="Img" id="img" />
        <img src="Img/pexels-daniel-spase-699919.jpg" alt="Img" id="img" />
        <img src="Img/pexels-anthony-📷📹🙂-133507.jpg" alt="img" id="img" />
        <div class="">
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
          <a href='delete.php? ID={$row['ID']}'>Delete</a>
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
            <a href="delete.php" >Add to Favorite</a>
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
            <a href="delete.php" >Add to Favorite</a>
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
            <a href="delete.php" >Add to Favorite</a>
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
            <a href="delete.php">Add to Favorite</a>
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
            <a href="delete.php">Add to Favorite</a>
            <h4>Flyer</h4>
          </div>
        </div>
      </div>
    </div> <br> <br>



    <div id="ContactUs">
      <h2>CONTACT US</h2> <br> <br><br> <br>
      <div class="container">
        <form action="" method="get">
          <label for="">Name</label><br />
          <input type="text" name="" id="" placeholder="UserName" /> <br />
          <label for="">Name of Flower</label><br />
          <input type="text" name="" id="" placeholder="Name of Flower" />
          <br />
          <label for="">Quantity</label> <br />
          <select>
            <option value="">Quantity</option>
            <option value="">Large</option>
            <option value="">Medium</option>
            <option value="">Small</option>
          </select> <br> <br>
          <input type="submit" />
        </form>
      </div>
    </div>
  </section>

  <script src="i.js"></script>
</body>

</html>