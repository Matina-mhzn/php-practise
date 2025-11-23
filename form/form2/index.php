<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
*{
    box-sizing: border-box;
    margin: 0px;
}

body{
    background-color: rgb(97, 97, 241);
    font-family: Arial, Helvetica, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.container{
    padding: 20px;
    background-color: white;
    border-radius: 20px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    width: 500px;

}
.t1{
    display: flex;
    gap: 40px;

}
.c1{
    flex: 1;
    
}
.line{
    margin: 20px 0px;
    padding: 0px 5px;
}
input{
    padding: 10px;
    width: 100%;
}
select{
    padding: 10px;
}
.submit{
    background-color: red;
    color: white;
    border: none;
    border-radius: 5px;
}

h1{
    text-align: center;
}
.error{
    color:red;
}
p{
    font-size:12px;
    margin:3px 0px;
}
</style>
<body>
    <?php
        $nameErr=$emailErr=$numberErr=$subjectErr=$imgErr="";
        $name=$email=$number=$fathername=$mothername=$subject=$imgfile="";

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $nameErr="Required";
            }
            else{
                $name=$_POST["name"];
            }

            if(empty($_POST["email"])){
                $emailErr="Required";
            }
            elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "In
                valid email format";
            } 
            else{
                $email=$_POST["email"];
            }

            if(empty($_POST["number"])){
                $numberErr="Required";
            }
            else{
                $number=$_POST["number"];
            }

            if(empty($_POST["subject"])){
                $subjectErr="Required";
            }
            else{
                $subject=$_POST["subject"];
            }
             if(empty($_POST["imgfile"])){
                $imgErr="Required";
            }
            else{
                $imhfile=$_POST["imgfile"];
            }
        }
     
    ?>



    <form action="./page.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <img src="/images/images.jpg" alt="">
            <h1>Registration Form</h1>
            <div class="line">
                *Students Name: <br>
                <input type="text" name="name" width="100%" require>
                <p class="error"><?php echo "$nameErr";?></p>
            </div>
            <div class="line">
                <div class="t1">
                    <div class="c1">
                        *Mobile number: <br>
                        <input type="number" name="number" require>
                        <p class="error"><?php echo $numberErr; ?></p>
                    </div>
                    <div class="c1">
                        *Email: <br>
                        <input type="email" name="email" require>
                        <p class="error"><?php echo $emailErr; ?></p>

                    </div>
                </div>
            </div>
            <div class="line">
                <div class="t1">
                    <div class="c1">
                        Father's Name: <br>
                        <input type="text" name="fathername" id="" require>
                    </div>
                    <div class="c1">
                        Mother's Name: <br>
                        <input type="text" name="mothername" id="" require>
                    </div>
                </div>
            </div>
            <div class="line">
                *<select name="subject" id="">
                    <option value="">Choose your major</option>
                    <option value="BCA" name="subject">BCA</option>
                    <option value="BIT" name="subject">BIT</option>
                    <option value="CSIT" name="subject">CSIT</option>
                    <option value="BITM" name="subject">BITM</option>
                </select>
                <p class="error"><?php echo $subjectErr; ?></p>
            </div>
            *Upload your Photo:
            <input type="file" name="imgfile" id="imgfile">
            <p class="error"><?php echo "$imgErr";?></p>
            
            <br>
            <input type="submit" name="submit" value="SUBMIT" class="submit">
        </div>
    </form>

</body>
</html>