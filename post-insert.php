<?php
include("config.php");
if(isset($_POST['submit'])){
    

    $title=$_POST['title'];
    $user_id=$_POST['user_id'];
    $content=$_POST['content'];
   
    $data="INSERT INTO `posts`(`title`, `user_id`, `content`) VALUES ('$title','$user_id','$content')";
    $query = mysqli_query($conn, $data);

    if($query){
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
            <input type="text" name="title" placeholder="Title">
            <h6>User Id:</h6>
            <input type="text" name="user_id" placeholder="User Id"><br>
            <h6>Content:</h6>
            <input type="text" name="content" placeholder="Type"><br>
            
            <button type="submit" name="submit" class="btn btn-primary" href="">Submit</button>
        </form>
        
      </div>
  </div>





  </body>
</html>