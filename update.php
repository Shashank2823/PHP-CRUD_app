<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>

<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="select * from `student` where `id`='$id'";
        $result=mysqli_query($conn,$query);
        if(!$result){
            die("query Failed".mysqli_connect_error());
        }
        else{
            $row=mysqli_fetch_assoc($result);

        }
    } 
?>


<?php

    if(isset($_POST['update_student'])){
        $idnew=$_GET['id_new'];
        $f_name=$_POST['f_name'];
        $l_name=$_POST['l_name'];
        $age=$_POST['age'];

        $query="update `student` set `first_name`='$f_name',`last_name`='$l_name',`age`='$age' where `id`='$idnew'";

        $result=mysqli_query($conn,$query);

        if(!$result){
            die("query Failed".mysqli_connect_error());
        }
        else{
            header("Location:index.php?upd_message=Data updated successfully!!");
        }
    }
?>


        <form action="update.php?id_new=<?php echo $id; ?>" method="post">
        
            <div class="form-group">
                <label for="f_name">First Name</label>
                <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name'] ?>">

            </div>
            <div class="form-group">
                <label for="l_name">Last Name</label>
                <input type="text" name="l_name" class="form-control" value="<?php echo $row['last_name'] ?>">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" class="form-control" value="<?php echo $row['age'] ?>">
            </div>
            <input type="submit" class="btn btn-success" name="update_student" value="UPDATE">

        </form>

<?php include('footer.php'); ?>