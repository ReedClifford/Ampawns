<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adopt A Cat</title>
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
      background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("images/foster/cats/Shichi.jpeg");
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
      font-size: 3rem;
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
    #container5 {
      height: 100vh;
      padding: 10px;
      background: rgb(236, 227, 217);
    }

    #container5 h1 {
      font-size: 3rem;
      color: #003638;

    }

    #container5 h3 {
      font-size: 1.5rem;
      color: #003638;
    }

    #container5 p {
      line-height: 1.4;
    }

    #container5 a {
      text-decoration: none;

    }

    .catdiv1,
    .catdiv2 {
      margin: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 45vh;
      border-radius: 10px;
      box-shadow: 0 5px 15px #003638;
      background-color: whitesmoke;

    }

    .catinfo1,
    .catinfo2 {
      flex: 1;
      text-align: left;
      padding: 40px;
      height: 100%;
      border-radius: 10px 0 0 10px;
      background-color: whitesmoke;
    }

    .catimg1 {
      flex: 1;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/foster/cats/Alice.jpeg");
      background-position: center;
      object-fit: cover;
      background-size: cover;
      height: 100%;
      border-radius: 0 10px 10px 0;

    }



    .catimg2 {
      flex: 1;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/foster/cats/Blur.jpeg");
      background-position: center;
      object-fit: cover;
      background-size: cover;
      height: 100%;
      border-radius: 0 10px 10px 0;

    }

    .btn-adopt {
      border: 4px solid #055052;
      color: whitesmoke;
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

    /* SECTION6 CATS */
    #container6 {
      height: 100vh;
      padding: 10px;
      background: rgb(236, 227, 217);
    }

    #container6 h1 {
      font-size: 3rem;
      color: #003638;

    }

    #container6 h3 {
      font-size: 1.5rem;
      color: #003638;
    }

    #container6 p {
      line-height: 1.4;
    }

    #container6 a {
      text-decoration: none;

    }

    .catdiv3,
    .catdiv4 {
      margin: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 45vh;
      border-radius: 10px;
      box-shadow: 0 5px 15px #003638;
      background-color: whitesmoke;

    }

    .catdiv3 p {
      font-size: 13px;
      line-height: 1;
    }

    .catinfo3,
    .catinfo4 {
      flex: 1;
      text-align: left;
      padding: 40px;
      height: 100%;
      border-radius: 10px 0 0 10px;
      background-color: whitesmoke;
    }

    .catimg3 {
      flex: 1;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/foster/cats/Espi.jpeg");
      background-position: center;
      object-fit: cover;
      background-size: cover;
      height: 100%;
      border-radius: 0 10px 10px 0;

    }



    .catimg4 {
      flex: 1;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/foster/cats/Looci.jpeg");
      background-position: inherit;
      object-fit: cover;
      background-size: cover;
      height: 100%;
      border-radius: 0 10px 10px 0;

    }

    .btn-adopt {
      border: 4px solid #055052;
      color: whitesmoke;
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

    /* SECTION7 CATS */
    #container7 {
      height: 100vh;
      padding: 10px;
      background: rgb(236, 227, 217);
    }

    #container7 h1 {
      font-size: 3rem;
      color: #003638;

    }

    #container7 h3 {
      font-size: 1.5rem;
      color: #003638;
    }

    #container7 p {
      line-height: 1.4;
    }

    #container7 a {
      text-decoration: none;

    }

    .catdiv5,
    .catdiv6 {
      margin: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 45vh;
      border-radius: 10px;
      box-shadow: 0 5px 15px #003638;
      background-color: whitesmoke;

    }

    .catdiv6 p {
      line-height: 1;
      font-size: 12px;
    }

    .catinfo5,
    .catinfo6 {
      flex: 1;
      text-align: left;
      padding: 40px;
      height: 100%;
      border-radius: 10px 0 0 10px;
      background-color: whitesmoke;
    }

    .catimg5 {
      flex: 1;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/foster/cats/Satoshi.jpeg");
      background-position: center;
      object-fit: cover;
      background-size: cover;
      height: 100%;
      border-radius: 0 10px 10px 0;

    }



    .catimg6 {
      flex: 1;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/foster/cats/Sota.jpeg");
      background-position: inherit;
      object-fit: cover;
      background-size: cover;
      height: 100%;
      border-radius: 0 10px 10px 0;

    }

    .btn-adopt {
      border: 4px solid #055052;
      color: whitesmoke;
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

    /* SECTION8 CATS */
    #container8 {
      height: 120vh;
      padding: 10px;
      background: rgb(236, 227, 217);
    }

    #container8 h1 {
      font-size: 3rem;
      color: #003638;

    }

    #container8 h3 {
      font-size: 1.5rem;
      color: #003638;
    }

    #container8 p {
      line-height: 1.4;
    }

    #container8 a {
      text-decoration: none;

    }

    .catdiv7,
    .catdiv8 {
      margin: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 45vh;
      border-radius: 10px;
      box-shadow: 0 5px 15px #003638;
      background-color: whitesmoke;

    }


    .catinfo7,
    .catinfo8 {
      flex: 1;
      text-align: left;
      padding: 40px;
      height: 100%;
      border-radius: 10px 0 0 10px;
      background-color: whitesmoke;
    }

    .catimg7 {
      flex: 1;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/foster/cats/Shio.jpeg");
      background-position: center;
      object-fit: cover;
      background-size: cover;
      height: 100%;
      border-radius: 0 10px 10px 0;

    }



    .catimg8 {
      flex: 1;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/foster/cats/Shichi.jpeg");
      background-position: inherit;
      object-fit: cover;
      background-size: cover;
      height: 100%;
      border-radius: 0 10px 10px 0;

    }

    .btn-adopt {
      border: 4px solid #055052;
      color: whitesmoke;
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
      background-color: white;
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
        <a href="cats.php" class="navlink" style="color: #53B8BB; font-size: 1.1rem;">ADOPT</a>
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
            <a href="dogs.php" class="navlink "> <button class="navbtn ">Adopt a Dog</button></a>
          </li>
          <li class="nav-item">
            <a href="cats.php" class="navlink"> <button class="navbtn active">Adopt a Cat</button></a>
          </li>
        </ul>
      </nav>
    </header>

    <div class="foster">
      <h1>
        Adopt Cats from <br />
        AMPawN
      </h1>

      <p>
        Cute and Lovable Cats.
      </p>
    </div>
  </section>

  <!-- cats1 -->
  <section id="container5">
    <div class="catdiv1">
      <div class="catdiv1"></div>
      <div class="catinfo1">
        <h1>5.Alice</h1>
        <p>Age:4months</p>
        <p>Sex:Female</p>
        <h3>Ideal Home</h3>
        <p>
          Alice is quite close to her brother, Blur and it would be ideal for
          them to be adopted as a pair. However, where this is not possible,
          it would be best for Alice to go to a quiet and orderly home where
          she can rest and be at peace.
        </p>

      </div>
      <div class="catimg1"></div>
    </div>

    <div class="catdiv2">
      <div class="catdiv2"></div>
      <div class="catinfo2">
        <h1>6.Blur</h1>
        <p>Age:4months</p>
        <p>Sex:Male</p>
        <h3>Ideal Home</h3>
        <p>
          Blur will need space for self-discovery, since he is still growing
          and finding out about himself. Since he is a fairly quiet and gentle
          little cat, he could fare well as a cat for young adults and older
          children.
        </p>

      </div>
      <div class="catimg2"></div>
    </div>
  </section>

  <!-- SECTION6 cats -->

  <section id="container6">
    <div class="catdiv3">
      <div class="catdiv3"></div>
      <div class="catinfo3">
        <h1>7.Espi</h1>
        <p>Age:8months</p>
        <p>Sex:Female</p>
        <h3>Ideal Home</h3>
        <p>
          As one of the longest staying residents of the cafe (where 10 cats
          used to hold court before the Quarantine) it took us a while to
          realize that Asia really blossoms in places that have fewer cats.
          She may seem shy at first, but she enjoys being dressed up and
          showered with attention, like a true beauty queen!
        </p>

      </div>
      <div class="catimg3"></div>
    </div>

    <div class="catdiv4">
      <div class="catdiv4"></div>
      <div class="catinfo4">
        <h1>8.Looci</h1>
        <p>Age:8months</p>
        <p>Sex:Male</p>
        <h3>Ideal Home</h3>
        <p>
          Looci is a healthy cat with no special requirements, asides from his
          need for plenty of love and attention. He may adjust to having other
          cats around, but would prefer to be a solo pet
        </p>

      </div>
      <div class="catimg4"></div>
    </div>
  </section>

  <!-- SECTION7 cats -->

  <section id="container7">
    <div class="catdiv5">
      <div class="catdiv5"></div>
      <div class="catinfo5">
        <h1>9.Satoshi</h1>
        <p>Age:11months</p>
        <p>Sex:Male</p>
        <h3>Ideal Home</h3>
        <p>
          Satoshi would flourish best in a spacious home in order to help
          bring out his more playful and energetic nature. He is a cautious
          cat, and takes time to get used to people. Prospective adopters
          should take the time to get to know Satoshi.
        </p>

      </div>
      <div class="catimg5"></div>
    </div>

    <div class="catdiv6">
      <div class="catdiv6"></div>
      <div class="catinfo6">
        <h1>10.Sota</h1>
        <p>Age:11months</p>
        <p>Sex:Female</p>
        <h3>Ideal Home</h3>
        <p>
          Sota is a healthy cat with no special requirements, asides from her
          need for plenty of love and attention. She may adjust to having
          other cats around, but would prefer to be a solo Sota is plenty
          friendly with other cats, but will take some time to warm up to
          people. She needs someone with the patience and dedication to earn
          her trust.
        </p>

      </div>
      <div class="catimg6"></div>
    </div>
  </section>

  <!-- SECTION8 cats -->

  <section id="container8">
    <div class="catdiv7">
      <div class="catdiv7"></div>
      <div class="catinfo7">
        <h1>11.Shio</h1>
        <p>Age:11months</p>
        <p>Sex:Male</p>
        <h3>Ideal Home</h3>
        <p>
          Shio learned to get along with the other cats at the Cattery by
          tagging along with Satoshi, despite Shio actually being a newer
          shelter resident. We think Heath would do well as an appurrentice to
          another cat.
        </p>

      </div>
      <div class="catimg7"></div>
    </div>

    <div class="catdiv8">
      <div class="catdiv8"></div>
      <div class="catinfo8">
        <h1>12.Shichi</h1>
        <p>Age:8months</p>
        <p>Sex:Male</p>
        <h3>Ideal Home</h3>
        <p>
          As one of our more congenial cattos, SHichi would fare well in any
          type of home setting. What matters here is that Shichi chooses you,
          first.
        </p>

      </div>
      <div class="catimg8"></div>
    </div>
    <a class="backtotop" href="#container1">Back To Top</a>
  </section>

  <section id="container2">
    <div class="text">
      <h1>How to adopt from AMPawN</h1>
      <p>
        We have very strict protocols in place for adopting out our shelter cats and dogs. These animals have already been through very difficult times. We need to be 100% certain, without a shadow of a doubt, that they will be placed in loving homes.
      </p>
    </div>
    <div class="about">
      <div class="box1">
        <h1>1. Register for Adaption.</h1>
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