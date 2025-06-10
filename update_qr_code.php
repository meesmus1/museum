<?php
include 'inc/dbh.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $era = $_POST['era'];
    
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = $_FILES['image']['name'];
        $target = "uploads/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    } else {
        $image = '';
    }

    $sql = "UPDATE qr_codes SET title=?, content=?, era=?, image=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $title, $content, $era, $image, $id);

    if ($stmt->execute()) {
        echo "QR Code updated successfully.";
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating QR Code: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
