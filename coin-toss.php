<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coin Toss Simulator</title>
</head>
<body>
    <h1>Coin Toss Simulation (100 Times)</h1>

    <?php
    $heads = 0;
    $tails = 0;

    for ($i = 1; $i <= 100; $i++) {
        $toss = rand(0, 1); // 0 = heads, 1 = tails

        if ($toss === 0) {
            $heads++;
        } else {
            $tails++;
        }
    }

    echo "<p>Total Tosses: 100</p>";
    echo "<p>Heads: $heads</p>";
    echo "<p>Tails: $tails</p>";
    ?>
</body>
</html>
