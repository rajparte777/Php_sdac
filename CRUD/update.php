<form method="post">
    id : <input type="text" name="id"><br>
    email : <input type="text" name="email">
    <button type="submit">Submit</button>

</form>
<?php
       include "db.php";
       if($_SERVER["REQUEST_METHOD"] === "POST"){
        $id =$_POST["id"];
        $email =$_POST["email"];

        $sql =$conn ->prepare("update emp set email =? where id = ?");
        $sql->bind_param("si",$email,$id);

        if($sql->execute()){
            echo "update";
        }
       }



?>