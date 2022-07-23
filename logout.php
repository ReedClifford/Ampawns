<?php 
session_destroy();
echo'<script type="text/javascript">alert("Successfuly logged out.)</script>';
header('Location: index.php');



?>