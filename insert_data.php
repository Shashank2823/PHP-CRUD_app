<?php
include 'dbcon.php';
    if(isset($_POST['add_student'])){
        $f_name=$_POST['f_name'];
        $l_name=$_POST['l_name'];
        $age=$_POST['age'];

        if($f_name =="" || empty($f_name)){
            header("Location:index.php?message=Please enter the first name!!");
        }
        else{
        $query="insert into `student`(`first_name`,`last_name`,`age`) values('$f_name','$l_name','$age')";

        $result=mysqli_query($conn,$query);

        if(!$result){
            die("query Failed".mysqli_connect_error());
        }
        else{
            header("Location:index.php?ins_message=Data inserted successfully!!");
        }
    }
    }
?>