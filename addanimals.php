<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption</title>
    <!-- favicon -->
    <link rel="icon" href="favicon.ico">
    <!-- css -->
    <link rel="stylesheet" href="css/addanimals.css">
</head>

<body>
    <!-- SECTION1 -->
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
                        <a href="animals.php" class="navlink">Our Animals</a>
                    </li>
                    <li class="nav-item">
                        <a href="faq.php" class="navlink">Faqs</a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="container">

            <div class="form">
                
                <form class="fillup" action="">
                
                    <br><br>
                    <div class="inputsingle">

                    </div>
                    <div class="label">
                        <label for="Name">Name:</label>
                    </div>
                    <div class="inputsingle">
                        <input type="text" placeholder="FullName">
                    </div>
                    <div class="label">
                        <label for="Email">Age:</label>
                    </div>
                    <div class="inputsingle">
                        <input type="text" placeholder="Age">
                    </div>
                    <div class="label">
                        <label for="animal">Type :</label>
                    </div>
                    <select id="animal" name="animal">
                        <option value="cat">Cat</option>
                        <option value="dog">Dog</option>
                    </select>

                    <div class="label">
                        <label for="file">Add New Animal Image:</label>
                    </div>
                    <div class="inputsingle">
                        <input type="file">
                    </div>

                    <br><br>
                    <input class="button" type="submit">


                </form>
            </div>

            <div class="steps">
                <h1>Schedule Adoption Interview</h1>
                <h4>Thank you for choosing to adopt!</h4>
                <h3>INTERVIEWS ARE SCHEDULED ON FRIDAYS AND SATURDAYS ONLY.</h3>
                <p>Please note that your requested interview is not confirmed until one of our adoption counselors contacts you with the Zoom invite. It will be sent to you on our before your selected date.</p>
                <br>
                <p>If you don’t receive a Zoom invite, we will contact you to reschedule when a volunteer becomes available.</p>
                <br>
                <p>We’ll see you soon!</p>



            </div>




        </div>



    </section>



</body>
<footer>
    <p>© 2021 WYS101 Summer Project. All Rights Reserved</p>
</footer>

</html>