
<form action="" method="POST">
    user: <input type="text" name="name"><br>
    Email : <input type="text" name="email"><br>
   
    Department : <input type="text" name="department"><br>
    salary : <input type="text" name="salary"><br>
    <button type="submit" method="POST">Submit</button>
</form>

<?php
    include "db.php";
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $name =$_POST["name"];
        $email =$_POST["email"];
     
        $department =$_POST["department"];
        $salary =$_POST["salary"];

        $sql =$conn -> prepare("insert into emp(name,email,department,salary)
                                 values(?,?,?,?)");
          $sql ->bind_param("sssd",$name,$email,$department,$salary);
          
          if($sql->execute()){
            echo "inserted";
          }


    }


?>