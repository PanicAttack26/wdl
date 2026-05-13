<!-- File Name: student.php -->

<!DOCTYPE html>
<html>

<head>
  <title>Student Registration Form</title>

  <style>
    body {
      font-family: Arial;
      background: #f2f2f2;
    }

    .box {
      width: 400px;
      margin: auto;
      margin-top: 50px;
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
      margin: 8px 0;
    }

    .btn {
      background: darkblue;
      color: white;
      border: none;
      cursor: pointer;
    }
  </style>

  <script>
    function validateForm() {

      let mobile = document.getElementById("mobile").value;

      if (mobile.length != 10) {
        alert("Mobile number must be 10 digits");
        return false;
      }

      return true;
    }
  </script>
</head>

<body>

  <div class="box">

    <h2>Student Registration</h2>

    <form method="POST" onsubmit="return validateForm()">

      Name:
      <input type="text" name="name" required>

      Email:
      <input type="email" name="email" required>

      Gender:
      <input type="radio" name="gender" value="Male"> Male
      <input type="radio" name="gender" value="Female"> Female
      <br><br>

      DOB:
      <input type="date" name="dob" required>

      Mobile Number:
      <input type="text" name="mobile" id="mobile" required>

      <input type="submit" value="Register" class="btn">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      echo "<h3>Submitted Details</h3>";

      echo "Name : " . $_POST['name'] . "<br>";
      echo "Email : " . $_POST['email'] . "<br>";
      echo "Gender : " . $_POST['gender'] . "<br>";
      echo "DOB : " . $_POST['dob'] . "<br>";
      echo "Mobile : " . $_POST['mobile'] . "<br>";
    }

    ?>

  </div>

</body>

</html>