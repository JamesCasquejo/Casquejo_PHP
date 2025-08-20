<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casquejo_Calculator</title>
</head>
<body>
    <form action="Calculator.php" method="post">
        <input type="number" name="num1" placeholder="Enter num1" required>
        <select name="operation" id="operation">
            <option value="+">Addition</option>
            <option value="-">Subtraction</option>
            <option value="/">Division</option>
            <option value="*">Multiplication</option>
        </select>
        <input type="number" name="num2" placeholder="Enter num2" required>
        <button type="submit" id="calcu">=</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = 0;
            
            function add($num1, $num2) {
                return $num1 + $num2;
            }
            
            function subtract($num1, $num2) {
                return $num1 - $num2;
            }

            function multiply($num1, $num2) {
                return $num1 * $num2;
            }

            function divide($num1, $num2) {
                if ($num2 != 0) {
                    return $num1 / $num2;
                } else {
                    return "Cannot divide by zero";
                }
            }
            
            switch ($operation) {
                case "+":
                    $result = add($num1, $num2);
                break;
                
                case "-":
                    $result = subtract($num1, $num2);
                break;
                
                case "*":
                    $result = multiply($num1, $num2);
                break;
                
                case "/":
                    $result = divide($num1, $num2);
                break;
                
                default:
                    $result = "Invalid operation";
                break;
            }
            echo "<h2>Result: $result</h2>";
        }
    ?>
</body>
</html>