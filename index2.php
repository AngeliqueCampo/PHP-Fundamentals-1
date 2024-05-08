<!DOCTYPE html>
<html>
<head>
    <title>Quadratic Equation Calculator</title>
</head>
<body>
    <h2>=== Answer ===</h2>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        
        $discriminant = $b*$b - 4*$a*$c;
        
        echo "<p>The discriminant is: $discriminant</p>";
    ?>
</body>
</html>
