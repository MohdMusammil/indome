<?php
// blog.php

// Fetch blog details from the database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'indoblog';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM blogs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output each blog entry as a thumbnail
    while($row = $result->fetch_assoc()) {
        $title = htmlspecialchars($row['title']);
        $imagePath = htmlspecialchars($row['image_path']);
        $slug = htmlspecialchars($row['slug']);

        echo "<div>";
        echo "<a href='blog.php?slug=$slug'>";
        echo "<img src='uploads/$imagePath' alt='$title'>";
        echo "<h3>$title</h3>";
        echo "</a>";
        echo "</div>";
    }
} else {
    echo "No country found.";
}

$conn->close();
?>

