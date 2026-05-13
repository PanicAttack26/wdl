<!-- File Name : course.php -->

<!DOCTYPE html>
<html>

<head>

  <title>Course Enrollment</title>

  <style>
    body {
      font-family: Arial;
      background: #f2f2f2;
      margin: 0;
      padding: 20px;
    }

    h2 {
      text-align: center;
      color: darkblue;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
      background: white;
    }

    th,
    td {
      border: 1px solid black;
      padding: 12px;
      text-align: center;
    }

    input {
      padding: 10px;
      width: 100%;
      margin-top: 10px;
      box-sizing: border-box;
    }

    .btn {
      background: darkblue;
      color: white;
      border: none;
      cursor: pointer;
    }

    .btn:hover {
      background: navy;
    }

    a {
      text-decoration: none;
      color: darkblue;
      font-weight: bold;
    }

    .form-box {
      background: white;
      padding: 20px;
      margin-top: 20px;
    }
  </style>

</head>

<body>

  <h2>Course Enrollment Page</h2>

  <!-- Nested Table -->

  <table>

    <tr>
      <th>Course Details</th>
      <th>Information</th>
    </tr>

    <tr>

      <td colspan="2">

        <table>

          <tr>
            <th>Course</th>
            <th>Duration</th>
            <th>Fees</th>
          </tr>

          <tr>
            <td>BCA</td>
            <td>3 Years</td>
            <td>50000</td>
          </tr>

          <tr>
            <td>BBA</td>
            <td>3 Years</td>
            <td>45000</td>
          </tr>

        </table>

      </td>

    </tr>

  </table>

  <br>

  <!-- Hyperlink -->

  <a href="https://www.google.com" target="_blank">
    Visit College Website
  </a>

  <br><br>

  <!-- Enrollment Form -->

  <div class="form-box">

    <form method="POST">

      Enter Student Name:
      <input type="text" name="name" required>

      Enter Course Name:
      <input type="text" name="course" required>

      <input type="submit"
        value="Enroll Now"
        class="btn">

    </form>

    <!-- PHP POST Processing -->

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      echo "<h3>Enrollment Details</h3>";

      echo "Student Name : " . $_POST['name'] . "<br>";

      echo "Course Enrolled : " . $_POST['course'];
    }

    ?>

  </div>

</body>

</html>