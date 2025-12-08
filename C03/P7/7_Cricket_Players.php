<?php
// --- Connect to MySQL ---
$conn = mysqli_connect("localhost", "root", "", "electricitydb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$amount = "";
$name = "";
$units = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = $_POST["name"];
    $units = $u = (int)$_POST["units"];

    // --- Bill Calculation (Simple Slabs) ---
    $amount = 0;
    if($u > 250){ $amount += ($u - 250) * 6.5; $u = 250; }
    if($u > 150){ $amount += ($u - 150) * 5.2; $u = 150; }
    if($u > 50){  $amount += ($u - 50) * 4.0;  $u = 50;  }
    $amount += $u * 3.5;

    // --- Insert into database ---
    $query = "INSERT INTO bills (customer_name, units, amount)
              VALUES ('$name', $units, $amount)";
    mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html>
<body>

<h2>Electricity Bill Generator</h2>

<form method="post">
    Customer Name:<br>
    <input type="text" name="name" required><br><br>

    Units Consumed:<br>
    <input type="number" name="units" required><br><br>

    <input type="submit" value="Generate Bill">
</form>

<?php
if ($amount !== "") {
    echo "<h3>Electricity Bill</h3>";
    echo "Name: $name <br>";
    echo "Units: $units <br>";
    echo "Amount: ₹$amount <br>";
}
?>

</body>
</html>
