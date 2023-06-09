<?php
include 'header.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

    <title>Document</title>
</head>
<body>
<table border="1" id="table_id">
    <tr>
    <th>TV ID</th>
    <th>TV NAME</th>
    <th>TV NUMBER</th>
    <th>TV AUTHOR</th>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
    </tr>

</table>

</body>
</html>

<script>
    $(document)
        .ready(function () {
            $('#table_id')
                .DataTable();
        });
</script>