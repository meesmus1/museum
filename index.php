<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Codes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        .btn-custom {
            color: white;
            font-weight: bold;
        }

        .table {
            background-color: #444;
            color: white;
        }

        .table thead {
            background-color: #222;
        }

        .btn-danger,
        .btn-danger:hover {
            background-color: #ff66b2;
            border-color: #ff66b2;
        }

        .btn-warning,
        .btn-warning:hover {
            background-color: #ffcc00;
            border-color: #ffcc00;
        }

        .btn-success,
        .btn-success:hover {
            background-color: #33cc33;
            border-color: #33cc33;
        }

        .btn-info,
        .btn-info:hover {
            background-color: #3399ff;
            border-color: #3399ff;
        }

        .text-pink {
            color: #ff66b2;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center text-pink">Onepager's & QR code's</h1>
        <div class="text-center" style="margin-bottom: 3rem;">
            <a href="add_qr_code_page.php" class="btn btn-danger mb-3">
                <i class="fas fa-plus"></i> Nieuwe QR Code toevoegen
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th>Titel</th>
                        <th>Inhoud</th>
                        <th>Image</th>
                        <th>Era</th>
                        <th>Acties</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'inc/dbh.php';
                    $sql = "SELECT * FROM qr_codes";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>{$row['title']}</td>
                                <td>{$row['content']}</td>
                                <td><img src='{$row['image']}' alt='Image' style='width: 100px; height: auto;'></td>
                                <td>{$row['era']}</td>
                                <td>
                                    <a href='edit_qr_code_page.php?id={$row['id']}' class='btn btn-warning btn-sm btn-custom'><i class='fas fa-edit'></i> Edit</a>
                                    <button class='btn btn-success btn-sm btn-custom'><i class='fas fa-download'></i> Download</button>
                                    <form action='duplicate_qr_code.php' method='POST' style='display:inline;'>
                                        <input type='hidden' name='id' value='{$row['id']}'>
                                        <button type='submit' class='btn btn-info btn-sm btn-custom'><i class='fas fa-copy'></i> Duplicate</button>
                                    </form>
                                    <form action='delete_qr_code.php' method='POST' style='display:inline;'>
                                        <input type='hidden' name='id' value='{$row['id']}'>
                                        <button type='submit' class='btn btn-danger btn-sm btn-custom'><i class='fas fa-trash'></i> Delete</button>
                                    </form>
                                </td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
