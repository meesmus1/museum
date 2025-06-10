<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Bewerken</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/trumbowyg@2.21.0/dist/ui/trumbowyg.min.css">

    <style>
        body {
            background-color: #ff66b2;
            color: #fff;
        }

        .container {
            background: rgb(255, 255, 255);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .text-pink {
            color: #ff66b2;
        }

        .trumbowyg-editor {
            min-height: 200px;
            font-size: 14px;
            color: black !important;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center text-pink">QR Code Bewerken</h1>
        <?php
        include 'inc/dbh.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM qr_codes WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        ?>
        <form action="update_qr_code.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="mb-3">
                <label for="title" class="form-label text-pink">Titel</label>
                <input type="text" name="title" class="form-control" id="title" value="<?php echo $row['title']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label text-pink">Inhoud</label>
                <textarea name="content" class="form-control" id="content" required><?php echo $row['content']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="era" class="form-label text-pink">Era</label>
                <input type="text" name="era" class="form-control" id="era" value="<?php echo $row['era']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label text-pink">Afbeelding</label>
                <input type="file" name="image" class="form-control" id="image">
                <small class="form-text text-muted">Laat dit veld leeg om de huidige afbeelding te behouden.</small>
            </div>
            <button type="submit" class="btn btn-success">Bewerk QR Code</button>
            <a href="index.php" class="btn btn-danger">Terug</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.21.0/dist/trumbowyg.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#content').trumbowyg({
            });
        });
    </script>
</body>

</html>
