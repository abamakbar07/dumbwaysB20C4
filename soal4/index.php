<?php 
   session_start();

   include 'function.php';

   if ( !isset($_SESSION['user']) ) {
      header('Location: login.php');
      exit;
   }

   if ( isset($_POST['submit']) ) {
      session_destroy();
      header('Location: login.php');
      exit;
   }

   $userUsers = $_SESSION['user'];
      $resultUser = mysqli_query($conn, "SELECT * FROM users_tb WHERE name = '$userUsers' ");
      $rowUser = mysqli_fetch_assoc($resultUser);

   $userPosts = $rowUser['id'];
      $resultPost = mysqli_query($conn, "SELECT * FROM posts_tb WHERE id_user = '$userPosts' ");
      $rowPost = mysqli_fetch_assoc($resultPost);


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>DUMBWAYS - SOAL 4</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
   <?= $rowPost['title']; ?>
   <?= $_SESSION['user']; ?>
   <form action="" method="post">
      <button type="submit" name="submit" >Logout</button>
   </form>

   <section class="container">
      <div class="row mt-5">
         <div class="col-md-12 container">

            <div class="row">

               <div class="col-2" style="display: flex">
                  <img src="asset/img/user/<?= $rowPost['photo']; ?>" alt="akbar" width="100%" height="100px">
               </div>

               <div class="col-10">

                  <div class="row">
                     <h2><?= $rowPost['title']; ?></h2>
                  </div>
                  <div class="row">
                     <img src="asset/img/post/<?= $rowPost['image']; ?>" alt="" width="100%" height="100%">
                  </div>
                  <div class="row">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores atque similique quibusdam incidunt delectus commodi, placeat quisquam! Quo quam enim voluptate veritatis tenetur sapiente veniam iusto quidem assumenda deleniti! Minus.
                  </div>

               </div>

            </div>

         </div>
      </div>
   </section>



<!-- JAVASCRIPT -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   <!-- <script src="script.js"></script> -->
</body>
</html>