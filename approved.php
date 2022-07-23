<?php 
include "config.php";
include "admincheck.php"
?>
<!DOCTYPE html>
<html>

<head>
	<title>Approved</title>
	<style type="text/css">
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









		/* CONTAINER */
		.container {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			margin: 100px 50px;
		}

		.container h1 {
			font-size: 3rem;
			margin: 20px;
			padding: 5px;

			color: #003638;
		}

		.container2 {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			margin: 100px 50px;
		}

		.container2 h1 {
			font-size: 3rem;
			margin: 20px;
			padding: 5px;

			color: #003638;
		}


		


		/* FORM */
		.formdiv {
			margin: 40px;
			width: 93.5%;
			background-color: #003638;
			position: sticky;
			z-index: 2;
			bottom: 0%;
			box-shadow: 0 5px 15px grey;
			padding: 5px;
			margin: 5px auto;


		}

		.form {
			display: flex;
			align-items: center;
			justify-content: space-between;

		}

		.text {
			background-color: whitesmoke;
			padding: 10px;
			font-size: 1rem;
			color: #003638;
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
		.btn:hover{
			background-color: #055052;
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
						<a href="4interview.php" class="navlink2"> <button class="navbtn3 ">Interview</button></a>
					</li>
					<li class="nav-item3">
						<a href="approved.php" class="navlink2"> <button class="navbtn3 active2">Approved Applicants</button></a>
					</li>
					<li class="nav-item3">
						<a href="inquiries.php" class="navlink2"> <button class="navbtn3 ">Inquiries</button></a>
					</li>
				</ul>
			</nav>
		</header>
		<div class="container">
			<h1>Approved (For Shelter Visit)</h1>
			<table>
				<tr>
					<th>id</th>
					<th>Name</th>
					<th>Address</th>
					<th>Email</th>
					<th>Contact #</th>
					<th>Clinic Visit: Date</th>
					<th>Time</th>
					<th>Action</th>

				</tr>


				<?php

				include "config.php";

				$sql = "SELECT id, name, adrs, email, cnumber, cvdate, cvtime from registration where status='for cvisit' order by zdate, ztime";
				$result = $con->query($sql);



				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						$idd = $row["id"];
						echo "<tr>
				    <td>" . $row["id"] . "</td>
				    <td>" . $row["name"] . "</td>
				    <td>" . $row["adrs"] . "</td>
				    <td>" . $row["email"] . "</td>
				    <td>" . $row["cnumber"] . "</td>
				    <td>" . $row["cvdate"] . "</td>
				    <td>" . $row["cvtime"] . "</td>
				    <td><a href='delete3.php?GetID=$idd'><input type='submit' name='update' value='DELETE'/></td>
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
		<div class="container2">
			<h1>ADOPTION LIST</h1>
			<table>
				<tr>
					<th>id</th>
					<th>Type</th>
					<th>Name</th>
					<th>Age</th>
					<th>Status</th>
					<th>Action</th>
				</tr>


				<?php

				include "config.php";

				$sql = "SELECT pid, type, pname, age, status from pets where status='Ready for Adoption' order by pid";
				$result = $con->query($sql);

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						$idd = $row["pid"];
						echo "<tr>
				    <td>" . $row["pid"] . "</td>
				    <td>" . $row["type"] . "</td>
				    <td>" . $row["pname"] . "</td>
				    <td>" . $row["age"] . "</td>
				    <td>" . $row["status"] . "</td>
				    <td><a href='deletepl.php?GetID=$idd'><input type='submit' name='update' value='DELETE'/></td>
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
		<div class="formdiv">
			<br>
			<form class="form" action="test5.php" method="POST">
				<div class="text">
					<h5>Confirm Adoption:</h5>
				</div>
				<input type="text" name="aid" placeholder="Enter Applicant ID" />
				<input type="text" name="pid" placeholder="Enter PetID" />


				<input class="btn" type="submit" name="update" placeholder="UPDATE DATA" />
			</form>
		</div>
	</section>
</body>
<footer>
	<p>© 2021 WYS101 Summer Project. All Rights Reserved</p>
</footer>

</html>