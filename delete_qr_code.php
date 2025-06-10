<?php
include 'inc/dbh.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM qr_codes WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "QR Code deleted successfully.";
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting QR Code: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
