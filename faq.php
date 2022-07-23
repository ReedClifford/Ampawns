<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faq</title>
  <!-- favicon -->
  <link rel="icon" href="favicon.ico">
  <!-- css -->
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
      width: 200px;
      height: 30px;
    }

    #container1 {
      background-color: white;

      height: 200vh;

    }

    /* NAVBAR */


    .navbar {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: rgb(43, 41, 41);
      height: 10vh;
      padding: 30px;
      z-index: 2;
      position: sticky;
      top: 0%;



    }

    .logo {
      width: 250px;
      height: 250px;
    }

    .nav {
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      width: 40%;



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
      font-size: 10PX;
    }

    .navlink:hover {
      font-size: 1rem;
      transition: ease-in-out 299ms;
      color: #53B8BB;
    }


    /* FAQ */
    .text {
      margin: 30px auto;

    }

    .text h1 {
      font-weight: bold;
      color: #003638;
      display: flex;
      justify-content: center;
    }

    .faqcontainer1 {
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      padding: 20px;
      height: 50vh;
    }

    .faq1 {
      flex: 2;
      background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("images/faq/bg.jpeg");
      background-position: center;
      background-size: cover;
      color: rgb(218, 208, 208);
      height: 40vh;
      margin: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      border-radius: 20px;
      transition: transform 2s;
      box-shadow: 0 10px 20px #003638;
    }

    .faq1:hover {
      transform: scale(1.1);
      cursor: pointer;
    }

    .faq1::after {
      content: "Yes. All visitations must be booked through our website. We will only accommodate guests within their appointed schedule, so please arrive on time.";
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 40vh;
      background-color: black;
      top: 0;
      left: 0;
      color: white;
      border-radius: 20px;
      opacity: 0;

    }

    .faq1:hover::after {
      opacity: 0.8;
    }

    .faq2 {
      flex: 2;
      background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("images/faq/bg.jpeg");
      background-position: center;
      background-size: cover;
      color: rgb(218, 208, 208);
      height: 40vh;
      margin: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      border-radius: 20px;
      transition: transform 2s;
      box-shadow: 0 10px 20px #003638;
    }

    .faq2:hover {
      transform: scale(1.1);
      cursor: pointer;
    }

    .faq2::after {
      content: "It is very rare that purebred cats or dogs need to be rescued and admitted to the shelter. Sadly, many people think that our local breeds (Aspins and Puspins) belong in the streets. They are often the ones that get abandoned or mistreated. That is why the shelter is full of Aspins and Puspins who have been waiting many years to get adopted, while people are willing to spend money to buy expensive breeds from breeders and pet shops.";
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 40vh;
      background-color: black;
      top: 0;
      left: 0;
      color: white;
      border-radius: 20px;
      opacity: 0;

    }

    .faq2:hover::after {
      opacity: 0.8;
    }

    /* SECOND FAQ ROW */
    .faqcontainer2 {
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      padding: 20px;
      height: 50vh;
    }

    .faq3 {
      flex: 2;
      background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("images/faq/bg.jpeg");
      background-position: center;
      background-size: cover;
      color: rgb(218, 208, 208);
      height: 40vh;
      margin: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      border-radius: 20px;
      transition: transform 2s;
      box-shadow: 0 10px 20px #003638;
    }

    .faq3:hover {
      transform: scale(1.1);
      cursor: pointer;
    }

    .faq3::after {
      content: "There are times when puppies and kittens are admitted to the shelter. These are only available for fostering for up to 6 months, or until they are completely vaccinated and spayed/neutered. Fostered puppies and kittens may be permanently adopted after this period if the fosterer passes the adoption application.";
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 40vh;
      background-color: black;
      top: 0;
      left: 0;
      color: white;
      border-radius: 20px;
      opacity: 0;

    }

    .faq3:hover::after {
      opacity: 0.8;
    }

    .faq4 {
      flex: 2;
      background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("images/faq/bg.jpeg");
      background-position: center;
      background-size: cover;
      color: rgb(218, 208, 208);
      height: 40vh;
      margin: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      border-radius: 20px;
      transition: transform 2s;
      box-shadow: 0 10px 20px #003638;
    }

    .faq4:hover {
      transform: scale(1.1);
      cursor: pointer;
    }

    .faq4::after {
      content: "Yes. We will deny an adoption application if we think that it’s better to keep the animal at the shelter. Some reasons for denied applications include: Not being able to keep their pet indoors, incompatibility with the household (some pets are not good with children or other animals), current pets in neglected condition, plus other circumstances that may be damaging to the health, safety, and happiness of our shelter animals.";
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 40vh;
      background-color: black;
      top: 0;
      left: 0;
      color: white;
      border-radius: 20px;
      opacity: 0;

    }

    .faq4:hover::after {
      opacity: 0.8;
    }

    /* row3 faq */

    .faqcontainer3 {
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      padding: 20px;
      height: 50vh;
    }

    .faq5 {
      flex: 2;
      background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("images/faq/bg.jpeg");
      background-position: center;
      background-size: cover;
      color: rgb(218, 208, 208);
      height: 40vh;
      margin: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      border-radius: 20px;
      transition: transform 2s;
      box-shadow: 0 10px 20px #003638;
    }

    .faq5:hover {
      transform: scale(1.1);
      cursor: pointer;
    }

    .faq5::after {
      content: "Anyone who wants a pet must be 100% committed to keeping their new family member. That is why adoption applicants go through multiple interviews and visits. HOWEVER, if you truly can’t keep your adopted pet, please don’t abandon them on the streets or with strangers. Please return them to us so we can find another home for them.";
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 40vh;
      background-color: black;
      top: 0;
      left: 0;
      color: white;
      border-radius: 20px;
      opacity: 0;

    }

    .faq5:hover::after {
      opacity: 0.8;
    }

    .faq6 {
      flex: 2;
      background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("images/faq/bg.jpeg");
      background-position: center;
      background-size: cover;
      color: rgb(218, 208, 208);
      height: 40vh;
      margin: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      border-radius: 20px;
      transition: transform 2s;
      box-shadow: 0 10px 20px #003638;
    }

    .faq6:hover {
      transform: scale(1.1);
      cursor: pointer;
    }

    .faq6::after {
      content: "All of our shelter animals, particularly the dogs, go through rehabilitation and behavioral training before being eligible for adoption. Your pet visits will also give you the opportunity to learn about potential issues and how to deal with them. If issues manifest only after you take your pet home, we encourage you to exhaust all efforts to help your pet. Remember that they have already been abandoned or mistreated in the past. Please ask us about pet training and we’ll be happy to help.";
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 40vh;
      background-color: black;
      top: 0;
      left: 0;
      color: white;
      border-radius: 20px;
      opacity: 0;

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

    .faq6:hover::after {
      opacity: 0.8;
    }
  </style>
</head>

<body>

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
        <a href="faq.php" class="navlink" style="color: #53B8BB; font-size: 1.2rem;">FAQS</a>
      </li>
      <li class="nav-item">
        <a href="contactus.php" class="navlink">CONTACT US</a>
      </li>
      <li class="nav-item">
        <a href="donated.php" class="navlink"><button class="donate">DONATE</button></a>
      </li>
    </ul>
  </nav>

  <!-- SECTION1 -->
  <section id="container1">

    <DIV class="text">
      <h1>FREQUENTLY ASK QUESTIONS</h1>
    </DIV>

    <div class="faqcontainer1">

      <div class="faq1">
        <h2>Do I need an appointment?</h2>
      </div>
      <div class="faq2">
        <h2>Do you have purebred cats or dogs?</h2>
      </div>

    </div>
    <div class="faqcontainer2">
      <div class="faq3">
        <h2>Do you have puppies or kittens for adoption?</h2>
      </div>
      <div class="faq4">
        <h2>Can my adoption application get denied?</h2>
      </div>

    </div>
    <div class="faqcontainer3">
      <div class="faq5">
        <h2>Can I return my adopted pet if I change my mind?</h2>
      </div>
      <div class="faq6">
        <h2>What if my adopted pet becomes aggressive or destructive?</h2>
      </div>

    </div>


  </section>

</body>
<footer>
  <p>© 2021 WYS101 Summer Project. All Rights Reserved</p>
</footer>

</html>