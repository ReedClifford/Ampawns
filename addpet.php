<?php 
include "config.php";
include "admincheck.php"
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pets</title>



  <link rel="icon" href="favicon.ico" />
  <style>
    * {
      margin: 0%;
      padding: 0%;
      box-sizing: border-box;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: Verdana, Geneva, Tahoma, sans-serif;

    }



    footer {
      margin-top: 50px;
      background-color: #003638;
      text-align: center;
      padding: 10px;
      color: #53B8BB;
    }

    input[type=submit] {
      background-color: red;
      border: none;
      color: white;
      padding: 16px 32px;
      text-decoration: none;
      margin: 4px 2px;
      cursor: pointer;
    }
    input {
      width: 250px;
      height: 30px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      color: black;
      font-family: monospace;
      font-size: 20px;
      text-align: center;
      box-shadow: 0 5px 15px grey;
    }

    th {
      background-color: #003638;
      border: 1px solid black;
      font-weight: bold;
      color: white;
      height: 50px;
      padding: 15px;
    }

    td {
      padding: 2.5px;
      border: 1px solid black;
    }

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


    /* MAIN NAVBAR */
    .navbar2 {
      display: flex;
      justify-content: space-around;
      align-items: center;
      height: 10vh;
      padding: 30px;
      background-color: rgb(43, 41, 41);
      position: sticky;
      top: 0%;
      z-index: 2;





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

    .logo {
      width: 250px;
      height: 250px;

    }

    .login {
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

    .login:hover {
      box-shadow: inset 100px 0 0 0 white;
      color: #003638;
      border: white 1px solid;
      cursor: pointer;

    }

    .navbtn2 {
      font-size: 10px;
      color: white;
      width: 150px;
      height: 70px;
      background: none;
      border-radius: 5px;
      border: none;
      box-shadow: inset 0 0 0 0 #003638;
      transition: ease 499ms;
      padding: 10px;
    }

    .navbtn2:hover {
      box-shadow: inset 150px 0 0 0 #003638;
      color: white;
      cursor: pointer;
      font-weight: bold;
    }

    .navbar2 h1 {
      margin-right: 400px;
    }




    .nav2 {
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      width: 30%;




    }


    .nav-item2 {
      list-style: none;
      font-family: monospace;
      font-size: 13px;
      font-weight: bold;
    }

    .navlink2 {
      text-decoration: none;
      color: #003638;
    }

    .navlink2:hover {
      font-size: 1rem;
      transition: ease-in-out 299ms;
      color: #53B8BB;
    }

    .active {
      background-color: #003638;
      color: white;
      cursor: pointer;
      font-weight: bold;

    }

    /* nav3 */
    .navbar3 {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 10vh;
      padding: 30px;


    }


    .navbtn3 {
      font-size: 10px;
      color: #003638;
      width: 150px;
      height: 70px;
      background: none;

      border: none;
      box-shadow: inset 0 0 0 0 #055052;
      transition: ease 499ms;
      padding: 10px;
    }

    .navbtn3:hover {
      box-shadow: inset 150px 0 0 0 #055052;
      color: white;
      cursor: pointer;
      font-weight: bold;
    }




    .nav3 {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 60%;




    }

    .nav-item3 {
      list-style: none;
      font-family: monospace;
      font-size: 13px;
      font-weight: bold;
    }

    .navlink3 {
      text-decoration: none;
      color: #003638;
    }

    .navlink3:hover {
      font-size: 1rem;
      transition: ease-in-out 299ms;
      color: #53B8BB;
    }

    .active2 {
      background-color: #003638;
      color: white;
      cursor: pointer;
      font-weight: bold;

    }

    /* .container {
      height: 100vh;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
    } */


    /* FORM */

    .form {
      flex: 1;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .form h1{
      color: #003638;
      font-size: 2rem;
    }

    .center {
      margin-left: 30px;

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
      width: 500px;
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


 



    



  

  include "connect3.php"

  ?>
  <style>
    .error {
      color: #FF0000;
    }
  </style>

</head>

<body>
  <nav class="navbar2">
    <div class="logocontainer">
      <a href="index.php">
        <img class="logo" src="images/logo.png" alt="logo" srcset="" />
      </a>

    </div>

    <ul class="nav2">


      <li class="nav-item">
        <a href="applicants.php" class="navlink2"><button class="navbtn2 ">Manage Applicants</button></a>
      </li>
      <li class="nav-item2">
        <a href="petlist.php" class="navlink2"> <button class="navbtn2 active">Manage Pets</button></a>
      </li>
      <li class="nav-item2">
        <a href="completed.php" class="navlink2"> <button class="navbtn2">Records</button></a>
      </li>
      <li class="choice">
        <a href="logout.php"><button class="login">Logout</button></a>
      </li>
    </ul>
  </nav>

  <section>
    <header>

      <nav class="navbar3">
        <H1 style="color:#003638;">ADMIN</H1>
        <ul class="nav3">

          <li class="nav-item3">
            <a href="petlist.php" class="navlink2"><button class="navbtn3 ">Pet List</button></a>
          </li>
          <li class="nav-item3">
            <a href="addpet.php" class="navlink2"> <button class="navbtn3 active2">Add a Pet</button></a>
          </li>

        </ul>
      </nav>
    </header>
    <div class="container">
      <div class="form">

        <form class="fillup" method="post" action="connect3.php">
          <h1>Add a new pet.</h1>
          <div class="center">
            <label class="label" for="">
              Type: <span class="error">*</span><br>
            </label>
            <select id="type" name="type">
              <option value="feline">Feline(Cat)</option>
              <option value="canine">Canine(Dog)</option>
            </select>
            <br><br>
            <label for="" class="label">
              Name: <span class="error">*</span><br>
            </label>
            <input class="inputdouble" type="text" name="pname"">
            <label for="" class="label">
              Age: <span class="error">*</span><br>
            </label>
            <input class="inputdouble" type="text" name="age"><span class="error"><br>
            <label for="" class="label">
              Gender: <span class="error">*</span><br>
            </label>
            <select id="type" name="sex"><br>
              <option value="Female">Female</option>
              <option value="Male">Male</option>
             </select>
             <br><br><br>


            <label for="lname"><span class="error">* Required Fields.</span></label><br>

            <input class="button" type="submit" name="submit" value="Submit">
          </div>


        </form>
      </div>
    </div>
  </section>

</body>
<footer>
	<p>© 2021 WYS101 Summer Project. All Rights Reserved</p>
</footer>

</html>