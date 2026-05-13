<!-- File Name : appointment.php -->

<!DOCTYPE html>
<html>

<head>

  <title>Patient Appointment Form</title>

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

      let name =
        document.getElementById("name").value;

      let mobile =
        document.getElementById("mobile").value;

      if (name == "") {

        alert("Please enter patient name");
        return false;
      }

      if (mobile.length != 10) {

        alert("Mobile number must be 10 digits");
        return false;
      }

      alert("Appointment Booked Successfully");

      return true;
    }
  </script>

</head>

<body>

  <div class="container">

    <h2>Patient Appointment Form</h2>

    <form method="POST"
      onsubmit="return validateForm()">

      Patient Name:
      <input type="text" name="name" id="name">

      Mobile Number:
      <input type="text" name="mobile" id="mobile">

      Doctor Name:

      <select name="doctor">

        <option>Dr. Sharma</option>
        <option>Dr. Patil</option>
        <option>Dr. Mehta</option>

      </select>

      Appointment Date:
      <input type="date" name="date">

      <input type="submit"
        value="Book Appointment"
        class="btn">

    </form>

    <!-- PHP Display -->

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      echo "<h3>Appointment Details</h3>";

      echo "Patient Name : " . $_POST['name'] . "<br>";

      echo "Mobile Number : " . $_POST['mobile'] . "<br>";

      echo "Doctor Name : " . $_POST['doctor'] . "<br>";

      echo "Appointment Date : " . $_POST['date'];
    }

    ?>

  </div>

</body>

</html>