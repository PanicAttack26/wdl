<!-- File Name : profile.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    <title>Personal Profile Page</title>

    <style>
        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        } */

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 850px;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
        }

        .header {
            background: #0077b6;
            color: white;
            text-align: center;
            padding: 25px;
        }

        .header h1 {
            margin-bottom: 10px;
        }

        .welcome {
            font-size: 18px;
            color: yellow;
        }

        .content {
            display: flex;
            padding: 30px;
        }

        .left {
            width: 35%;
            text-align: center;
            border-right: 2px solid #ddd;
        }

        .left img {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            border: 5px solid #0077b6;
            margin-bottom: 20px;
        }

        .right {
            width: 65%;
            padding-left: 30px;
        }

        .right h2 {
            color: #0077b6;
            margin-bottom: 15px;
        }

        .right p {
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 10px;
        }

        .skills {
            margin-top: 20px;
        }

        .skills span {
            background: #0077b6;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            margin: 5px;
            display: inline-block;
        }

        .btn {
            margin-top: 25px;
        }

        .btn a {
            text-decoration: none;
            background: #0077b6;
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            font-size: 18px;
            transition: 0.3s;
        }

        .btn a:hover {
            background: #023e8a;
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- Header -->
        <div class="header">

            <h1>My Personal Profile</h1>

            <div class="welcome">

                <?php
                date_default_timezone_set("Asia/Kolkata");

                echo "Welcome to My Web Page <br>";
                echo "Date : " . date("d-m-Y") . " | ";
                echo "Time : " . date("h:i:s A");
                ?>

            </div>

        </div>

        <!-- Main Content -->
        <div class="content">

            <!-- Left Side -->
            <div class="left">

                <img src="profile.jpg" alt="Profile Image">

                <h2>Tanishka Pawar</h2>

                <p><b> Engineering Student</b></p>

            </div>

            <!-- Right Side -->
            <div class="right">

                <h2>About Me</h2>

                <p>
                    Hello! My name is <b>Tanishka Pawar</b>.
                    I am pursuing computer engineering and I am interested in
                    Web Development, Programming and Database Management.
                </p>

                <p>
                    <b>Email :</b> tanishka@gmail.com
                </p>

                <p>
                    <b>City :</b> RATNAGIRI
                </p>

                <p>
                    <b>Hobbies :</b> Coding, Reading, Music
                </p>

                <!-- Skills -->
                <div class="skills">

                    <h2>Skills</h2>

                    <span>HTML</span>
                    <span>CSS</span>
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>Java</span>

                </div>

                <!-- Hyperlink -->
                <div class="btn">

                    <a href="https://www.google.com" target="_blank">
                        Visit Google
                    </a>

                </div>

            </div>

        </div>


    </div>

</body>

</html>