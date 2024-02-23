<?php
// process_country.php
function slugify($text) {
    // Replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // Transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // Remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // Trim trailing -
    $text = trim($text, '-');

    // Convert to lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}

// Database connection (modify these settings)
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'indoblog';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$title = $_POST['title'];
$slug = slugify($title); // Define a function to generate slug
$subtitle = $_POST['subtitle'];
$content = $_POST['content'];

// Image upload
$targetDirectory = "uploads/";

// Create the directory if it doesn't exist
if (!is_dir($targetDirectory)) {
    mkdir($targetDirectory, 0755, true);
}

$targetFile = $targetDirectory . basename($_FILES["image"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["image"]["tmp_name"]);
if ($check === false) {
    die("Error: File is not an image.");
}

// Check file size (in this example, limiting to 500 KB)
if ($_FILES["image"]["size"] > 500000) {
    die("Error: Sorry, your file is too large.");
}

// Allow only certain file formats (you can adjust as needed)
$allowedExtensions = array("jpg", "jpeg", "png", "gif");
if (!in_array($imageFileType, $allowedExtensions)) {
    die("Error: Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
}

// Move uploaded file to target directory
if (!move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
    die("Error: There was an error uploading your file.");
}

$imagePath = basename($targetFile); // Save only the filename, not the full path

// Insert blog into the database using prepared statement
$sql = "INSERT INTO blogs (title, subtitle, content, image_path, slug) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error: " . $conn->error);
}

$stmt->bind_param("sssss", $title, $subtitle, $content, $imagePath, $slug);
if (!$stmt->execute()) {
    die("Error: " . $stmt->error);
}

// Country inserted successfully, create country page

$blog_page_content = "<h1>$title</h1><h3>$subtitle</h3><img src=\"Admin/Indomed_AdminDash/Admin/uploads/$imagePath\"><p>$content</p>";

// Save the blog page content to a file
$file_path = "../../../$slug.php"; // Use slug instead of blog_id
if (!file_put_contents($file_path, $blog_page_content)) {
    die("Error: Unable to create blog page.");
}

echo "Country created successfully. <a href=\"$file_path\" target=\"_blank\">View Country</a>";

echo "<a href='countryedit.php?slug=$slug'>Edit Country</a>";


$stmt->close();
$conn->close();
?>


