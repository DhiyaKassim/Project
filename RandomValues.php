<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Values Generator</title>
</head>
<body>
    <h1>Random Number Generator</h1>

    <?php
    $rand1 = rand(1, 27);
    $rand2 = rand(1, 178);
    $rand3 = rand(1, 600);

    echo "<p>Random number between 1 and 27: <strong>$rand1</strong></p>";
    echo "<p>Random number between 1 and 178: <strong>$rand2</strong></p>";
    echo "<p>Random number between 1 and 600: <strong>$rand3</strong></p>";
    ?>
</body>
</html>
