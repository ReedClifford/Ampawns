<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register - Happy Little Learners' Camp</title>


    <link rel="icon" href="favicon.ico" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        footer {
            background-color: black;
            text-align: center;
            padding: 10px;
            color: #003638;
        }

        input {
            width: 250px;
            height: 30px;
        }

        #container1 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("images/adoption/bg.jpeg");
            background-position: center;
            background-size: cover;
            height: 130vh;

        }

        /* NAVBAR */


        .navbar {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: rgb(43, 41, 41);
            height: 10vh;
            padding: 30px;



        }

        .logo {
            width: 250px;
            height: 250px;
        }

        .nav {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            width: 30%;



        }

        .nav-item {
            list-style: none;
            font-family: monospace;
            font-size: 13px;
            font-weight: bold;
        }

        .navlink {
            text-decoration: none;
            color: #F3F2C9;
        }

        .navlink:hover {
            font-size: 1rem;
            transition: ease-in-out 299ms;
            text-decoration: underline;
            color: #53B8BB;
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }


        /* FORM */

        .form {
            flex: 1;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .center {
            margin-left: 90px;

        }

        /* .steps {
    flex: 1;
    height: 100%;
    color: wheat;
    text-align: left;
    padding: 100px;

  }

  .steps h1 {
    font: bold;
    margin: 10px;
    font-size: 3rem;
  }

  .steps h3 {
    margin: 10px;
    font-size: 1.5rem;
  }

  .steps h4 {
    margin: 10px;
    font-size: 1rem;
  }

  .steps p {
    line-height: 2;
  } */





        /* formbody */
        .fillup {
            padding: 40px;
            box-shadow: 0 5px 15px #003638;
            border: none;
            border-radius: 20px;
            margin-left: 100px auto;
            background-color: white;
        }

        .fillup h1 {
            margin: 30px;
        }

        .label {
            margin: 10px 0 10px 0;
            color: #003638;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .inputdouble {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
        }

        .inputsingle {
            display: flex;
            justify-content: flex-between;
            align-items: center;
        }

        .button {
            width: 200px;
            height: 50px;
            margin: 0px 0 0 90px;
            border-radius: 5px;
            border: solid 3px #37a3a7;
            font-weight: bold;
            color: white;
            background-color: #37a3a7;
            box-shadow: inset 0 0 0 0 #003638;
            transition: ease 499ms;
        }

        .button:hover {
            box-shadow: inset 200px 0 0 0 #003638;


        }
    </style>


    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $cnumberErr = $concernErr = $typeErr = "";
    $name = $email = $type = $concern = $cnumber = "";
    (int)$x = 0;



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Complete name is required <br>";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Please make sure your entering a valid name. <br>";
            } else {
                (int)$x = (int)$x + 1;
            }
        }

        if (empty($_POST["concern"])) {
            $concernErr = "Please type your concern. <br>";
        } else {

            (int)$x = (int)$x + 1;
        }
        if (empty($_POST["type"])) {
            $typeErr = "Please choose your concern. <br>";
        } else {

            (int)$x = (int)$x + 1;
        }


        if (empty($_POST["email"])) {
            $emailErr = "Email is required. <br>";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email. <br>";
            } else {
                (int)$x = (int)$x + 1;
            }
        }


        if (empty($_POST["cnumber"])) {
            $cnumberErr = "Contact number is required. <br>";
        } else {
            $cnumber = test_input($_POST["cnumber"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/((\+[0-9]{2})|0)[.\- ]?9[0-9]{2}[.\- ]?[0-9]{3}[.\- ]?[0-9]{4}/", $cnumber)) {
                $cnumberErr = "Invalid number. <br>";
            } else {
                (int)$x = (int)$x + 1;
            }
        }


        $name = $_POST["name"];
        $age = $_POST["concern"];
        $adrs = $_POST["type"];
        $email = $_POST["email"];
        $cnumber = $_POST["cnumber"];
    }


    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    include "connect4.php"

    ?>
    <style>
        .error {
            color: #FF0000;
        }
    </style>

</head>

<body>
    <section id="container1">
        <header>
            <nav class="navbar">
                <a href="index.php">
                    <img class="logo" src="images/homepage/logo.png" alt="logo" srcset="" />

                </a>


                <ul class="nav">
                    <li class="nav-item">
                        <a href="index.php" class="navlink">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="aboutus.php" class="navlink"> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="dogs.php" class="navlink">Our Animals</a>
                    </li>
                    <li class="nav-item">
                        <a href="faq.php" class="navlink">Faqs</a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="container">
            <div class="form">

                <form class="fillup" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <h1>Register to be a Pawtrolers(Volunteer)!</h1>
                    <div class="center">
                        <label class="label" for="">
                            Name: <span class="error">*</span>
                        </label>
                        <br>
                        <input class="inputdouble" type="text" name="name" value="<?php echo $name; ?>"><span class="error"><?php echo $nameErr; ?></span><br>

                        E-mail: <span class="error">*</span><br>
                        </label>
                        <input class="inputdouble" type="text" name="email" value="<?php echo $email; ?>"><span class="error"><?php echo $emailErr; ?></span><br>
                        <label for="" class="label">
                            Contact #: <span class="error">*</span><br>
                        </label>
                        <input class="inputdouble" type="number" name="cnumber" value="<?php echo $cnumber; ?>"><span class="error"><?php echo $cnumberErr; ?></span><br>
                        <div class="label">
                            <label for="type">Type:</label><span class="error">* </span>
                        </div>
                        <select id="type" name="type">
                            <option value="Adoption Inquiry">Adoption Inquiry</option>
                            <option value="Volunteer Inquiry">Volunteer Inquiry</option>
                            <option value="Donation Inquiry">Donation Inquiry</option>
                            <option value="Others">Others</option>
                        </select><?php echo $typeErr; ?></span><br>

                        <div class="label">
                            <label for="concern">Concern:</label><span class="error">* </span>
                        </div>
                        <div class="big">
                            <textarea rows="10" cols="30" id="multiLineInput" name="concern" value="<?php echo $concernErr; ?>"></textarea>
                            <label for="lname"><span class="error">* Required Fields.</span></label><br>

                            <input class="button" type="submit" name="submit" value="Submit">
                        </div>



                </form>
            </div>
            <!-- <div class="steps">
        <h1>Schedule Adoption Interview</h1>
        <h4>Thank you for choosing to adopt!</h4>
        <h3>INTERVIEWS ARE SCHEDULED ON FRIDAYS AND SATURDAYS ONLY.</h3>
        <p>Please note that your requested interview is not confirmed until one of our adoption counselors contacts you with the Zoom invite. It will be sent to you on our before your selected date.</p>
        <br>
        <p>If you don’t receive a Zoom invite, we will contact you to reschedule when a volunteer becomes available.</p>
        <br>
        <p>We’ll see you soon!</p>



      </div> -->
        </div>
    </section>

</body>

</html>