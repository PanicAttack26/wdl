<!-- File Name : movie.php -->

<!DOCTYPE html>
<html>

<head>

  <title>Movie Booking</title>

  <style>
    body {
      font-family: Arial;
      background: #f2f2f2;
      margin: 0;
    }

    h1 {
      text-align: center;
      background: darkblue;
      color: white;
      padding: 20px;
      margin: 0;
    }

    .content {
      padding: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
    }

    th,
    td {
      border: 1px solid black;
      padding: 12px;
      text-align: center;
    }

    h2 {
      color: darkblue;
    }

    input,
    select {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      margin-bottom: 15px;
    }

    .btn {
      background: darkblue;
      color: white;
      border: none;
      cursor: pointer;
    }
  </style>

  <!-- JavaScript -->

  <script>
    function confirmBooking() {

      alert("Movie Ticket Booked Successfully");

      return true;
    }
  </script>

</head>

<body>

  <h1>Movie Booking Page</h1>

  <div class="content">

    <h2>Show Details</h2>

    <!-- Nested Table -->

    <table>

      <tr>
        <th>Movie Details</th>
      </tr>

      <tr>

        <td>

          <table>

            <tr>
              <th>Movie Name</th>
              <th>Show Time</th>
              <th>Price</th>
            </tr>

            <tr>
              <td>Avengers</td>
              <td>10:00 AM</td>
              <td>₹250</td>
            </tr>

            <tr>
              <td>KGF 2</td>
              <td>2:00 PM</td>
              <td>₹200</td>
            </tr>

          </table>

        </td>

      </tr>

    </table>

    <br>

    <!-- Booking Form -->

    <h2>Book Your Ticket</h2>

    <form method="POST"
      onsubmit="return confirmBooking()">

      Enter Name:
      <input type="text" name="name" required>

      Select Movie:

      <select name="movie">

        <option>Avengers</option>
        <option>KGF 2</option>

      </select>

      Number of Tickets:
      <input type="number" name="tickets" required>

      <input type="submit"
        value="Book Ticket"
        class="btn">

    </form>

    <!-- PHP POST -->

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      echo "<h2>Booking Details</h2>";

      echo "Customer Name : " .
        $_POST['name'] . "<br><br>";

      echo "Movie Name : " .
        $_POST['movie'] . "<br><br>";

      echo "Tickets Booked : " .
        $_POST['tickets'];
    }

    ?>

  </div>

</body>

</html>