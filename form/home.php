<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/practisephp/form/style2.css">
</head>
<body>
    <div class="container">
        <h3>HELLO <?php echo $_POST["name"];?> WELCOMEE TO YOUR PROFILE!!</h3><br>
        Name: <?php echo $_POST["name"];?><br><br>
        Mobile Number: <?php echo $_POST["number"];?><br><br>
        Email: <?php echo $_POST["email"];?><br><br>
        Father's Name: <?php echo $_POST["fathername"];?><br><br>
        Mother's Name: <?php echo $_POST["mothername"];?><br><br>
        And you are majoring in <?php echo $_POST["subject"];?><br><br>
    </div>




</body>
</html>