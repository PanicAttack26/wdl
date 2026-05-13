<!-- File Name : hostel.php -->

<!DOCTYPE html>
<html>
<head>

    <title>Hostel Registration Form</title>

    <style>

        body{
            font-family: Arial;
            background:#f2f2f2;
        }

        .container{
            width:400px;
            margin:auto;
            margin-top:40px;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0px 0px 10px gray;
        }

        h2{
            text-align:center;
            color:darkblue;
        }

        input, select{
            width:100%;
            padding:10px;
            margin-top:8px;
            margin-bottom:15px;
        }

        .btn{
            background:darkblue;
            color:white;
            border:none;
            cursor:pointer;
        }

    </style>

    <!-- JavaScript Validation -->

    <script>

        function validateForm(){

            let name =
            document.getElementById("name").value;

            let mobile =
            document.getElementById("mobile").value;

            if(name == ""){

                alert("Please enter name");
                return false;
            }

            if(mobile.length != 10){

                alert("Mobile number must be 10 digits");
                return false;
            }

            return true;
        }

    </script>

</head>

<body>

<div class="container">

    <h2>Hostel Registration</h2>

    <form method="POST"
    onsubmit="return validateForm()">

        Student Name:
        <input type="text"
        id="name"
        name="name">

        Mobile Number:
        <input type="text"
        id="mobile"
        name="mobile">

        Select Hostel Block:

        <select name="block">

            <option>A Block</option>
            <option>B Block</option>
            <option>C Block</option>

        </select>

        Room Type:

        <select name="room">

            <option>Single Sharing</option>
            <option>Double Sharing</option>

        </select>

        <input type="submit"
        value="Register"
        class="btn">

    </form>

    <!-- PHP -->

    <?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        echo "<h3>Room Allocation Details</h3>";

        echo "Student Name : " .
        $_POST['name'] . "<br>";

        echo "Mobile Number : " .
        $_POST['mobile'] . "<br>";

        echo "Hostel Block : " .
        $_POST['block'] . "<br>";

        echo "Room Type : " .
        $_POST['room'] . "<br>";

        echo "Allocated Room No : 101";
    }

    ?>

</div>

</body>
</html>