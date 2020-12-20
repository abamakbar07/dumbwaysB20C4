<?php 
session_start();
   include 'function.php';

   if ( isset($_POST['submit']) ) {
      $email = $_POST['email'];
      $pw = $_POST['pw'];
      
      $result = mysqli_query($conn, "SELECT * FROM users_tb WHERE email = '$email'");
      // $_SESSION['user'] = mysqli_query($conn, "SELECT * FROM users_tb WHERE email = '$email'");

      if ( mysqli_num_rows($result) === 1 ) {
         $row = mysqli_fetch_assoc($result);
         $_SESSION['user'] = $row['name'];

         if ($pw === $row["pw"]) {
            header("Location: index.php");
            exit;
         } else {
            $error = 1;
         }
      }
   }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SOAL4 - LOGIN</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>

   <div class="container mt-5">
      <div class="col align-self-center">
         <?php if ( isset($error) ) { ?>
         <p style="color: red; font-style: italic;">Email / password yang anda masukkan salah!</p>
         <?php } ?>
      <form action="" method="post">

         <!-- <div class="form-group"> -->
           <label for="email">Email</label>
           <input type="text"
             class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Masukan email">
         <!-- </div> -->

         <!-- <div class="form-group"> -->
           <label for="pw">Password</label>
           <input type="password"
             class="form-control" name="pw" id="pw" aria-describedby="helpId" placeholder="Password">
         <!-- </div> -->

         <button class="btn btn-primary" type="submit" name="submit">Login</button>

      </form>
      </div>
   </div>




<!-- JAVASCRIPT -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   <!-- <script src="script.js"></script> -->
</body>
</html>