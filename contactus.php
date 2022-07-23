<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>



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

        .donate {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100px;
            height: 30px;
            padding: 5px;
            border: white 1px solid;
            list-style: none;
            text-decoration: none;
            background-color: #003638;
            border-radius: 30px;
            box-shadow: inset 0 0 0 0 white;
            transition: ease-in-out 499ms;
            color: whitesmoke;
        }

        .donate:hover {
            box-shadow: inset 100px 0 0 0 white;
            color: #003638;
            border: white 1px solid;
            cursor: pointer;

        }

        .logo {
            width: 250px;
            height: 250px;
        }

        .nav {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            width: 50%;



        }

        .nav-item {
            list-style: none;
            font-family: monospace;
            font-size: 10px;
            font-weight: bold;
        }

        .navlink {
            text-decoration: none;
            color: #F3F2C9;
            
        }

        .navlink:hover {
            font-size: 1rem;
            transition: ease-in-out 299ms;
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


        .steps {
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
        }

        /* formbody */
        .fillup {
            flex: 1;
            padding: 40px;
            margin-top: 80px;
            box-shadow: 0 5px 15px #003638;
            border: none;
            border-radius: 20px;
            margin-left: 100px;

            background-color: white;
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
                        <a href="index.php" class="navlink">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="aboutus.php" class="navlink"> ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a href="dogs.php" class="navlink">ADOPT</a>
                    </li>
                    <li class="nav-item">
                        <a href="faq.php" class="navlink">FAQS</a>
                    </li>
                    <li class="nav-item">
                        <a href="faq.php" class="navlink" style="color: #53B8BB; font-size: 1rem;">CONTACT US</a>

                    </li>
                    <li class="nav-item">
                        <a href="donated.php" class="navlink"><button class="donate">DONATE</button></a>
                    </li>
                </ul>
            </nav>
        </header>


        <div class="container">
            <div class="form">
                <form class="fillup" method="post" action="connect4.php">

                    <div class="label">
                        <label for="name">Complete Name: </label> <span class="error">*</span>
                        <br><br>
                    </div>
                    <div class="inputdouble">
                        <input type="text" name="name" ><span class="error">
    </div>

                    <div class="label">
                        <label for="lname">Email address</label><span class="error">* </span>
                    </div>
                    <div class="inputdouble">
                        <input type="text" name="email">
                        
                    </div>



                    <div class="label">
                        <label for="cnumber">Contact Number:</label><span class="error">* </span>
                    </div>
                    <div class="inputdouble">
                        <input type="text" name="cnumber" >
                      
                    </div>

                    <div class="label">
                        <label for="type">Type:</label><span class="error">* </span>
                    </div>
                    <select id="type" name="type">
                        <option value="Adoption Inquiry">Adoption Inquiry</option>
                        <option value="Volunteer Inquiry">Volunteer Inquiry</option>
                        <option value="Donation Inquiry">Donation Inquiry</option>
                        <option value="Others">Others</option>
                    </select>

                    <div class="label">
                        <label for="concern">Concern:</label><span class="error">* </span>
                    </div>
                    <div class="big">
                        <textarea rows="10" cols="30" id="multiLineInput" name="concern" value=""></textarea>

                        
                    </div>










                    <div class="label">
                        <br>
                        <label for="lname"><span class="error">* Required Fields.</span></label>


                    </div>
                    <div class="inputdouble">
                        <input class="button" type="submit" name="submit" value="Submit">

                    </div>


                </form>
            </div>
            <div class="steps">
                <h1>Contact Us</h1>
                <p>Please use the form to message us. Because of the number of messages we receive everyday, please give us a few days to respond. Our messages are checked by volunteers during their spare time.</p>
                <br>
                <p>Tel. (043) 723 2744)</p>
                <br>
                <p>Email:BatangasPawtrolers@gmail.com</p>
                <br>
                <p>Contact us on <a href="https://www.facebook.com/profile.php?id=100011372886033">Facebook</a> </p>

                <a style="color:#F3F2C9; font-size:1.2rem;" href="faq.php">PLEASE SEE OUR FAQS BEFORE SENDING YOUR CONCERNS.</a>







            </div>

        </div>

    </section>
</body>
<footer>
    <p>Ⓒ2021 webdev Project</p>
</footer>




</html>