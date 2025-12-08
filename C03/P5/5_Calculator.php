<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op   = $_POST["op"];

    switch ($op) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            if ($num2 == 0) {
                $result = "Cannot divide by zero!";
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            $result = "Invalid Operation";
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <form method="post">
        <input type="number" step="any" name="num1" required>
        
        <select name="op">
            <option value="+"> + </option>
            <option value="-"> - </option>
            <option value="*"> * </option>
            <option value="/"> / </option>
        </select>

        <input type="number" step="any" name="num2" required>

        <input type="submit" value="Calculate">
    </form>

    <h3>Result: <?php echo $result; ?></h3>
</body>
</html>
