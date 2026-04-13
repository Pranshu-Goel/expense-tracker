<?php
$conn = new mysqli("localhost", "root", "", "expense_tracker");

$result = $conn->query("SELECT * FROM expenses");
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Expenses</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h2 style="text-align:center; color:white;">All Expenses</h2>

<div class="table-container">

<table>
<tr>
    <th>ID</th>
    <th>Amount</th>
    <th>Category</th>
    <th>Description</th>
    <th>Date</th>
</tr>

<?php
$total = 0;

while($row = $result->fetch_assoc()) {
    $total += $row['amount'];

    echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['amount']."</td>
        <td>".$row['category']."</td>
        <td>".$row['description']."</td>
        <td>".$row['expense_date']."</td>
    </tr>";
}
?>

</table>

<h3>Total Expense: <?php echo $total; ?></h3>

<a href="index.html">← Add More Expenses</a>

</div>

</body>
</html>

<?php $conn->close(); ?>