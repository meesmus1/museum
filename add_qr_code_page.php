<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuwe QR Code</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        .trumbowyg-box {
            max-width: 100%;
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
        <h1 class="mb-4 text-center text-pink">Nieuwe QR Code toevoegen</h1>
        <form action="add_qr_code.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label text-pink">Titel</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label text-pink">Inhoud</label>
                <textarea name="content" class="form-control" id="content" required></textarea>
            </div>
            <div class="mb-3">
                <label for="era" class="form-label text-pink">Era</label>
                <input type="text" name="era" class="form-control" id="era" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label text-pink">Afbeelding</label>
                <input type="file" name="image" class="form-control" id="image" required>
            </div>
            <button type="submit" class="btn btn-success">Voeg QR Code toe</button>
            <a href="index.php" class="btn btn-danger">Terug</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.21.0/dist/trumbowyg.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.21.0/dist/plugins/fontsize/trumbowyg.fontsize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.21.0/dist/plugins/colors/trumbowyg.colors.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.21.0/dist/plugins/fontfamily/trumbowyg.fontfamily.min.js"></script>

    <script>
        $(document).ready(function () {
            console.log("jQuery geladen:", typeof jQuery);
            console.log("Controleer Trumbowyg beschikbaarheid:", typeof $.fn.trumbowyg);

            if (typeof $.fn.trumbowyg !== "undefined") {
                console.log("Trumbowyg wordt toegepast op #content");
                $('#content').trumbowyg({
                }).on('tbwinit', function () {
                    console.log("Trumbowyg succesvol geladen!");
                }).on('tbwerror', function () {
                    console.error("Fout bij laden van Trumbowyg!");
                });
            } else {
                console.error("Trumbowyg is niet correct geladen!");
                $('#content').replaceWith('<textarea name="content" class="form-control" id="content" required></textarea>');
            }
        });
    </script>
</body>

</html>
