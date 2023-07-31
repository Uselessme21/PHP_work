<?php
require("./connection/connect.php");
if(isset($_POST['submit'])){
    $task=$_POST['task'];
    $q = "select * from tasks where task='$task'";
    $userexists=mysqli_query($con, $q);
if($userexists->num_rows>0){
    echo '<script type="text/javascript">
  alert("task already exists");
</script>';
}else{
    $sql="insert into tasks (task) values('$task')";
    $res=mysqli_query($con, $sql);
if($res){
//     echo '<script type="text/javascript">
//     window.onload = function () { alert("user registered successfully"); }
// </script>';
header("location: ./pages/show_tasks.php");
}else{
echo '<script type="text/javascript">
alert("something went wrong");


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
    <title>Add tasks</title>
  </head>
  <body>
  <div class="container my-5">
    <!-- form -->
  <form method="post">
  <div class="mb-3">
    <label >Your Task</label>
    <input type="text" required name="task" class="form-control" autocomplete="off" >
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  </div>

   
   
  </body>
</html>