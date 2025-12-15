<?php
$players = [
    "Rohit Sharma",
    "Virat Kohli",
    "KL Rahul",
];
?>
<!DOCTYPE html>
<html>
<body>
<h3>Indian Cricket Players</h3>
<table border="1" cellpadding="5">
    <tr>
        <th>Player Name</th>
    </tr>
    <?php
    foreach ($players as $p) {
        echo "<tr><td>$p</td></tr>";
    }
    ?>
</table>
</body>
</html>
