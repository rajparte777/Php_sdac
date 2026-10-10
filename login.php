<<<<<<< HEAD
<?php
include "db.php";
if($_SERVER['REQUEST_METHOD']==="POST"){

    $name=$_POST["name"];
    $password =$_POST["password"];

    $sql=$conn->prepare("select id,password from user where name=?");
    $sql->bind_param("s",$name);
    $sql->execute();
    $sql->bind_result($id,$pass);
    $sql->fetch();
    
    if(password_verify($password,$pass)){
        $_SESSION["id"]=$id;
        $_SESSION["name"]=$name;
        header("location:dashboard.php");
    }
    else{
      echo '<script>alert("Wrong name or password")</script>';
    }
}
?>


=======
>>>>>>> 2c17d5bbe6694955c1c6b38f8a0a53074dfb7f9e
<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
<<<<<<< HEAD
            <div
                class="container col-4 border rounded shadow p-3 mt-5"
            >
            <h2>Login With Us.</h2>
                <form action="" method="post">
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            id="formId1"
                            placeholder=""
                        />
                        <label for="formId1">Name</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            id="formId1"
                            placeholder=""
                        />
                        <label for="formId1">Password</label>
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Submit
                    </button>
                    
                    
                </form>
            </div>
            



=======
            <form action="" method="post">
             
                 <div
                    class="container col-4"
                 >
                      <div class="mb-3 col-4">
                    <label for="" class="form-label">Email</label>
                    <input
                        type="text"
                        class="form-control"
                        name="email"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                   </div>
                   <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input
                        type="text"
                        class="form-control"
                        name="password"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                   
                   </div>
                   
                   <button
                    type="submit"
                    class="btn btn-primary"
                   >
                    Submit
                   </button>
                 </div>
                 
                  
                   
                </div>
                
            </form>
>>>>>>> 2c17d5bbe6694955c1c6b38f8a0a53074dfb7f9e



        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
<<<<<<< HEAD
=======

<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"] === 'POST'){
    $email=$_POST['email'];
    $password =$_POST['password'];
    
    $sql =$conn->prepare('select password from user where email=?');
    $sql->bind_param('s',$email);
    $sql->execute();
    $sql->bind_result($pass);
    $sql->fetch();

    if(password_verify($password,$pass)){
        $_SESSION['email'] =$email;
        header('location:dashboard.php');
    }
    else{
        echo '<script>alert("wrong password or email")</script> ' ;
    }
    echo $email.' + '.$password.' + '.$pass;
}


?>
>>>>>>> 2c17d5bbe6694955c1c6b38f8a0a53074dfb7f9e
