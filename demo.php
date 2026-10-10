<?php
   if($_SERVER["REQUEST_METHOD"]==='POST'){
    $Username =$_POST["username"];
    $email =$_POST["email"];
    $password =$_POST["password"];

    echo $Username;
    echo $email;
    echo $password;
   }

?>
<form action="" method="POST">
    username : <input type="text" name="username"><br>
    Email : <input type="text" name="email"><br>
    Password : <input type="text" name="password"><br>
    <button type="submit" method="POST">Submit</button>
</form>