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
    .box{
        height:10px;
        width: 10px;
        border:1px solid blue;
        display:flex;
    }
</style>
<body>
    <form action="./loginpage.php" method="post"></form>
    <div class="container">
        <h1>Login Form</h1>
        <input type="email" name="email" id="" placeholder="Enter Your Email" ><br>
        <input type="text" name="password" id="" placeholder="Enter your password"><br>
        <div class="box">
            <p>Remember Me</p>
        </div>  
        <button>Login</button>
    </div>

</body>
</html>