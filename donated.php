<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Donate</title>
  <!-- favicon -->
  <link rel="icon" href="favicon.ico" />
  <!-- CSS -->
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

    #donate1 {
      height: 100vh;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/donate/bg.jpeg");
      background-position: center;
      background-size: cover;
      object-fit: cover;
      text-align: center;


    }

    /* sticky */
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

    .bar {
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      width: 35%;

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

    .donate {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100px;
      height: 30px;
      padding: 5px;
      border: white 1px #003638;
      ;
      background-color: white;
      border-radius: 30px;
      box-shadow: inset 0 0 0 0 #003638;
      transition: ease-in-out 499ms;
      color: #003638;
    }

    .donate:hover {
      box-shadow: inset 100px 0 0 0 #003638;
      color: white;
      border: #003638 1px solid;
      cursor: pointer;

    }

    /* NAVBAR */
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

    /* MainTEXT */
    .donateText {
      color: #F3F2C9;
      width: 800px;
      padding: 20px;
      margin: 70px auto 200px;
      line-height: 1.5;
    }

    .donateText h1 {

      font-size: 2.5rem;
    }

    .donateText p {
      margin: 40px;
      font-size: 1rem;
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

    /* .btn-donate {
      margin: 70px;
      display: flex;
      justify-content: space-evenly;
      align-items: center;

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
      width: 250px;
      margin: 10px;

    }

    .paypal:hover {
      cursor: pointer;
      box-shadow: inset 0 270px 270px 0 orange;

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
      width: 250px;
      margin: 10px;
    }

    .gcash:hover {
      cursor: pointer;
      box-shadow: inset 0 270px 270px 0 rgb(3, 3, 88);
      color: white;
    } */

    /* section2 */
    #donate2 {
      text-align: center;
      height: 130vh;
      background-color: #e6e5d9;
    }

    .container2 {
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      padding: 40px;

    }

    .container2 h1 {
      padding: 40px;

    }

    .text {
      color: #055052;
      padding: 60px 60px 20px 60px;
    }

    .text h1 {
      padding: 10px;
    }

    .text h2 {
      font-size: 2rem;
      padding: 20px;
    }

    .text h4 {
      font-size: 1rem;
      color: black;
    }

    .help1 {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: left;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/donate/help1.jpg");
      background-position: center;
      box-shadow: inset 0 0 2px 2px #00457C;
      transition: transform 1s;
      background-size: cover;
      color: whitesmoke;
      height: 60vh;
      margin: 20px;
      border-radius: 30px;
      line-height: 1.5;
      box-shadow: 0 20px 30px grey;
    }

    .help1:hover {
      cursor: pointer;
      transform: scale(1.2);

    }

    .help1 li,
    .help2 li {

      font-size: 13px;
    }

    .help2 {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: left;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/donate/help2.jpg");
      background-position: center;
      box-shadow: inset 0 0 2px 2px #00457C;
      transition: transform 1s;
      background-size: cover;
      color: whitesmoke;
      height: 60vh;
      margin: 20px;
      border-radius: 30px;
      line-height: 1.5;
      box-shadow: 0 20px 30px grey;
    }

    .help2:hover {
      cursor: pointer;
      transform: scale(1.2);

    }




    /* donate bank */
    #donate3 {
      text-align: center;
      height: 110vh;
      background-color: red;
    }

    .container3 {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px;

    }

    .container3 h1 {
      padding: 40px;

    }

    .text {
      color: #055052;
      padding: 60px 60px 20px 60px;
    }

    .text h1 {
      padding: 10px;
    }

    .text h2 {
      font-size: 2rem;
      padding: 20px;
    }

    .text h4 {
      font-size: 1rem;
      color: black;
    }

    .help3 {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: left;
      background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("images/donate/help1.jpg");
      background-position: center;
      box-shadow: inset 0 0 2px 2px #00457C;
      transition: transform 1s;
      background-size: cover;
      color: whitesmoke;
      height: 60vh;
      margin: 20px;
      border-radius: 20px;
      line-height: 1.5;
      box-shadow: 0 5px 15px black;
    }

    .help3 h1 {
      margin: 5px;
    }

    .help3 h4 {
      font-size: 13px;
      padding: 20px;
    }

    .help3 p {
      font-size: 15px;
      margin: 20px;
    }

    .help3:hover {
      cursor: pointer;
      transform: scale(1.2);

    }
  </style>
