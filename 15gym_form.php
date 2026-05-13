<!-- File Name : gym.php -->

<!DOCTYPE html>
<html>

<head>

  <title>Gym Membership Form</title>

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

      let mobile =
        document.getElementById("mobile").value;

      let email =
        document.getElementById("email").value;

      if (mobile.length != 10) {

        alert("Mobile number must be 10 digits");
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

    <h2>Gym Membership Registration</h2>

    <form method="POST"
      onsubmit="return validateForm()">

      Name:
      <input type="text"
        name="name">

      Email:
      <input type="text"
        name="email"
        id="email">

      Mobile Number:
      <input type="text"
        name="mobile"
        id="mobile">

      Select Plan:

      <select name="plan">

        <option>Monthly Plan</option>
        <option>Quarterly Plan</option>
        <option>Yearly Plan</option>

      </select>

      <input type="submit"
        value="Register"
        class="btn">

    </form>

    <!-- PHP Arrays -->

    <h3>Membership Plans</h3>

    <?php

    $plans = array(
      "Monthly Plan",
      "Quarterly Plan",
      "Yearly Plan"
    );

    foreach ($plans as $plan) {

      echo $plan . "<br>";
    }

    ?>

  </div>

</body>

</html>