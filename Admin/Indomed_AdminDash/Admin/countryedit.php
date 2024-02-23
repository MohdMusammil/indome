<?php
// edit.php

// Fetch blog details from the database using the slug parameter
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'indoblog';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$slug = $_GET['slug'];

$slug = $conn->real_escape_string($slug);
$sql = "SELECT * FROM blogs WHERE slug = '$slug'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $title = htmlspecialchars($row['title']);
    $subtitle = htmlspecialchars($row['subtitle']);
    $content = htmlspecialchars($row['content']);
    $imagePath = htmlspecialchars($row['image_path']);
} else {
    echo "Blog not found.";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Country</title>
</head>
<body>
    <h1>Edit Country</h1>
    <form action="countryupdate.php" method="post">
        <input type="hidden" name="slug" value="<?php echo $slug; ?>">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="<?php echo $title; ?>"><br>
        <label for="subtitle">Subtitle:</label><br>
        <input type="text" id="subtitle" name="subtitle" value="<?php echo $subtitle; ?>"><br>
        <label for="content">Content:</label><br>
        <textarea id="content" name="content"><?php echo $content; ?></textarea><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
