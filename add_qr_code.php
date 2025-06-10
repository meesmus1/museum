<?php
include 'inc/dbh.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $era = $_POST['era'];
    $image = $_POST['image'];

    $sql = "INSERT INTO qr_codes (title, content, era, image) VALUES ('$title', '$content', '$era', '$image')";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
