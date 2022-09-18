<?php
    include("config.php");

    $id=$_GET['id'];

    $sql="SELECT* FROM `posts` WHERE '$id'=`id`";
    $query=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_array($query)){

        $title=$row['title'];
        $user_id=$row['user_id'];
        $content=$row['content'];
    }    

?>


<?php

if(isset($_POST['submit'])){
    
    include("config.php");

    $title=$_POST['title'];
    $user_id=$_POST['user_id'];
    $content=$_POST['content'];

    $data="UPDATE `posts` SET `title`='$title', `user_id`='$user_id', `content`='$content' WHERE `id`='$id'";
    $query1 = mysqli_query($conn, $data);

    if($query1){
        header("location: post-display.php");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
        *{
            margin:0px;
            padding:0px;
            box-sizing: border-box;
        }
       
        .l-form{
            width: 325px;
            height: auto;
            border: 1px solid black;
            border-radius: 7px;
            text-align: center;
            margin: 50px auto;
            background-color: white;
            padding-bottom: 15px;
        }
        .l-text>h3{
            background-color: #E5DDD5;
            padding: 7px 0px;
        }
        form{
            text-align: Center;
            
        }
        form>h6{

            text-align: left;
            margin-top: 20px;
            padding-left: 32px;
            color: black;
        }

       form>input{
            width: 80%;
           outline:none; 
           padding: 2px 0px 2px 10px;
           font-size: 0.9rem;
       }
       form>button{
        margin-top: 15px;
        margin-bottom: 5px;
       }

               
    </style>
  </head>
  <body>
    
  <div class="container">
      <div class="l-form">
        <div class="l-text">
            <h3>Login Form</h3>
        </div>
        <form action="" method="post">
            <h6>Title:</h6>
            <input type="text" name="title" value="<?php echo $title; ?>" placeholder="Title">
            <h6>User Id:</h6>
            <input type="text" name="user_id" value="<?php echo $user_id; ?>" placeholder="User Id"><br>
            <h6>Content:</h6>
            <input type="text" name="content" value="<?php echo $content; ?>" placeholder="Content"><br>
            
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" placeholder="">

            <button type="submit" name="submit" class="btn btn-primary" href="">Update</button>
        </form>
        
      </div>
  </div>





  </body>
</html>