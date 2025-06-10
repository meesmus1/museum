<?php
include 'inc/dbh.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $sql = "SELECT * FROM qr_codes WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $sql = "INSERT INTO qr_codes (title, content, era, image) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $row['title'], $row['content'], $row['era'], $row['image']);

    if ($stmt->execute()) {
        echo "QR Code duplicated successfully.";
        header("Location: index.php");
        exit();
    } else {
        echo "Error duplicating QR Code: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
