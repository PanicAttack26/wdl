<!-- File Name : admission.php -->

<!DOCTYPE html>
<html>

<head>

  <title>School Admission Webpage</title>

  <!-- Internal CSS -->

  <style>
    body {
      font-family: Arial;
      margin: 0;
      background: #f2f2f2;
    }

    .header {
      background: darkblue;
      color: white;
      text-align: center;
      padding: 20px;
    }

    .container {
      width: 70%;
      margin: auto;
      margin-top: 20px;
      background: white;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px gray;
    }

    h2 {
      color: darkblue;
    }

    form {
      margin-top: 20px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-top: 8px;
      margin-bottom: 15px;
    }

    .btn {
      background: darkblue;
      color: white;
      border: none;
      cursor: pointer;
    }

    .info {
      font-size: 18px;
      line-height: 1.8;
    }

    a {
      text-decoration: none;
      color: darkblue;
      font-weight: bold;
    }
  </style>

  <!-- External CSS -->

  <link rel="stylesheet" href="style.css">

</head>

<body>

  <!-- Header -->

  <div class="header">

    <h1>ABC Public School</h1>

    <p>Online Admission Webpage</p>

  </div>

  <!-- Main Container -->

  <div class="container">

    <!-- Image with Inline CSS -->

    <img src="school.jpg"
      width="100%"
      height="300"
      style="border-radius:10px;
    border:4px solid darkblue;">

    <br><br>

    <!-- School Information -->

    <div class="info">

      <h2>About School</h2>

      <p>
        ABC Public School provides quality education
        with smart classrooms, computer labs and sports facilities.
      </p>

      <p>
        <b>Location :</b> Pune
      </p>

      <p>
        <b>Classes :</b> Nursery to 10th
      </p>

    </div>

    <!-- Admission Form -->

    <h2>Student Admission Form</h2>

    <form method="POST">

      Student Name:
      <input type="text" name="name" required>

      Class:
      <input type="text" name="class" required>

      City:
      <input type="text" name="city" required>

      <input type="submit"
        value="Submit Admission"
        class="btn">

    </form>

    <!-- Hyperlink -->

    <a href="https://www.google.com"
      target="_blank">
      Visit School Website
    </a>

    <br><br>

    <!-- PHP String Functions -->

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $name = $_POST['name'];

      echo "<h2>Student Details</h2>";

      echo "Original Name : "
        . $name . "<br><br>";

      echo "Uppercase Name : "
        . strtoupper($name) . "<br><br>";

      echo "Name Length : "
        . strlen($name) . "<br><br>";

      echo "Reversed Name : "
        . strrev($name);
    }

    ?>

  </div>

</body>

</html>