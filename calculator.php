<!doctype html>
<!-- DGL123 CVS1 - Tyson Foster n0130972 - Week 4 assignment
    A form that performs addition with 2 numbers provided by the user
    Last updated Sep 29, 2021 -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Addition Only Calculator</title>
</head>
<body>
    <h1>Addition Only Calculator</h1>

    <?php
        //page sends variables to itself in $_POST, default NULL to avoid warnings while using isset()
        $x1 = $_POST['x1'] ?? NULL;
        $x2 = $_POST['x2'] ?? NULL;
    ?>

    <form action="calculator.php" method = post>
        <label for="x1">First Number</label>
        <input type="number" id="x1" name="x1" required>
        <br>

        <label for="x2">Second Number</label>
        <input type="number" id="x2" name="x2" required>
        <br>
        <input type="submit" value="Calculate Sum">
    </form>

    <?php
        //print the calculation and answer if the variables are set by the form
        if (isset($x1) && isset($x2)) {
            $sum = $x1 + $x2;
            echo "<p> <strong>Result:</strong></p>";
            echo "<p> $x1 + $x2 = $sum</p>";
        }
    ?>
</body>
</html>