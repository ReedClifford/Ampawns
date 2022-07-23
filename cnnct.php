	<?php
		
		include "config.php";
		
		

		if(isset($_POST['update']))
		{
		   
		    
			$pid = $_POST['pid'];
			
			
			$query = "Update pets SET status='Ready for Adoption' where status='Pending' and pid='$pid'";

			$query_run = mysqli_query($con, $query);

			if($query_run)
			{
				echo'Pet added to adoption list.';
			}
			else
			{
				echo'<script type="text/javascript">alert("Invalid inputs. Please try again.")</script>';
			}
			
		}
        
		$con-> close();
		include "petlist.php";
		
		?>