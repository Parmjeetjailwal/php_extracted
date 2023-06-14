<!DOCTYPE html>
<html>
<head>
    <title>Calculation Result</title>
</head>
<body>
    <h1>Calculation Result</h1>
    <?php
    // Retrieve the numbers from the form submission
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Perform the addition and subtraction operations
    $sum = $num1 + $num2;
    $difference = $num1 - $num2;

    // Display the results
    echo "<p>The sum of $num1 and $num2 is: $sum</p>";
    echo "<p>The difference between $num1 and $num2 is: $difference</p>";
    ?>
</body>
</html>
