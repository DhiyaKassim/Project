<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sum of Odd Numbers</title>
</head>
<body>
    <h1>Sum of Odd Numbers from 1 to 75</h1>

    <?php
    $sum = 0;

    for ($i = 1; $i <= 75; $i += 2) {
        $sum += $i;
    }

    echo "<p>The sum of all odd numbers from 1 to 75 is: <strong>$sum</strong></p>";
    ?>
</body>
</html>
