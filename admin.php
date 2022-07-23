<html>

<head>
    <title>Admin Login</title>
    <style>
        *{
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }
        body{
            background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url("images/img1.jpeg");
            background-position: center;
            background-size: cover;
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

        /* Container */
        .container {
            width: 40%;
            margin: 50px auto;
        }

        /* Login */
        #div_login {
            
            border-radius: 3px;
            background-color: white;
            width: 470px;
            height: 270px;
            box-shadow: 0 5px 15px black;
            margin: 0 auto;
        }

        #div_login h1 {
            margin-top: 0px;
            font-weight: normal;
            padding: 10px;
            background-color: #003638;
            color: white;
            font-family: sans-serif;
        }

        #div_login div {
            clear: both;
            margin-top: 10px;
            padding: 5px;
        }

        #div_login .textbox {
            width: 96%;
            padding: 7px;
        }

        #div_login input[type=submit] {
            padding: 7px;
            width: 100px;
            background-color: #003638;
            border: 0px;
            color: white;
        }

        /* media */
        @media screen and (max-width:720px) {
            .container {
                width: 100%;
            }

            #div_login {
                width: 99%;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <a href="index.php">
            <img class="logo" src="images/logo.png" alt="logo" srcset="" />


        </a>


        <ul class="nav">
            <li class="nav-item">
                <a href="index.php" class="navlink">Home</a>
            </li>
            <li class="nav-item">
                <a href="aboutus.php" class="navlink" > Admin</a>
            </li>

        </ul>
    </nav>

    <div class="container">
        <form method="post" action="login.php">
            <div id="div_login">
                <h1>Login</h1>
                <div>
                    <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                </div>
                <div>
                    <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password" />
                </div>
                <div>
                    <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                </div>
            </div>
        </form>
    </div>
</body>

</html>