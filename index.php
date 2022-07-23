<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AMPawN</title>
  <!-- favicon -->
  <link rel="icon" href="favicon.ico">
  <!-- css -->

  <style>
    * {
      margin: 0%;
      padding: 0%;
      box-sizing: border-box;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    footer {
      position: relative;
      background-color: #003638;
      text-align: center;
      padding: 10px;
      color: #53B8BB;
    }



    /* section1 */

    #home {
      height: 100vh;
      background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("images/homepage/mainbg2.jpeg");
      background-position: center;
      background-size: cover;
      object-fit: cover;
      object-position: center;
      animation: blink 20s infinite;

      transition: blink 5s;


    }

    @keyframes blink {
      0% {
        background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("images/homepage/mainbg2.jpeg");
        background-position: center;
        background-size: cover;


      }

      25% {
        background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("images/homepage/img1.jpeg");
        background-position: center;
        background-size: cover;


      }

      50% {
        background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("images/homepage/img2.jpeg");
        background-position: center;
        background-size: cover;


      }

      75% {
        background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("images/homepage/img3.jpeg");
        background-position: center;
        background-size: cover;


      }

      100% {
        background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("images/homepage/mainbg2.jpeg");
        background-position: center;
        background-size: cover;
        transition: 5s;

      }

    }



    /* navbar header */
    .dark {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      min-height: 5vh;
      background-color: rgb(22, 22, 22);
      padding: 20px;
      position: sticky;
      top: 0%;
      z-index: 2;



    }

    .donate {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100px;
      height: 30px;
      padding: 5px;
      border: white 1px solid;
      ;
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

    .dark h1 {
      color: whitesmoke;
      font-family: monospace;
      font-weight: bold;
    }

    .bar {
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      width: 30%;

    }

    .choice {
      list-style: none;
    }

    .choice a {
      color: #53B8BB;
      font-family: monospace;
      text-decoration: none;
      font-size: 1rem;
    }

    .choice a:hover {
      color: #F3F2C9;
      font-weight: bolder;
    }

    /* main-navbar */

    .navbar {
      display: flex;
      justify-content: space-around;
      align-items: center;
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
      width:40%;



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

    /* contents */
    .maincontainer1 {
      display: flex;
      justify-content: center;
      align-items: center;
      line-height: 1.8;
      padding: 20px;
      position: relative;
      color: white;

    }

    .maincontainer1 h1 {
      font-size: 2rem;
    }

    .maincontainer1 h2 {
      font-size: 1rem;
    }

    .maincontainer1 h1,
    h2 {
      font-family: sans-serif;
      color: white;
      font-weight: bold;
    }

    .maincontainer1 a {
      text-decoration: none;
      color: white;
    }

    .maincontainer1 a:hover {
      text-decoration: underline;
      color: #53B8BB;
    }

    .content {
      height: 70vh;
      margin: 30px 0 30px 550px;
      padding: 50px;

    }

    .mop {
      margin: 40px 40px 40px 0;
      display: flex;
      justify-content: space-around;
      align-items: center;
    }

    .bank {
      border-radius: 15px;
      font-weight: bold;
      background: none;
      border: 2px solid #53B8BB;
      box-shadow: inset 0 0 0 0 #003638;
      transition: ease-in-out 1s;
      color: #53B8BB;
      padding: 20px;
      width: 200px;
      margin: 10px 10px 10px 0;
    }

    .pay {
      color: #00457C;
      font-weight: bold;
    }

    .pal {
      color: #0079C1;
      font-weight: bold;
    }

    .paypal {
      border-radius: 15px;
      font-weight: bold;
      background-color: rgb(226, 226, 12);
      ;
      border: 2px solid yellow;
      ;
      box-shadow: inset 0 0 0 0 orange;
      transition: ease-in-out 1s;

      padding: 20px;
      width: 200px;
      margin: 10px;

    }

    .gcash {
      border-radius: 15px;
      font-weight: bold;
      background-color: blue;
      border: 2px solid blue;
      box-shadow: inset 0 0 0 0 rgb(3, 3, 88);
      transition: ease-in-out 1s;
      color: white;
      padding: 20px;
      width: 200px;
      margin: 10px;
    }

    .bank:hover {
      cursor: pointer;
      box-shadow: inset 0 200px 200px 0 #003638;
      color: whitesmoke;
    }

    .paypal:hover {
      cursor: pointer;
      box-shadow: inset 0 200px 200px 0 orange;

    }

    .gcash:hover {
      cursor: pointer;
      box-shadow: inset 0 200px 200px 0 rgb(3, 3, 88);
      color: white;
    }

    /* POPUP */
    #overlay {
      position: fixed;
      opacity: 0;
      top: 0%;
      left: 0%;
      right: 0%;
      bottom: 0%;
      transition: ease-in-out 200ms;
      background: rgba(0, 0, 0, 0.75);
      pointer-events: none;
    }

    #overlay.active {
      opacity: 1;
      pointer-events: all;
    }

    .modal {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) scale(0);
      transition: ease-in-out 300ms;
      border: 3px solid #003638;
      border-radius: 20px;
      z-index: 10;
      background-color: #055052;
      width: 700px;
      max-width: 80%;

    }

    .modal.active {
      transform: translate(-50%, -50%) scale(1);

    }

    .modal h1 {
      font-size: 1.5rem;
    }

    .modalheader {
      display: flex;
      padding: 10px 15px;
      justify-content: space-between;
      align-items: center;
      border-bottom: solid #003638 2px;

    }

    .close {
      width: 20px;
      height: 20px;
      cursor: pointer;
      font-weight: bold;
      background: none;
      border: none;
      font-size: 1.25rem;
    }

    .modalBody {
      padding: 20px 25px;
    }

    /* GCAHS */
    #overlay2 {
      position: fixed;
      opacity: 0;
      top: 0%;
      left: 0%;
      right: 0%;
      bottom: 0%;
      transition: ease-in-out 200ms;
      background: rgba(0, 0, 0, 0.75);
      pointer-events: none;
    }

    #overlay2.active {
      opacity: 1;
      pointer-events: all;
    }

    .modal2 {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) scale(0);
      transition: ease-in-out 300ms;
      border: 3px solid #003638;
      border-radius: 20px;
      z-index: 10;
      background-image: url("..images/gcash.png");
      width: 700px;
      max-width: 80%;

    }

    .modal2.active {
      transform: translate(-50%, -50%) scale(1);

    }


    /* SECTION2 */

    #section2 {
      height: 150vh;
      background-color: white;

    }

    .infoContainer {
      display: flex;
      justify-content: space-between;
      background-color: #003638;
      padding: 20px;
      height: 30vh;

    }

    .info1 {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      flex: 1;
      color: #F3F2C9;
      margin: 60px;




    }

    .info1 p {
      font-size:15px;
      text-align: left;
      line-height: 2.3;
    }

    .info2 {
      display: flex;
      justify-content: space-around;
      flex: 1;
      background-color: #003638;


    }

    .info2 h2 {
      size: 1.5rem;
      color: #003638;

    }

    .info2 h4 {
      color: #055052;
      size: 1rem;

    }

    .box1 {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 10px;
      color: #003638;
      background-color: #F3F2C9;
      text-align: center;
      margin: 10px;
      border: 10px #055052 solid;
      border-radius: 20px;
    }

    .box2 {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 10px;
      color: #003638;
      background-color: #F3F2C9;
      text-align: center;
      margin: 10px;
      border: 10px #055052 solid;
      border-radius: 20px;
    }

    .box3 {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 10px;
      color: #003638;
      background-color: #F3F2C9;
      text-align: center;
      margin: 10px;
      border: 10px #055052 solid;
      border-radius: 20px;
    }

    .box1:hover {
      transform: scale(1.1);
      transition: ease 1s;
      cursor: pointer;
      font-size: 1.8rem;
    }

    .box2:hover {
      transform: scale(1.1);
      transition: ease 1s;
      cursor: pointer;
      font-size: 1.8rem;
    }

    .box3:hover {
      transform: scale(1.1);
      transition: ease 1s;
      cursor: pointer;
      font-size: 1.4rem;
    }

    /* FEATURED */
    .featured {
      display: flex;
      justify-content: space-around;
      align-items: center;
      height: 70vh;
    }

    .details {
      flex: 1;
      padding: 40px;
      border-radius: 20px;
      margin: 150px 20px 20px 20px;
      height: 60vh;
      box-shadow: 0 20px 30px #003638;
    }

    .details h1 {
      font-size: 2rem;
      color: #003638;
    }

    .details h2 {
      padding: 20px;
      font-size: 1.8rem;
      color: #003638;
      font-weight: bold;
    }



    .details p {
      line-height: 1.4;
      text-align: left;
      margin: 20px;
    }

    .dtlbtn {
      border-radius: 15px;
      font-weight: bold;
      background-color: #003638;
      border: 2px solid #003638;
      box-shadow: inset 0 0 0 0 #00457C;
      transition: ease-in-out 1s;
      color: white;
      padding: 20px;
      width: 200px;
      margin: 10px;

    }

    .dtlbtn:hover {
      cursor: pointer;
      box-shadow: inset 0 200px 200px 0 #00457C;
      color: whitesmoke;
    }


    .featuredbaby {
      flex: 2;
      flex-direction: column;
      border-radius: 20px;
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/foster/dogo/dog1.jpg");
      background-position: center;
      background-size: cover;
      margin: 150px 20px 20px 20px;
      height: 78vh;
      padding: 40px;
      box-shadow: 0 20px 30px #003638;
    }
  </style>
