<?php include('dbcon.php'); ?>

<?php

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="delete from `student` where `id`='$id'";
        $result=mysqli_query($conn,$query);
        if(!$result){
            die("query Failed".mysqli_connect_error());
        }
        else{
            header("Location:index.php?message=Data deleted successfully!!");
        }
    }
?>