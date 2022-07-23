<?php 
include "config.php";
include "admincheck.php"
?>
<!DOCTYPE html>
<html>

<head>
	<title>Inquiries</title>
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
            position: absolute;
            bottom: 0%;
            width: 100%;
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

		/* LOGIN */
		/* nAV */

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

		/* CONTENTS */
		.container {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			margin: 100px 50px;
		}

		.container h1 {
			font-size: 3rem;
			margin: 15px;

			color: #003638;
		}


		/* FORM */
		.formdiv {
			margin: 40px;
			width: 100%;
			background-color: white;
			box-shadow: 0 5px 15px grey;

		}

		.form {
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 20px;
		}

		.text {
			background-color: #003638;
			padding: 50px;
			font-size: 1rem;
			color: #F3F2C9;
			width: 40%;
			height: 100%;
			text-align: center;
			margin: 15px;
		}

		.form input {
			margin: 5px;
			width: 300px;
			height: 40px;
		}

		.btn {
			margin: 5px;
			background-color: #003638;
			color: white;
			width: 300px;
			height: 40px;

		}

		.btn:hover {
			background-color: #055052;
		}
		.buttoncontainer{
			display: flex;
			justify-content: center;
			align-items: center;
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
				<a href="applicants.php" class="navlink2"><button class="navbtn2 active">Manage Applicants</button></a>
			</li>
			<li class="nav-item2">
				<a href="petlist.php" class="navlink2"> <button class="navbtn2">Manage Pets</button></a>
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
						<a href="applicants.php" class="navlink2"><button class="navbtn3 ">Applicants</button></a>
					</li>
					<li class="nav-item3">
						<a href="4interview.php" class="navlink2"> <button class="navbtn3">Interview</button></a>
					</li>
					<li class="nav-item3">
						<a href="approved.php" class="navlink2"> <button class="navbtn3">Approved Applicants</button></a>
					</li>
					<li class="nav-item3">
						<a href="inquiries.php" class="navlink2"> <button class="navbtn3 active2">Inquiries</button></a>
					</li>
				</ul>
			</nav>
		</header>
		<div class="container">
			<h1>Inquiries</h1>
			<table>
				<tr>
					<th>id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Contact Number</th>
					<th>Type of Concern</th>
					<th>Concern</th>
					<th>Action</th>
				</tr>


				<?php


				include "config.php";

				$sql = "SELECT id, name, email, cnumber, type, concern from inquiries";
				$result = $con->query($sql);

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						$idd = $row["id"];
						echo "<tr>
				    <td>" . $row["id"] . "</td>
				    <td>" . $row["name"] . "</td>
				    <td>" . $row["email"] . "</td>
				    <td>" . $row["cnumber"] . "</td>
				    <td>" . $row["type"] . "</td>
				    <td>" . $row["concern"] . "</td>
					<td><a href='delete5.php?GetID=$idd'><input type='submit' name='delete' value='DELETE'/></td>
	                </tr>";

	              
					}
					echo "</table>";
				} else {
					echo "0 result";
				}

				$con->close();
				?>


			</table>
		</div>

	</section>

</body>
<footer>
	<p>© 2021 WYS101 Summer Project. All Rights Reserved</p>
</footer>

</html>