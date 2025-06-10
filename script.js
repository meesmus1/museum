$(document).ready(function() {
    $.ajax({
        url: 'inc/getcontent.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var tableContent = '';
            $.each(data, function(index, qrCode) {
                tableContent += '<tr>';
                tableContent += '<td>' + qrCode.title + '</td>';
                tableContent += '<td>';
                tableContent += '<button class="btn btn-info">Download</button>';
                tableContent += '<button class="btn btn-warning">Bewerken</button>';
                tableContent += '<button class="btn btn-secondary">Dupliceren</button>';
                tableContent += '<button class="btn btn-danger">Verwijderen</button>';
                tableContent += '</td>';
                tableContent += '</tr>';
            });
            $('#qr-code-table').html(tableContent);
        },
        error: function() {
            alert('Er is een fout opgetreden bij het ophalen van QR-codes.');
        }
    });
});
