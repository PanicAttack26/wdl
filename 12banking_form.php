<!-- File Name : bank.php -->

<!DOCTYPE html>
<html>

<head>

  <title>Bank Customer Form</title>

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

  <!-- JavaScript -->

  <script>
    function validateForm() {

      let name =
        document.getElementById("name").value;

      if (name == "") {

        alert("Please enter customer name");
        return false;
      }

      return true;
    }

    function calculateInterest() {

      let p =
        document.getElementById("amount").value;

      let r = 5;

      let t =
        document.getElementById("time").value;

      let interest = (p * r * t) / 100;

      document.getElementById("result").textContent =
        "Interest = ₹ " + interest;
    }
  </script>

</head>

<body>

  <div class="container">

    <h2>Bank Customer Form</h2>

    <form method="POST"
      onsubmit="return validateForm()">

      Customer Name:
      <input type="text"
        name="name"
        id="name">

      Account Number:
      <input type="text"
        name="account">

      Amount:
      <input type="number"
        name="amount"
        id="amount">

      Time (Years):
      <input type="number"
        id="time">

      <input type="submit"
        value="Submit"
        class="btn">

    </form>

    <button onclick="calculateInterest()"
      class="btn">

      Calculate Interest

    </button>

    <h3 id="result"></h3>

    <!-- PHP Display -->

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      echo "<h3>Customer Details</h3>";

      echo "Name : " . $_POST['name'] . "<br>";

      echo "Account Number : " .
        $_POST['account'] . "<br>";

      echo "Amount : ₹ " .
        $_POST['amount'];
    }

    ?>

  </div>

</body>

</html>