	<?php
		
		include "config.php";
		
		

		if(isset($_POST['deletep']))
		{
		   
		    
			$pid = $_POST['id'];
			
			
		    $query = "DELETE FROM pets WHERE pid='$pid'";

			$query_run = mysqli_query($con, $query);

			if($query_run)
			{
				echo'<script type="text/javascript">alert("Record deleted.")</script>';
			}
			else
			{
				echo'<script type="text/javascript">alert("Invalid inputs. Please try again.")</script>';
				
			}

			$query_run = mysqli_query($con, $query);

			if($query_run)
			{
				echo'<script type="text/javascript">alert("Record deleted.")</script>';
			}
			else
			{
				echo'<script type="text/javascript">alert("Invalid inputs. Please try again.")</script>';
			}
			
		}
		
		else{
		    
		    $id = $_POST['id'];
			
			
		    $query = "DELETE FROM registration WHERE id='$id'";

			$query_run = mysqli_query($con, $query);

			if($query_run)
			{
				echo'<script type="text/javascript">alert("Record deleted.")</script>';
			}
			else
			{
				echo'<script type="text/javascript">alert("Invalid inputs. Please try again.")</script>';
				
			}

		    
		}

		$con-> close();
		include "completed.php";
		
		?>