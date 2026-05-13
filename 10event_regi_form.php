<!-- File Name : event.php -->

<!DOCTYPE html>
<html>

<head>

  <title>Event Registration Form</title>

  <style>
    body {
      font-family: Arial;
      background: #f2f2f2;
    }

    .container {
      width: 400px;
      margin: auto;
      margin-top: 40px;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px gray;
    }

    h2 {
      text-align: center;
      color: darkblue;
    }

    input,
    select {
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
  </style>

  <!-- JavaScript Validation -->

  <script>
    function validateForm() {

      let name =
        document.getElementById("name").value;

      let email =
        document.getElementById("email").value;

      if (name == "") {

        alert("Please enter name");
        return false;
      }

      if (email == "") {

        alert("Please enter email");
        return false;
      }

      alert("Event Registration Successful");

      return true;
    }
  </script>

</head>

<body>

  <div class="container">

    <h2>Event Registration Form</h2>

    <form method="POST"
      onsubmit="return validateForm()">

      Name:
      <input type="text"
        name="name"
        id="name">

      Email:
      <input type="email"
        name="email"
        id="email">

      Select Event:

      <select name="event">

        <option>Tech Fest</option>
        <option>Sports Event</option>
        <option>Cultural Program</option>

      </select>

      Mobile Number:
      <input type="text"
        name="mobile">

      <input type="submit"
        value="Register"
        class="btn">

    </form>

    <!-- PHP POST Method -->

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      echo "<h3>Registration Details</h3>";

      echo "Name : " . $_POST['name'] . "<br>";

      echo "Email : " . $_POST['email'] . "<br>";

      echo "Event : " . $_POST['event'] . "<br>";

      echo "Mobile : " . $_POST['mobile'];
    }

    ?>

  </div>

</body>

</html>