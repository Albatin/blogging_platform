<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit();
}


$title = $_POST['title'];
$content = $_POST['content'];
$author_id = $_SESSION['user_id'];

$sql = "INSERT INTO posts (title, content, author_id) VALUES ('$title', '$content', '$author_id')";

if ($conn->query($sql) === TRUE) {
    echo "Comment added successfully.<br><a href='dashboard.php'>Go back to the dashboard</a>";
    header('Location: dashboard.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
