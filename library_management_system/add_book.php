<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $quantity = $_POST['quantity'];
    mysqli_query($conn, "INSERT INTO books (title, author, quantity) VALUES ('$title', '$author', $quantity)");
    echo "Book added!";
}
?>
<form method="post">
    Title: <input type="text" name="title" required><br>
    Author: <input type="text" name="author" required><br>
    Quantity: <input type="number" name="quantity" required><br>
    <button type="submit">Add Book</button>
</form>