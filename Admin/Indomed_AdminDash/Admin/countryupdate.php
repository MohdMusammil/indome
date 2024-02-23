<?php
// update.php

// Fetch form data
$slug = $_POST['slug'];
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$content = $_POST['content'];

// Update blog content in the file
$file_path = "../../../$slug.php"; // Use slug instead of blog_id

$new_blog_page_content = "<h1>$title</h1><h3>$subtitle</h3><p>$content</p>";

if (!file_put_contents($file_path, $new_blog_page_content)) {
    die("Error: Unable to update blog page.");
}

// Redirect back to the edited page
header("Location: $slug.php");
exit;
?>
