<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
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

    html {
      scroll-behavior: smooth;
    }

    footer {
      margin-top: 100px;
      background-color: #003638;
      text-align: center;
      padding: 10px;
      color: #53B8BB;
    }

    #container1 {
      height: 100vh;
      background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("images/org/bg.jpeg");
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
      font-size: 10px;
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
      padding: 40px;



    }


    .logo {
      width: 250px;
      height: 250px;
    }

    .nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 30%;



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

    /* MAIN */
    .aboutus {
      background-color: whitesmoke;
      padding: 60px;
      width: 700px;
      position: absolute;
      right: 0;
      top: 30%;
      border-radius: 80px 0 0 80px;

    }

    .aboutus h1 {
      font-size: 3rem;
      color: #055052;
      font-weight: bold;
      padding: 20px;
    }

    .aboutus p {
      font-size: 16px;
      padding: 20px;
      line-height: 1.5;
    }

    /* ABOUTUS */
    #container2 {
      height: 100vh;
      padding: 70px;
    }

    #container2 h1 {
      font-size: 2rem;
      padding: 20px;
    }

    #container p {
      padding: 20px;
      line-height: 1.5;
    }

    .section2 {
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

    #container3 {
      text-align: center;
      padding: 70px;
      height: 100vh;
      background-color: #003638;
      color: #F3F2C9;
    }

    #container3 h1 {
      font-size: 2rem;
    }

    .team {
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      margin-top: 30px;


    }

    .team h5 {

      margin: 400px auto 20px;
    }

    .box1 {
      margin: 20px;
      flex: 1;
      height: 70vh;
      background-image: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url("images/org/nits.jpg");
      background-position: center;
      background-size: cover;
      position: relative;
      transition: transform 1s;
      border-radius: 20px;
      box-shadow: 0 5px 8px #055052;
    }

    .box1:hover {
      transform: scale(1.1);
    }

    .box1::after {
      content: "Let Them Know Someone Cares";
      background-color: black;
      display: flex;
      font-size: 13px;
      color: whitesmoke;
      font-weight: bold;
      justify-content: center;
      align-items: center;
      text-align: center;
      position: absolute;
      width: 100%;
      height: 70vh;
      top: 0;
      left: 0;
      opacity: 0;
      border-radius: 20px;

    }

    .box1:hover::after {
      opacity: 0.8;
      cursor: pointer;
    }

    .box2 {
      margin: 20px;
      flex: 1;
      height: 70vh;
      background-image: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url("images/org/wills.jpg");
      background-position: center;
      background-size: cover;
      position: relative;
      transition: transform 1s;
      border-radius: 20px;
      box-shadow: 0 5px 8px #055052;
    }

    .box2:hover {
      transform: scale(1.1);
    }

    .box2::after {
      content: "You are human beings…. Animals should not be treated inhumanly";
      background-color: black;
      font-size: 13px;
      display: flex;
      color: whitesmoke;
      font-weight: bold;
      justify-content: center;
      align-items: center;
      text-align: center;
      position: absolute;
      width: 100%;
      height: 70vh;
      top: 0;
      left: 0;
      opacity: 0;
      border-radius: 20px;

    }

    .box2:hover::after {
      opacity: 0.8;
      cursor: pointer;
    }

    .box3 {
      margin: 20px;
      flex: 1;
      height: 70vh;
      background-image: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url("images/org/otero.jpg");
      background-position: center;
      background-size: cover;
      position: relative;
      transition: transform 1s;
      border-radius: 20px;
      box-shadow: 0 5px 8px #055052;
    }

    .box3::after {
      content: "Live with them, love them, Laugh with them";
      background-color: black;
      display: flex;
      font-size: 13px;
      color: whitesmoke;
      font-weight: bold;
      justify-content: center;
      align-items: center;
      text-align: center;
      position: absolute;
      width: 100%;
      height: 70vh;
      top: 0;
      left: 0;
      opacity: 0;
      border-radius: 20px;

    }

    .box3:hover {
      transform: scale(1.1);
    }

    .box3:hover::after {
      opacity: 0.8;
      cursor: pointer;
    }

    .box4 {
      margin: 20px;
      flex: 1;
      height: 70vh;
      background-image: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url("images/org/reed.jpg");
      background-position: center;
      background-size: cover;
      position: relative;
      transition: transform 1s;
      border-radius: 20px;
      box-shadow: 0 5px 8px #055153;
    }

    .box4:hover {
      transform: scale(1.1);
    }

    .box4::after {
      content: "The ones who have no voice need you to speak up";
      background-color: black;
      display: flex;
      font-size: 13px;
      color: whitesmoke;
      font-weight: bold;
      justify-content: center;
      align-items: center;
      text-align: center;
      position: absolute;
      width: 100%;
      height: 70vh;
      top: 0;
      left: 0;
      opacity: 0;
      border-radius: 20px;


    }

    .box4:hover::after {
      opacity: 0.8;
      cursor: pointer;

    }

    /* MVISION */
    #MV {
      height: 100vh;
      padding: 20px;
    }

    #MV a {
      left: 45%;
      position: absolute;
      text-decoration: none;
      color: #003638;
      font-weight: bold;

    }

    #MV a:hover {
      text-decoration: underline;
    }

    .mvision {
      display: flex;
      justify-content: space-around;
      align-items: center;
      height: 90vh;
    }

    .mvision h1 {
      font-size: 4rem;
      color: #055052;
    }

    .mvision p {
      margin: 30px;
      line-height: 2;
      font-size: 1.5rem;
    }

    .mission {
      flex: 1;
      padding: 40px;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      flex-direction: column;
      border-radius: 20px;
      border: 3px solid #003638;
      margin: 20px;
      height: 60vh;
      box-shadow: 0 20px 30px grey;
    }

    .vision {
      flex: 1;
      padding: 40px;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      flex-direction: column;
      border-radius: 20px;
      border: 3px solid #003638;
      margin: 20px;
      height: 60vh;
      box-shadow: 0 20px 30px grey;
    }


    /*  POLICIES */
    #container4 {
      height: 100vh;
      background-image: linear-gradient(rgba(3, 40, 51, 0.85), rgba(0, 0, 0, 0.85)), url("images/org/policy/bg.jpg");
      background-position: center;
      background-size: cover;
      position: relative;

    }

    #container4 h1 {
      font-size: 3rem;
      color: #055052;
      font-weight: bold;
      padding: 20px;
    }

    #container4 p {
      font-size: 1.5rem;
      padding: 20px;
      line-height: 1.5;
    }

    #container4 a {
      left: 45%;
      top: 96%;
      position: absolute;
      text-decoration: none;
      color: #F3F2C9;
      font-weight: bold;

    }

    #container4 a:hover {
      text-decoration: underline;
    }


    .policies {
      background-color: whitesmoke;
      padding: 60px;
      width: 700px;
      position: absolute;
      left: 0;
      top: 30%;
      border-radius: 0 80px 80px 0;

    }

    /* PUPPY MILLS AND RETAIL    */
    #container5 {
      height: 100vh;
      padding: 50px;

    }

    #container5 h1 {
      color: #003638;
      font-weight: bold;
      font-size: 2rem;
      margin: 20px;

    }

    #container5 p {
      line-height: 1.6;
    }

    .polsec1,
    .polsec2 {
      display: flex;
      height: 50vh;
      padding: 20px;


    }

    .polimage1,
    .polimage2 {
      flex: 1;
    }

    .polimage1 img,
    .polimage2 img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      border-radius: 10px;
      box-shadow: 0 10px 16px grey;
    }

    .politext1,
    .politext2 {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 50px;
    }

    /* ANIMAL FIGHTING AND ANIMAL LABOR */


    #container6 {
      height: 100vh;
      padding: 50px;

    }

    #container6 h1 {
      color: #003638;
      font-weight: bold;
      font-size: 2rem;
      margin: 20px;

    }

    #container6 p {
      line-height: 1.6;
    }

    .polsec1,
    .polsec2 {
      display: flex;
      height: 50vh;
      padding: 20px;


    }

    .polsec3,
    .polsec4 {
      display: flex;
      height: 50vh;
      padding: 20px;


    }

    .polimage3,
    .polimage4 {
      flex: 1;
    }

    .polimage3 img,
    .polimage4 img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      border-radius: 10px;
      box-shadow: 0 10px 16px grey;
    }

    .politext3,
    .politext4 {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 50px;
    }

    /* OUR PROGRAMS */
    #container7 {
      margin-top: 50px;
      height: 100vh;
      background-image: linear-gradient(rgba(3, 40, 51, 0.85), rgba(0, 0, 0, 0.85)), url("images/org/prog/bg.jpg");
      background-position: center;
      background-size: cover;
      position: relative;

    }

    #container7 h1 {
      font-size: 3rem;
      color: #055052;
      font-weight: bold;
      padding: 20px;
    }

    #container7 p {
      font-size: 1.5rem;
      padding: 20px;
      line-height: 1.5;
    }
    .normal{
      color: black;
    }

    .clickhere  {
      left: 45%;
      top: 96%;
      position: absolute;
      text-decoration: none;
      color: #F3F2C9;
      font-weight: bold;

    }

    .clickhere:hover {
      text-decoration: underline;
    }

    .programs {
      background-color: whitesmoke;
      padding: 60px;
      width: 700px;
      position: absolute;
      right: 0;
      top: 30%;
      border-radius: 80px 0 0 80px;

    }

    /* CONTAINER8  HUMAN EDUCATION &RESCUE REHAB*/
    #container8 {
      height: 120vh;
      padding: 50px;
      position: relative;

    }

    #container8 h1 {
      color: #003638;
      font-weight: bold;
      font-size: 2rem;
      margin: 20px;

    }

    #container8 a {
      left: 45%;
      top: 100%;
      position: absolute;
      text-decoration: none;
      color: #003638;
      font-weight: bold;

    }

    #container8 p {
      line-height: 1.6;
    }
    .contactus{
      left: 45%;
      top: 160%;
      position: absolute;
      text-decoration: none;

    }

    .progsec1,
    .progsec2 {
      display: flex;
      height: 50vh;
      padding: 20px;


    }

    .progimage1,
    .progimage2 {
      flex: 1;
    }

    .progimage1 img,
    .progimage2 img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      border-radius: 10px;
      box-shadow: 0 10px 16px grey;
    }

    .progtext1,
    .progtext2 {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 50px;
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
        <a href="aboutus.php" class="navlink" style="color: #53B8BB; font-size: 1.1rem;"> ABOUT US</a>
      </li>
      <li class="mainnav-item">
        <a href="dogs.php" class="navlink">ADOPT</a>
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
  <!-- SECTION1 -->
  <section id="container1">
    <header>
      <nav class="navbar">
        <ul class="nav">
          <li class="nav-item">
            <a href="#MV" class="navlink"><button class="navbtn">Mission & Vision</button></a>
          </li>
          <li class="nav-item">
            <a href="#container4" class="navlink"> <button class="navbtn">Policies</button></a>
          </li>
          <li class="nav-item">
            <a href="#container7" class="navlink"> <button class="navbtn">Programs</button></a>
          </li>
        </ul>
      </nav>
    </header>

    <div class="aboutus">
      <h1>About Us</h1>
      <p>Pawtrolers is a private and non-government organization based on the local of the Batangas Province. Pawtrolers is a group of individuals sharing the same amount of passion and commitment to care about the welfare and protection of the animals, specifically, stray cats and dogs in Batangas.</p>

    </div>

  </section>


  <!-- SECTION2 -->
  <section id="container2">
    <div class="section2">
      <div class="about1">
        <h1>We are a volunteer-based organization.</h1>
        <p>Our main work is to educate and disseminate information concerning animal welfare, animal care, animal control, and other animal-related concerns.</p>
        <br>
        <p>AMPawN campaigns actively against animal cruelty and pet neglect, including activities like dogfights, horsefights, and wild animals being used for entertainment.</p>
      </div>

      <div class="about2">

        <p>
        AMPawN  also runs an animal shelter called <strong>(AmpawnsHabitat).</strong>
          It currently houses over 300 cats and dogs rescued from cruelty or neglect. Here, these animals are rehabilitated in the hope of finding them new homes and a second chance at a good life.
          <br>
          There is also a low-cost clinic that provides veterinary services to the indigent community, including spay and neuter.

        </p>
      </div>
    </div>
  </section>

  <!-- SECTION3 -->
  <section id="container3">
    <h1>Meet The Team</h1>

    <div class="team">

      <div class="box1">
        <h5>Cristian George Nitro</h5>
        <p>BSIT3-2</p>
      </div>
      <div class="box2">
        <h5>Mark William DeCastro</h5>
        <p>BSIT3-2</p>
      </div>
      <div class="box3">
        <h5>Anthony Otero</h5>
        <p>BSIT3-2</p>
      </div>
      <div class="box4">
        <h5>Reed Clifford Palbacal</h5>
        <p>BSIT3-2</p>
      </div>


    </div>
  </section>
  <section id="MV">
    <div class="mvision">
      <div class="mission">
        <h1>Mission</h1>
        <p> <STROng>Pawtrolers’ MISSION:</STROng>  To care for the animals and to make people care about the welfare of all the stray animals in Batangas.</p>
      </div>
      <div class="vision">
        <h1>Vision</h1>
        <p>	<strong>Pawtralers’ VISION: </strong> To make the province a more animal-cruelty free province.</p>
      </div>




    </div>
    <a href="#container1">back to top</a>
  </section>

  <!-- SECTION4 -->
  <section id="container4">
    <div class="policies">
      <h1>Our Policies</h1>
      <p>
      AMPawN  takes a firm stand on matters relating to animal welfare, and continues to lobby for better laws to ensure humane treatment of all animals.

      </p>
    </div>
    <a href="#container1">back to top</a>
  </section>


  <!-- SECTION5 -->
  <section id="container5">
    <div class="polsec1">
      <div class="polimage1">
        <img src="images/org/policy/polimage1.jpg" alt="img">
      </div>
      <div class="politext1">
        <h1>Puppy Mills</h1>
        <p>
        AMPawN  opposes “puppy mills,” facilities and individuals who mass-produce puppies for the pet shop industry, online selling, or other retail purposes. Puppy mills suffer from poor oversight, control, and regulation. Ill health, genetic defects and/or negative behavior traits are often overlooked in favor of financial profit. The dogs used for breeding purposes are often insufficiently cared for, inhumanely housed, and lacking adequate veterinary care.
        </p>
      </div>


    </div>
    <div class="polsec2">
      <div class="politext2">
        <h1>Retail Sale of Pets</h1>
        <p>AMPawN  <span><strong>Adopt, Don’t Shop.</strong></span>. We strongly discourage people from buying cats and dogs from pet shops and breeders. We encourage them to adopt from the shelter instead. Pet shops are the primary customers of puppy mills. If the individual chooses to buy a specific breed of dog, we encourage him to seek out reputable breeders dedicated to improving the health, condition and behavior of their animals.</p>

      </div>
      <div class="polimage2">
        <img src="images/org/policy/polimage2.jpg" alt="img">
      </div>


    </div>


  </section>

  <!-- SECTION6 -->
  <section id="container6">
    <div class="polsec3">
      <div class="politext3">
        <h1>Animal Fighting</h1>
        <p>AMPawN  opposes any acts whereby humans incite, allow, or cause animals to fight. Dogfighting, cockfighting, and bullfighting are examples of animal “blood-sports,” which glorify violence for the sake of monetary gain, entertainment, or other purposes. These activities cause suffering, maiming, and death to the animals forced to participate, and they have negative social consequences. Dogfighting and horsefighting are illegal under the Animal Welfare Act. Cockfighting is still legal, but PAWS will continue to campaign actively against ANY form of animal fighting.</p>

      </div>
      <div class="polimage3">
        <img src="images/org/policy/polimage3.jpg" alt="img">
      </div>
    </div>

    <div class="polsec4">
      <div class="polimage4">
        <img src="images/org/policy/polimage4.jpg" alt="img">
      </div>
      <div class="politext4">
        <h1>Working Animals</h1>
        <p>
        AMPawN  believes that working animals must be treated with consideration and must be given adequate care, shelter, food and water. They must not be overworked or overloaded, nor must they be forced to work through ill-treatment.


        </p>
      </div>
  </section>

  <!-- PROGRAMS SECTION7 -->

  <section id="container7">
    <section id="container7">
      <div class="programs">
        <h1>Our Programs</h1>
        <p>
        Pawtrolers, do volunteer works like regular feeding of stray cats and dogs in Batangas. If you are interested in joining, please register to be a <a  class = "normal" href="vol.php">volunteer.</a>
        </p>
      </div>
      <a class = "clickhere" href="#container1">back to top</a>
    </section>


  </section>

  <!-- SECTION8 HUMAN EDUCATION &RESCUE REHAB -->
  <section id="container8">
    <div class="progsec1">
      <div class="progimage1">
        <img src="images/org/prog/progimg1.jpeg" alt="img">
      </div>
      <div class="progtext1">
        <h1>Humane Education</h1>
        <p>
          Humane education is the main thrust of the organization. It aims to enhance the Filipino’s awareness and interest in animal welfare, and to counter ignorance, indifference, and cruel traditional beliefs. Educational tours, interviews, school visits, and seminars can be requested from us completely free of charge. We only request that transport be provided for our speaker/s so that AMPawN  does not incur any expens
        </p>
      </div>


    </div>
    <div class="progsec2">
      <div class="progtext2">
        <h1>Rescue, Rehab & Adoption</h1>
        <p>The AMPawN  shelter is exclusively for animals in distress, particularly those involved in cases of cruelty or neglect. We provide physical and behavioral rehabilitation for these rescued animals, ensuring that they are nursed back to health and ready to be put up for adoption. We are committed to finding them their forever loving homes, which is why all interested adopters go through a screening process.
        </p>

      </div>
      <div class="progimage2">
        <img src="images/org/prog/progimg2.jpg" alt="img">
      </div>


    </div>
    <a href="#container1">back to top</a>
   
  </section>






</body>
<footer>
  <p>© 2021 WYS101 Summer Project. All Rights Reserved</p>
</footer>

</html>