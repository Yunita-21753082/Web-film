<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Genre</title>
</head>
<body>
    <h1>Data Genre</h1>
    <table border="1" cellspacing="5" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Id Genre</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($Genre as $row) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $row['id_genre'] ?></td>
            <td><?= $row['created_at'] ?></td>
            <td><?= $row['updated_at'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
