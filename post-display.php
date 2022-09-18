<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1ca36c7bf2.js" crossorigin="anonymous"></script>
    <style>
        table{
            width: 50%;
            margin: 0 auto; 
            text-align:center;
            margin-top: 30px;
            border: 1px solid black;
        }
        tr>th,tr>td{
            border: 1px solid black
        }
        .add{
            margin-top: 60px;
            margin-left: 250px;
        }
    </style>
  </head>
  <body>
  <div class="container">
        <a class="btn btn-primary add" href="post-insert.php">Insert Data</a>
    </div>
    <div>
    <table>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>user_id</th>
                <th>content</th>
                <th>update</th>
            </tr>

            <?php
                include("config.php");
                $sql="SELECT* FROM `posts`";
                $query=mysqli_query($conn,$sql);

                while($row=mysqli_fetch_array($query)){
          
            ?>

            <tr>
              <td><?php echo $row['id'] ?></td>
              <td><?php echo $row['title'] ?></td>
              <td><?php echo $row['user_id'] ?></td>
              <td><?php echo $row['content'] ?></td>
              
              <td><a href="post-edit.php?id=<?php echo $row['id'];?>"><i class="fa-regular fa-pen-to-square"></i></a>&nbsp
                  <a href="post-delete.php?id=<?php echo $row['id'];?>"><i class="fa-solid fa-trash-can"></i></a></td>
          </tr>
          <?php } ?>
    </table>  
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>