<!-- File Name : shopping.php -->

<!DOCTYPE html>
<html>

<head>

  <title>Shopping Site Registration</title>

  <!-- <meta name="viewport"
    content="width=device-width, initial-scale=1.0"> -->

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
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px gray;
    }

    h2 {
      text-align: center;
      color: darkblue;
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

    /* Responsive Design */

    /* @media screen and (max-width:600px) {

      .container {
        width: 90%;
      }

    } */
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

      if (email.indexOf("@") == -1) {

        alert("Enter valid email");
        return false;
      }

      alert("Registration Successful");

      return true;
    }
  </script>

</head>

<body>

  <div class="container">

    <h2>Shopping Site Registration</h2>

    <form method="POST"
      onsubmit="return validateForm()">

      Name:
      <input type="text"
        name="name"
        id="name">

      Email:
      <input type="text"
        name="email"
        id="email">

      Mobile Number:
      <input type="text"
        name="mobile">

      Address:
      <input type="text"
        name="address">

      <input type="submit"
        value="Register"
        class="btn">

    </form>

    <!-- PHP Display -->

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      echo "<h3>Entered Details</h3>";

      echo "Name : " .
        $_POST['name'] . "<br>";

      echo "Email : " .
        $_POST['email'] . "<br>";

      echo "Mobile : " .
        $_POST['mobile'] . "<br>";

      echo "Address : " .
        $_POST['address'];
    }

    ?>

  </div>

</body>

</html>