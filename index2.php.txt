<!DOCTYPE html>
<html>
<head>
    <title>Quadratic Equation Discriminant Calculator - Answer</title>
</head>
<body>
    <h2>Quadratic Equation Discriminant Calculator - Answer</h2>
    <?php
        // Get values of A, B, and C from the form
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        
        // Calculate the discriminant
        $discriminant = $b*$b - 4*$a*$c;
        
        // Display the result
        echo "<p>The discriminant of the quadratic equation is: $discriminant</p>";
    ?>
</body>
</html>
