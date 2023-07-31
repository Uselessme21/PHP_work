<?php
require('../connection/connect.php');

if(isset($_GET['deleteid'])){

    $id=$_GET['deleteid'];
    $sql="DELETE FROM tasks WHERE id=$id";
    $res= mysqli_query($con,$sql);
    if($res){ 
        echo '<script type="text/javascript">
        alert("task deleted successfully"); 
        </script>';
        header("location: ./show_tasks.php?message=Deleted successfully");
       
;    }else{
    echo '<script type="text/javascript">
        alert("something went wrong");
    </script>';
}
};




?>

