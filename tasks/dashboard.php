<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(!isset($_COOKIE["emailaddress"])){
                    header("Location:part5.php");
                    return;
                }
            setcookie("emailaddress",$email,time()- 86400);
    }
    ?>

    <p>Welcome to the dashboard</p>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

        <button>Logout</button>
    </form>
</body>
</html>