</head>

<body>
  <nav class="dark">
    <ul class="bar">
      <li class="choice">
        <a href="donated.php"><button class="donate">DONATE</button></a>
      </li>
    </ul>
  </nav>

  <!-- screen1 -->
  <section id="donate1">
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
            <a href="dogs.php" class="navlink"> ADOPT</a>
          </li>
          <li class="nav-item">
            <a href="faq.php" class="navlink">FAQs</a>
          </li>
          <li class="nav-item">
            <a href="contactus.php" class="navlink">CONTACT US</a>
          </li>
        </ul>
      </nav>
    </header>

    <div class="donateText">
      <div class="message">
        <h1>
          Please donate <br />
          and help save our <br />
          shelter animals
        </h1>
        <p>
          Every year, the AMPawN Center cares for over 500 dogs and
          cats rescued from cruelty or neglect. The costs of treating and
          rehabilitating these animals, as well as running the shelter and
          clinic, are funded solely by donations.
        </p>
      </div>
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
  </section>
  <!-- screen2 -->
  <section id="donate2">
    <div class="text">
      <h2>Donate in kind</h2>
      <h4>
        These donations go a long way in providing the needs of our shelter
        animals. Below is a list of items that they need on a daily basis:
      </h4>
    </div>
    <div class="container2">
      <div class="help1">
        <div class="box">
          <h1>Cats&Dogs Wishlist</h1>
          <ul>
            <li>DogFood</li>
            <li>CatFood</li>
            <li>Crates, carriers or cages</li>
            <li>Pet diapers and wee wee pads</li>
            <li>Scratching posts for the cats</li>
            <li>Chew toys for the dogs</li>
            <li>Vaccines, medicine and vitamins</li>
          </ul>
        </div>
      </div>
      <div class="help2">
        <div class="box">
          <h1>Shelter Wish List</h1>
          <ul>
            <li>Detergent powder and bleach</li>
            <li>Dishwashing paste or liquid</li>
            <li>Bath towels</li>
            <li>Garbage bags (XXL)</li>
            <li>Foot rugs or door mats</li>
            <li>Old newspapers</li>
            <li>Toilet paper</li>
            <li>Mops and brooms</li>
          </ul>
        </div>
      </div>

      <div class="help3">
        <div class="box">
          <h1>AmPawns Rehabilitation Center (PARC)</h1>
          <p>Hilltop, Batangas, 4200 Batangas <br>
            Philippines 1108</p>
          <p><em>***ALL VISITS ARE BY APPOINTMENT ONLY. WE DO NOT HAVE BRANCHES ANYWHERE ELSE.***</em></p>
          <p>Tel. (043) 723 2744)</p>

        </div>
        <!-- <div class="help2">
                <div class="box">
                    <h1>How can you help</h1>
                    <h5>The shelter and all our programs and campaigns are funded solely by donations. You can donate any amount via bank deposit or Paypal transfer</h5>
                    <p><strong>Bank of the Philippine Islands </strong> <em>(Swift no. BOPIPHMM)</em></p>
                    <p>Acct Name: The Philippine Animal Welfare Society, Inc. <br>
                        USD Acct No. 3944-0021-61 <br>
                        PHP Acct No. 3943-0086-11</p>
                        <p><strong>Bank of the Philippine Islands </strong> <em>(Swift no. BOPIPHMM)</em></p>


                </div>


            </div> -->
      </div>
  </section>
  <!-- <section id="donate3">
      <div class="text">
        <h2>Donate in kind</h2>
        <h4>
          These donations go a long way in providing the needs of our shelter
          animals. Below is a list of items that they need on a daily basis:
        </h4>
      </div>
      <div class="container3">
        <div class="help3">
          <div class="box">
            <h1>How you can help</h1>
            <h4>
              The shelter and all our programs and campaigns are funded solely
              by donations. You can donate any amount via bank deposit or Paypal
              transfer.
            </h4>
            <p>
              Bank of the Philippine Islands (Swift no. BOPIPHMM) Acct Name: The
              Philippine Animal Welfare Society, Inc. USD Acct No. 3944-0021-61
              PHP Acct No. 3943-0086-11
            </p>
          </div>
        </div>
      </div>
    </section> -->
    <script src="js/index.js"></script>
</body>
<footer>
  <p>© 2021 WYS101 Summer Project. All Rights Reserved</p>
</footer>

</html>