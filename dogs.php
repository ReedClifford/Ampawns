<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adopt Dogs</title>
  <!-- favicon -->
  <link rel="icon" href="favicon.ico">
  <style>
    * {
      margin: 0%;
      padding: 0%;
      box-sizing: border-box;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    html {
      scroll-behavior: smooth;
    }

    footer {
      background-color: #003638;
      text-align: center;
      padding: 10px;
      color: #53B8BB;

    }

    #container1 {
      height: 100vh;
      background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("images/foster/dogo/dog1.jpg");
      background-position: center;
      background-size: cover;
      position: relative;
    }

    /* sticky navbar */
    .navbar-main {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 10vh;
      padding: 30px;
      position: sticky;
      background-color: rgb(22, 22, 22);
      top: 0%;
      z-index: 2;

    }

    .nav-main {
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      width: 50%;
      padding: 20px;

    }

    .mainnav-item {
      list-style: none;
      font-family: monospace;
      font-size: 13px;
      font-weight: bold;
    }

    .mainnavlink {
      text-decoration: none;
      color: #F3F2C9;
    }

    .mainnavlink:hover {
      font-size: 1rem;
      transition: ease-in-out 299ms;
      color: #53B8BB;
    }

    /* navbar */
    .navbar {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 10vh;
      padding: 30px;



    }

    .navbtn {
      font-weight: bold;
      color: #F3F2C9;
      width: 150px;
      height: 30px;
      background: none;
      border-radius: 5px;
      border: none;
      box-shadow: inset 0 0 0 0 #F3F2C9;
      transition: ease 499ms;
    }

    .navbtn:hover {
      box-shadow: inset 150px 0 0 0 #F3F2C9;
      color: #003638;
      cursor: pointer;
    }

    .active {
      background-color: #F3F2C9;
      color: #003638;
      cursor: pointer;

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


    }

    .navlink {
      text-decoration: none;
      color: #F3F2C9;
      font-size: 10px;

    }

    .navlink:hover {
      font-size: 1rem;
      transition: ease-in-out 299ms;
      color: #53B8BB;
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

    /* Screen1 */
    .foster {
      background-color: whitesmoke;
      padding: 60px;
      width: 700px;
      position: absolute;
      right: 0;
      top: 30%;
      border-radius: 80px 0 0 80px;

    }

    .foster h1 {
      font-size: 4rem;
      color: #055052;
      font-weight: bold;
      padding: 20px;
    }

    .foster p {
      font-size: 1rem;
      padding: 20px;
      line-height: 1.5;
    }

    /* DOGS */
    #container3 {
      height: 100vh;
      padding: 10px;
      background: white;
    }

    #container3 h1 {
      font-size: 3rem;
      color: #003638;

    }

    #container3 h3 {
      font-size: 1.5rem;
      color: #003638;
    }

    #container3 p {
      line-height: 1.4;
      padding: 5px;
    }

    #container3 a {
      text-decoration: none;

    }

    .dogdiv1,
    .dogdiv2 {
      margin: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 45vh;
      border-radius: 10px;
      box-shadow: 0 5px 15px #003638;

    }

    .doginfo1,
    .doginfo2 {
      flex: 1;
      text-align: left;
      padding: 60px;
      height: 100%;
      border-radius: 0 10px 10px 0;
      background-color: whitesmoke;
    }

    .dogimg1 {
      flex: 1;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/foster/dogo/dog1.jpg");
      background-position: center;
      object-fit: cover;
      background-size: cover;
      height: 100%;
      border-radius: 10px 0 0 10px;

    }



    .dogimg2 {
      flex: 1;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/foster/dogo/dog2.jpg");
      background-position: center;
      object-fit: cover;
      background-size: cover;
      height: 100%;
      border-radius: 10px 0 0 10px;

    }

    .btn-adopt {
      border: 4px solid #055052;
      color: white;
      background-color: #055052;
      margin-top: 20px;
      width: 200px;
      height: 50px;
      border-radius: 15px;
      box-shadow: inset 0 0 0 0 #003638;
      transition: ease 299ms;
    }

    .btn-adopt:hover {
      box-shadow: inset 0 200px 200px 0 #003638;
      font-weight: bold;
    }

    /* SECTION4 DOGS */

    #container4 {
      height: 110vh;
      padding: 10px;
      background: white;
    }

    #container4 h1 {
      font-size: 3rem;
      color: #003638;

    }

    #container4 h3 {
      font-size: 1.5rem;
      color: #003638;
    }

    #container4 p {
      line-height: 1.4;
      padding: 5px;
    }

    #container4 a {
      text-decoration: none;

    }

    .dogdiv3,
    .dogdiv4 {
      margin: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 45vh;
      border-radius: 10px;
      box-shadow: 0 5px 15px #003638;

    }

    .doginfo3,
    .doginfo4 {
      flex: 1;
      text-align: left;
      padding: 40px;
      height: 100%;
      border-radius: 0 10px 10px 0;
      background-color: whitesmoke;
    }

    .dogimg3 {
      flex: 1;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/foster/dogo/dog3.jpg");
      background-position: center;
      object-fit: cover;
      background-size: cover;
      height: 100%;
      border-radius: 10px 0 0 10px;

    }



    .dogimg4 {
      flex: 1;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/foster/dogo/dog4.jpg");
      background-position: center;
      object-fit: cover;
      background-size: cover;
      height: 100%;
      border-radius: 10px 0 0 10px;

    }

    .btn-adopt {
      border: 4px solid #055052;
      color: white;
      background-color: #055052;
      margin-top: 20px;
      width: 200px;
      height: 50px;
      border-radius: 15px;
      box-shadow: inset 0 0 0 0 #003638;
      transition: ease 299ms;
    }

    .btn-adopt:hover {
      box-shadow: inset 0 200px 200px 0 #003638;
      font-weight: bold;
    }


    .backtotop {
      padding: 40px;
      color: #003638;
      transition: ease 1s;
    }

    .backtotop:hover {
      font-weight: bold;

    }

    /* SECTION2 */

    #container2 {
      height: 130vh;
      background-color: rgb(22, 22, 22);
      padding: 5px;
      text-align: center;
    }

    .text {
      margin: 20px;
    }

    .text h1 {
      margin: 20px;
      color: white;
      font-size: 2rem;
      padding: 40px;

    }

    .text p {
      font-size: 1rem;
      color: white;
    }

    .about {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;

    }

    .about h1 {
      margin: 20px;
      border-bottom: solid 3px whitesmoke;
    }

    .box1 {
      flex: 1;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/foster/about/img1.jpeg");
      background-position: center;
      background-size: cover;
      text-align: center;
      padding: 50px;
      height: 55vh;
      margin: 15px;
      border-radius: 20px;
      transition: transform 1s;
      box-shadow: 0 5px 15px black;
      color: #F3F2C9;
    }


    .box2 {
      flex: 1;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/foster/about/img2.png");
      background-position: center;
      background-size: cover;
      text-align: center;
      padding: 50px;
      height: 55vh;
      margin: 15px;
      border-radius: 20px;
      transition: transform 1s;
      box-shadow: 0 5px 15px black;
      color: #F3F2C9;
    }

    .box3 {
      flex: 1;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/foster/about/img3.jpeg");
      background-position: center;
      background-size: cover;
      text-align: center;
      padding: 50px;
      height: 55vh;
      margin: 15px;
      border-radius: 20px;
      transition: transform 1s;
      box-shadow: 0 5px 15px black;
      color: #F3F2C9;
    }


    .box1:hover,
    .box2:hover,
    .box3:hover {
      cursor: pointer;
      transform: scale(1.1);
    }

    .btnsection {
      height: 20vh;
      display: flex;
      justify-content: center;
      align-items: center;


    }

    .mainbtn1 {
      border: 2px solid #055052;
      color: white;
      background-color: #055052;
      margin-top: 20px;
      width: 200px;
      height: 50px;
      border-radius: 15px;
      box-shadow: inset 0 0 0 0 #003638;
      transition: ease 799ms;
      margin: 30px;

    }

    .mainbtn1:hover {
      box-shadow: inset 200px 0 0 0 #003638;
      font-weight: bold;
    }

    .mainbtn2 {
      border: 2px solid #055052;
      color: #003638;
      margin-top: 20px;
      width: 200px;
      height: 50px;
      border-radius: 15px;
      box-shadow: inset 0 0 0 0 #003638;
      transition: ease 799ms;
      margin: 30px;
    }

    .mainbtn2:hover {
      box-shadow: inset 200px 0 0 0 #003638;
      font-weight: bold;
      color: #F3F2C9;
    }

    #donate {
      height: 100vh;
      padding: 70px;
    }

    #donate h1 {
      font-size: 2rem;
      padding: 20px;
    }

    #donate p {
      padding: 20px;
      line-height: 1.5;
    }

    .donate2 {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .about1 {
      flex: 1;
      padding: 40px;
      color: #003638;
      border: 20px solid #003638;
      border-radius: 30px;
      margin: 40px;
      box-shadow: 0 40px 50px grey;
    }



    .about2 {
      flex: 2;
      padding: 30px;
      background-color: #055052;
      color: #F3F2C9;
      margin: 40px;
      box-shadow: 0 40px 50px grey;

    }

    .about2 p {
      line-height: 2;
      font-size: 1.3rem;
    }
  </style>
</head>

<body>
  <nav class="navbar-main">
    <a href="index.php">
      <img class="logo" src="images/homepage/logo.png" alt="logo" srcset="" />
    </a>



    <ul class="nav-main">
      <li class="mainnav-item">
        <a href="index.php" class="navlink ">HOME</a>
      </li>
      <li class="mainnav-item">
        <a href="aboutus.php" class="navlink"> ABOUT US</a>
      </li>
      <li class="mainnav-item">
        <a href="dogs.php" class="navlink" style="color: #53B8BB; font-size: 1.1rem;">ADOPT</a>
      </li>
      <li class="mainnav-item">
        <a href="faq.php" class="navlink">FAQS</a>
      </li>
      <li class="mainnav-item">
        <a href="contactus.php" class="navlink">CONTACT US</a>
      </li>
      <li class="nav-item">
        <a href="donated.php" class="navlink"><button class="donate">DONATE</button></a>
      </li>
    </ul>
  </nav>




  <section id="container1">
    <header>
      <nav class="navbar">
        <ul class="nav">
          <li class="nav-item">
            <a href="dogs.php" class="navlink "> <button class="navbtn active">Adopt a Dog</button></a>
          </li>
          <li class="nav-item">
            <a href="cats.php" class="navlink"> <button class="navbtn">Adopt a Cat</button></a>
          </li>
        </ul>
      </nav>
    </header>

    <div class="foster">
      <h1>
        Adopt Dogs from <br />
        AMPawN
      </h1>

      <p>
        these are the lovable and adorable dogs that you can adopt.
      </p>
    </div>
  </section>
  <!-- dogs1 -->
  <section id="container3">
    <div class="dogdiv1">
      <div class="dogimg1"></div>
      <div class="doginfo1">
        <h1>1.Georgia</h1>
        <p>Age:6months</p>
        <p>Sex:Female</p>
        <h3>Ideal Home</h3>
        <p>
          Georgia,needs to be a solo dog because she is very jealous and
          dominant. It’s also best if the household has no small children who
          might mishandle her.
        </p>
      </div>
    </div>
    <div class="dogdiv2">
      <div class="dogimg2"></div>
      <div class="doginfo2">
        <h1>2.Willy</h1>
        <p>Age:1yr 2months</p>
        <p>Sex:Male</p>
        <h3>Ideal Home</h3>
        <p>
          Willy,is well socialized with other canines, and has no glaring
          requirements or behavioral issues. She should be well suited to most
          families.
        </p>
      </div>
    </div>
  </section>

  <!-- SECTION4 DOGSP2 -->
  <section id="container4">
    <div class="dogdiv3">
      <div class="dogimg3"></div>
      <div class="doginfo3">
        <h1>3.Tony</h1>
        <p>Age:1yr 2months</p>
        <p>Sex:Male</p>
        <h3>Ideal Home</h3>
        <p>
          Despite being quiet and reserved, Tony likes being around other
          dogs. It would be best to keep him and his BFF Willy together
        </p>
      </div>
    </div>
    <div class="dogdiv4">
      <div class="dogimg4"></div>
      <div class="doginfo4">
        <h1>4.Reid</h1>
        <p>Age:2months</p>
        <p>Sex:Male</p>
        <h3>Ideal Home</h3>
        <p>
          Reid tends to be a little bit shy at first, but when he does come
          out of his shell, he loves to play. A family home with one or two
          other dogs would suit him well, although Reid would also thrive as a
          solo cat.
        </p>
      </div>
    </div>
    <a class="backtotop" href="#container1">Back To Top</a>
  </section>
  <!-- SECTION3 -->

  <section id="container2">
    <div class="text">
      <h1>How to adopt from AMPawN</h1>
      <p>
        We have very strict protocols in place for adopting out our shelter cats and dogs. These animals have already been through very difficult times. We need to be 100% certain, without a shadow of a doubt, that they will be placed in loving homes.
      </p>
    </div>
    <div class="about">
      <div class="box1">
        <h1>1. Register for Adoption.</h1>
        <p>
          To apply for adoption,
          <strong><a href="reg.php">click here</a></strong>
        </p>
      </div>

      <div class="box2">
        <h1>2. Zoom Interview</h1>
        <p>
          Using the form, you will be asked to select a date and time for your 1st interview, at least 3 days in advance. That way, we can check our calendar for availability of our interviewers. The Zoom link will be sent to you via email on or before your interview date.

        </p>
      </div>

      <div class="box3">
        <h1>3. Shelter Visits</h1>
        <p>
          Your visit will be scheduled if your pass the interview. The 1st visit is where you will choose your prospective pet and have your 2nd interview. The 2nd visit is the time to bond with your pet and finalize your application. You may take home your pet on the 3rd visit.

        </p>
      </div>

    </div>
    <div class="btnsection">
      <a href="reg.php"><button class="mainbtn1">Register to Adopt</button></a>
      <a href="vol.php"><button class="mainbtn2">Register to Volunteer</button></a>

    </div>


  </section>

  <section id="donate">
    <div class="donate2">
      <div class="about1">
        <h1>Adoption Fee</h1>
        <p>The adoption fee is <strong>P500 for cats</strong> and <strong>P1,000 for dogs.</strong> This should be paid when you pick up your new pet.</p>
        <br>

      </div>

      <div class="about2">

        <p>
          Why is there an adoption fee?
          When you adopt a pet from us, you can be sure that they are 1) up to date on vaccinations, 2) treated for ticks and fleas, and 3) already spayed or neutered. All of this would cost between P5,000 to P10,000 at private vet clinics. Therefore, the adoption fee is a very small amount to pay for ensuring that you are taking home a healthy pet.

        </p>
      </div>
    </div>
  </section>

</body>
<footer>
  <p>© 2021 WYS101 Summer Project. All Rights Reserved</p>
</footer>

</html>