<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: rgba(234, 232, 232, 1);
        font-family: Arial, Helvetica, sans-serif;

    }
    .container{
        /* border-radius: 10%; */
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        height: 450px;
        width: 350px;
        background-color:white;
        padding: 13px;
        position: relative;
        /* border:1px solid red; */
    }
    .box{
        border:2px solid blue;
        padding:20px 10px;
        height:400px;
    }
    .img{
        height: 100px;
        width: 80px;
        border: 1px solid black;
        border-radius: 10%;
        position:absolute;
        top: 15     0px;
        right:30px;
    }
    img{
        height:100%;
        width: 100%;
    }
    .logo{
        gap:10px;
        display:flex;
    }
    .logo img{
        width:50px;
        height:50px;
    }
    .info{
        margin-top:0px;
    }
    p{
        margin:0;
        font-size:12px;
    }

    h3{
        margin:10px 0px;
        /* color:red; */
    }
    i{
        font-size:13px;
    }
    .end{
        text-align:center;
        margin-top:30px;

    }
    strong{
        color:red;
    }
</style>
<body>
        <?php
        $target_dir="uploads/";
        $target_file=$target_dir . basename($_FILES["imgfile"]["name"]);
        $upload_ok=1;
        $imagefiletype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


        //check if file is img ornot
        if(isset($_POST["submit"])){
            $check=getimagesize($_FILES["imgfile"]["tmp_name"]);
            if($check==true){
                // echo "File is an image - " . $check["mime"] . ".";
                $upload_ok=1;
            }
            else{
                echo "File is not an image";
                $upload_ok=0;
            }
        }
        //check if file already exists
        if(file_exists($target_file)){
            // echo "Sorry the file already exists";
            $upload_ok=0;
        }

        //limit file size   
        if($_FILES["imgfile"]["size"]>500000){
            echo "Sorry Your File is too large";
            $upload_ok=0;
        }

        //allow only img,jpg,jpeg,gifs
        if($imagefiletype != "jpg" && $imagefiletype != "png" && $imagefiletype != "jpeg" && $imagefiletype != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $upload_ok = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($upload_ok == 0) {
        // echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["imgfile"]["tmp_name"], $target_file)) {
            
            // echo "The file ". htmlspecialchars( basename( $_FILES["imgfile"]["name"])). " has been uploaded.";
            
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }

    ?>
    <div class="container">
        <div class="box">
        <div class="logo">
            <div class="image">
                <img src="../../images/images.jpg" alt="">
            </div>
            <div class="text">  
                <h3>MATINA'S SCHOOL</h3>
                <p>Kalanki,Kathmandu   Contact no-:01-4282567</p>
            </div>
        </div>
        <br>
        <h3>Student Information</h3><br>
        <div class="img">
            <img src="<?php echo $target_file;?>" alt="">
        </div>
        <div class="info">

            <strong>Name:</strong> <?php echo $_POST["name"];?><br><br>
            <strong>Mobile Number:</strong> <?php echo $_POST["number"];?><br>   <br>
            <strong>Father's Name:</strong> <?php echo $_POST["fathername"];?><br><br>
            <strong>Mother's Name:</strong> <?php echo $_POST["mothername"];?><br><br>
            <strong>Course:</strong> <?php echo $_POST["subject"];?><br><br>
            <div class="end">
                <i>This is a school id.If found please return it to the owner on the given address and contact number.</i>
            </div>
        </div>
</div>

    

</body>
</html>