	<?php
		
	
		
			include "config.php";		
	
			$id = $_GET['GetID'];
			
			$query = "DELETE FROM pets WHERE pid='$id'";

			$query_run = mysqli_query($con, $query);

			if($query_run)
			{
				echo'<script type="text/javascript">alert("Record deleted.")</script>';
			}
			else
			{
				echo'<script type="text/javascript">alert("Invalid inputs. Please try again.")</script>';
				
			}

			

        
		$con-> close();
		include "petlist.php";
		
		?>