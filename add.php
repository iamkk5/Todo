<?php
    require 'config.php';
    if ($_POST) {
      $title = $_POST['title'];
      $desc = $_POST['description'];

      $sql = "INSERT INTO Todo(title,description) VALUES(:title,:description)";
      $pdo_statement = $pdo->prepare($sql);
      $result = $pdo_statement ->execute(
        array(
          ':title'=>$title,
          ':description'=>$desc
        )
      );
      if ($result) {
        echo "<script>alert('New Todo is added!!');window.location.href='index.php';</script>";
      }
    }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Create New</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
   </head>
   <body>
     <div class="card">
       <div class="card-body">
         <h2>Create New ToDo</h2>
         <form class="" action="add.php" method="post">
           <div class="form-group">
             <label for="">Title</label>
             <input type="text" class="form-control" name="title" value="" required>
           </div>
           <div class="form-group">
             <label for="">Description</label>
             <textarea name="description" class="form-control" rows="8" cols="80"></textarea>
           </div>
           <div class="form-group">
             <input type="submit" class="btn btn-primary" name="" value="SUBMIT">
             <a href="index.php" class="btn btn-warning">Back</a>
           </div>
         </form>
       </div>
     </div>
   </body>
 </html>
