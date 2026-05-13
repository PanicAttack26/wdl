<!-- File Name : employee.php -->

<!DOCTYPE html>
<html>

<head>

  <title>Employee Registration</title>

  <style>
    body {
      font-family: Arial;
      background: #f2f2f2;
    }

    .container {
      width: 350px;
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

      let name = document.getElementById("name").value;
      let email = document.getElementById("email").value;

      if (name == "") {
        alert("Name field is empty");
        return false;
      }

      if (email == "") {
        alert("Email field is empty");
        return false;
      }

      if (email.indexOf("@") == -1) {
        alert("Enter valid email");
        return false;
      }

      return true;
    }
  </script>

</head>

<body>

  <div class="container">

    <h2>Employee Registration</h2>

    <form method="POST"
      onsubmit="return validateForm()">

      Employee Name:
      <input type="text" name="name" id="name">

      Email:
      <input type="text" name="email" id="email">

      Department:
      <input type="text" name="department">

      Mobile Number:
      <input type="text" name="mobile" id="mobile">

      <input type="submit" value="Register" class="btn">

    </form>

    <!-- PHP Script -->

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      echo "<h3>Employee Details</h3>";

      echo "Name : " . $_POST['name'] . "<br>";
      echo "Email : " . $_POST['email'] . "<br>";
      echo "Department : " . $_POST['department'] . "<br>";
      echo "Mobile : " . $_POST['mobile'] . "<br>";
    }

    ?>

  </div>

</body>

</html>