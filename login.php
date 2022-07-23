<?php
include "config.php";

$errors = array('uid'=> '', 'pwd' => '');
if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: applicants.php');
        }else{
            echo'<script type="text/javascript">alert("Invalid inputs. Please try again.")</script>';
            include "admin.php";
        }

    }

}
?>

