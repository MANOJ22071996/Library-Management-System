<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
}
?>
<h2>Welcome to Library Dashboard</h2>
<a href="add_book.php">Add Book</a> | 
<a href="issue_book.php">Issue Book</a> | 
<a href="return_book.php">Return Book</a> | 
<a href="logout.php">Logout</a>