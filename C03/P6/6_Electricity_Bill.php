<?php
$conn = mysqli_connect("localhost", "root", "", "electricitydb");
if (!$conn) {
    die("DB Connection failed: " . mysqli_connect_error());
}
$amount = "";
if ($_POST) {
    $name  = $_POST["name"];
    $units = $u = (int)$_POST["units"];
    $amount = 0;
    if ($u > 250){ $amount += ($u - 250) * 6.5; $u = 250; }
    if ($u > 150){ $amount += ($u - 150) * 5.2; $u = 150; }
    if ($u > 50){  $amount += ($u - 50) * 4.0; $u = 50; }
    $amount += $u * 3.5;
    mysqli_query($conn,
        "INSERT INTO bills (customer_name, units, amount)
         VALUES ('$name', $units, $amount)"
    );
}
?>
<!DOCTYPE html>
<html>
<body>
<h2>Electricity Bill Generator</h2>
<form method="post">
    Name:<br>
    <input name="name" required><br><br>
    Units:<br>
    <input type="number" name="units" required><br><br>
    <input type="submit" value="Generate">
</form>

<?php
if ($amount !== "") {
    echo "<h3>Electricity Bill</h3>";
    echo "Name: $name<br>";
    echo "Units: $units<br>";
    echo "Amount: ₹$amount<br>";
}
?>
</body>
</html>