</head>


<body>

  <!-- section1 -->
  <nav class="dark">
    <ul class="bar">

      <li class="choice">
        <a href="donated.php"><button class="donate">DONATE</button></a>
      </li>

    </ul>
  </nav>


  <section id="home">
    <header>



      <nav class="navbar">
        <a href="">
          <img class="logo" src="images/homepage/logo.png" alt="logo" srcset="" />
        </a>



        <ul class="nav">
          <li class="nav-item">
            <a href="" class="navlink active" style="color: #53B8BB; font-size: 1.1rem;">HOME</a>
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
            <a href="contactus.php" class="navlink">CONTACT US</a>
          </li>
        </ul>
      </nav>
    </header>
    <div class="maincontainer1">
      <div class="content">
        <h1>We are open for</h1>
        <h1>ADOPTION visitations by</h1>
        <h1>appointment only</h1>
        <h2>
          Walk-in visitors will not be accommodated for security reasons.
        </h2>
        <p>
          To apply for adoption,
          <strong><a href="reg.php">click here</a></strong>
        </p>
        <p>To donate, select a method below.</p>

        <div class="mop">

          <button data-modal-target="#modal" class="bank">Bank Transfer</button>

          <!-- POPUP -->
          <div class="modal" id="modal">
            <div class="modalheader">
              <h1>Bank Transfer</h1>
              <button data-close-button class="close">&times;</button>

            </div>
            <div class="modalBody">
              <h1>Bank of the Philippine Islands</h1>
              <p> (Swift no. BOPIPHMM)
                Acct Name: Aspawns, Inc.
                USD Acct No. 3944-0021-61
                PHP Acct No. 3943-0086-11</p>

              <h1>Philippine National Bank </h1>
              <p>(Swift no. PNBM PHMM)
                Acct Name: Aspawns.
                Acct No. 1888-70015305</p>

              <h1>BDO Savings</h1>
              <p>Acct Name : Aspawns, Inc.
                Acct No : 0036-4007-0350</p>
            </div>






          </div>
          <div id="overlay"></div>

          <a href="https://www.paypal.com/donate?token=OYhL7o5NJFlf2hF7HcFgDioXNvvdGA2FtgRRecRfA1T669_jopmr3-Q3cT8CbU7_ToI8s8g6GgPdDAgq"><button class="paypal"><span class="pay">Pay</span><Span class="pal">Pal</Span></button></a>


          <a href="gcash.php"><button class="gcash">Gcash</button></a>
        </div>
      </div>
    </div>
  </section>



  <!-- section 2 -->

  <section id="section2">
    <div class="infoContainer">
      <div class="info1">
        <h1>
          <strong>AmPawn</strong>
        </h1>
        <p>AMPawN.com is a web page that will be ran by the Pawtrolers, a private and non-government organization based on the local of the Batangas Province. Pawtrolers is a group of individuals sharing the same amount of passion and commitment to care about the welfare and protection of the animals, specifically, stray cats and dogs in Batangas.</p>

      </div>
      <div class="info2">
        <div class="box1">
          <h2>20</h2>
          <h4>Cats</h4>
        </div>
        <div class="box2">
          <h2>11</h2>
          <h4>Dogs</h4>
        </div>
        <div class="box3">
          <h2>48</h2>
          <h4>Adopted this Year</h4>
        </div>
      </div>

    </div>


    <div class="featured">
      <div class="details">
        <h1>Our Featured Adoptable FurBaby...</h1>
        <h2>Georgia</h2>
        <p>Age:6months</p>
        <p>Sex:Female</p>
        <p>Size:Average</p>
        <a href="reg.php"><button class="dtlbtn">Adopt Georgia</button></a>


      </div>

      <div class="featuredbaby">

      </div>




    </div>


  </section>

  <script src="js/index.js"></script>
</body>
<footer>
  <p>© 2021 WYS101 Summer Project. All Rights Reserved</p>
</footer>


</html>