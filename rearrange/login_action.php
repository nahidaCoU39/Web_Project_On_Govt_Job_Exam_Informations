<?php
  $connect=mysqli_connect("localhost","root","","practice");
  if(!$connect){
    echo("Error connection:");

    }

    if(isset($_POST['login'])){
      
      $username=$_POST['username'];
      $password=$_POST['password'];
      


        $sql = "select * from registration where username= '$username' and password = '$password'";
        $result = mysqli_query($connect,$sql);
        $count = mysqli_num_rows($result);
   
        if($count ==1){
         echo '<p>You are loged in <a href="homepage.php">Go to Home page</a>.</p>';
        }
        else{
          echo "username or password may be incorrect";
           }

      


    }

?>