<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>

<!-- <form method="post" action=""> -->
    <label>Enter First Number:</label>
    <input type="number" name="num1" required><br><br>

    <label>Enter Second Number:</label>
    <input type="number" name="num2" required><br><br>

    <button type="submit" name="calculate">Calculate</button>
<!-- </form> -->

<?php
if (isset($_POST['calculate'])) {
    $a = $_POST['num1'];
    $b = $_POST['num2'];

    echo "<h3>Results:</h3>";
    echo "Addition: " . ($a + $b) . "<br>";
    echo "Subtraction: " . ($a - $b) . "<br>";
    echo "Multiplication: " . ($a * $b) . "<br>";

    if ($b != 0) {
        echo "Division: " . ($a / $b) . "<br>";
    } else {
        echo "Division: Cannot divide by zero!";
    }
}
?>

</body>
</html>
