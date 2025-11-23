<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
   <form action="/practisephp/form/home.php" method="post">
        <div class="container">
            <h1>Registration Form</h1>
            <div class="line">
                Students Name: <br>
                <input type="text" name="name" width="100%" require>
            </div>
            <div class="line">
                <div class="t1">
                    <div class="c1">
                        Mobile number: <br>
                        <input type="number" name="number" require>
                    </div>
                    <div class="c1">
                        Email: <br>
                        <input type="email" name="email" require>
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
                <select name="subject" id="">
                    <option value="">Choose your major</option>
                    <option value="BCA" name="subject">BCA</option>
                    <option value="BIT" name="subject">BIT</option>
                    <option value="CSIT" name="subject">CSIT</option>
                    <option value="BITM" name="subject">BITM</option>
                </select>
            </div>
            <br>
            <input type="submit" class="submit">
        </div>

   </form>
</body>
</html>