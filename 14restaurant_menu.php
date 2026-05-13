<!-- File Name : restaurant.php -->

<!DOCTYPE html>
<html>

<head>

  <title>Restaurant Menu</title>

  <style>
    body {
      font-family: Arial;
      background: #f2f2f2;
    }

    .container {
      width: 70%;
      margin: auto;
      background: white;
      padding: 20px;
      margin-top: 30px;
      border-radius: 10px;
    }

    h1 {
      text-align: center;
      color: darkred;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th,
    td {
      border: 1px solid black;
      padding: 10px;
      text-align: center;
    }

    th {
      background: darkred;
      color: white;
    }

    img {
      border-radius: 8px;
    }

    a {
      text-decoration: none;
      background: darkblue;
      color: white;
      padding: 8px 12px;
      border-radius: 5px;
    }
  </style>

</head>

<body>

  <div class="container">

    <h1>Restaurant Menu</h1>

    <table>

      <tr>
        <th>Image</th>
        <th>Food Item</th>
        <th>Price</th>
      </tr>

      <tr>
        <td>
          <img src="pizza.jpg" width="100" height="80">
        </td>

        <td>Pizza</td>
        <td>₹250</td>
      </tr>

      <tr>
        <td>
          <img src="burger.jpg" width="100" height="80">
        </td>

        <td>Burger</td>
        <td>₹120</td>
      </tr>

      <tr>
        <td>
          <img src="pasta.jpg" width="100" height="80">
        </td>

        <td>Pasta</td>
        <td>₹180</td>
      </tr>

    </table>

    <br><br>

    <a href="https://www.zomato.com" target="_blank">
      Order Online
    </a>

    <br><br>

    <h2>Menu Items</h2>

    <?php

    $menu = array("Pizza", "Burger", "Pasta", "Sandwich");

    foreach ($menu as $item) {

      echo $item . "<br>";
    }

    ?>

  </div>

</body>

</html>