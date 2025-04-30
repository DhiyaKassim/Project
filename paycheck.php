<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Salary Result</title>
</head>
<body>
    <h1>Paycheck Result</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hours = floatval($_POST["hours"]);
        $rate = floatval($_POST["rate"]);
        $pay = $hours * $rate;

        echo "<p>Hours Worked: $hours</p>";
        echo "<p>Rate of Pay: $$rate</p>";
        echo "<p><strong>Total Pay: $" . number_format($pay, 2) . "</strong></p>";
    } else {
        echo "<p>Please submit the form from paycheck.html.</p>";
    }
    ?>
</body>
</html>
