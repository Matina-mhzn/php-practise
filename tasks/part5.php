<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color:grey;
        justify-content:center;
        display:flex;
        height:80vh;
        align-items:center;
    }
    .container{
        background-color:white;
        width: 400px;
        padding:10px;
        text-align:center;
        border-radius:10px;

    }
    button{
        background-color:red;
        color:white;
        width: 100%;
        padding:10px;
        border-radius:10px;
        border:none;
        /* margin-top:20px; */
    }
    input{
        width:370px;
        padding:10px;
        margin-bottom:30px;
    }
   .boxcontainer input{
    /* margin:0;
    padding:0; */
   }
    .boxcontainer{
        display:flex;
        width:0px;
        padding:0px;
        margin-bottom:30px;
    }

</style>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $email=$_POST["email"];

            if(isset($_COOKIE["emailaddress"])){
                header("Location:dashboard.php");
                return;
            }
            
                setcookie("emailaddress",$email,time()+86400);
            
        }

    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

        <div class="container">
            <h1>Login Form</h1>
            <input type="email" name="email" id="" placeholder="Enter Your Email" ><br>
            <div class="boxcontainer">
                
                <input type="checkbox" name="remember">Remember Me
            </div>
            <button>Login</button>
        </div>
    </form>

</body>
</html>