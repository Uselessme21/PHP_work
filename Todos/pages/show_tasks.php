<?php 
require('../connection/connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>All Tasks</title>
</head>
<body>
   <div class="container ">
<button class="btn btn-primary my-5"><a href="../index.php" class="text-dark ">add task</a> </button>
<!-- table -->
<table class="table table-success">
<thead class="table-dark">
    <tr>
      <th scope="col">Tasks</th>
      <th scope="col">Update/Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql='SELECT * FROM tasks';
    $res=mysqli_query($con, $sql);
    if($res){
        while ($data=mysqli_fetch_assoc($res)) {
        $task=$data['task'];
        $id=$data['id'];

         echo '<tr>
           <td>'.$task.'</td>
           <td><button  type="button" class="btn btn-warning"> <a class="text-light" href="./update_tasks.php?updateid='.$id.'">🖊️</a></button></td>
           <td><button name="delete"  type="button" class="btn btn-danger"> <a class="text-light" href="./delete.php?deleteid='.$id.'">🗑️</a></button></td>
         </tr>';
        }
    }
    ?>
    
    
    
    <!-- <tr>
      <td>Mark</td>
      <td>Mark@gmail.com</td>
      <td>Male</td>
      <td><button  type="button" class="btn btn-warning"> edit</button></td>
      <td><button  type="button" class="btn btn-danger"> delete</button></td>
    </tr> -->
  </tbody>
</table>
   </div> 
</body>
</html>