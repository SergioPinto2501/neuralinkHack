<?php
        include('../config/config.php');
        if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 1){
        $user = mysqli_fetch_assoc($result);
        $_SESSION['logged_user'] = $user;
        header('Location: ../employee_zone/dashboard/index.php');
                
        }else{
         echo "<script>alert('Username or Password is incorrect.')</script>";
       }
      }
                ?>