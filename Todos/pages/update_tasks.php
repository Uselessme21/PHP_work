<?php
require("../connection/connect.php");
$id=$_GET['updateid'];
$q = "select * from tasks where id='$id'";
$userexists=mysqli_query($con, $q);
if($userexists->num_rows<=0){
echo '<script type="text/javascript">
alert("task does not exists");
</script>';
}else{
  $sql="select * from tasks where id='$id'";
  $res= mysqli_query($con,$sql);
  
  $row=mysqli_fetch_assoc($res);
  $task=$row['task'];
 
}


if(isset($_POST['submit'])){
    $task=$_POST['task'];
    $q = "select * from tasks where id='$id'";
    $userexists=mysqli_query($con, $q);
if($userexists->num_rows<=0){
    echo '<script type="text/javascript">
    alert("task does not exists");
</script>';
}else{
    $sql="update tasks set id='$id', task='$task'";
    $res=mysqli_query($con, $sql);
if($res){
//     echo '<script type="text/javascript">
//     window.onload = function () { alert("user updated successfully"); }
// </script>';
header("location: ./show_tasks.php");
}else{
echo '<script type="text/javascript">
alert("something went wrong")

</script>';
}
}
  
}



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Add Todos</title>
  </head>
  <body>
  <div class="container my-5">
    <!-- form -->
  <form method="post">
  <div class="mb-3">
    <label >Task</label>
    <input type="text" required name="task" class="form-control" autocomplete="off" value="<?php 
    echo $task
    ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
  </div>

   
   
  </body>
</html>