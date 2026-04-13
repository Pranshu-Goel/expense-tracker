<?php
$conn = new mysqli("localhost", "root", "", "expense_tracker");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$amount = $_POST['amount'];
$category = $_POST['category'];
$description = $_POST['description'];
$date = $_POST['date'];

$sql = "INSERT INTO expenses (amount, category, description, expense_date)
VALUES ('$amount', '$category', '$description', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "Expense added successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>