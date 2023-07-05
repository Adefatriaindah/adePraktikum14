<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Film</title>
</head>
<body>
    <h1 align = "center">Data Film</h1>
    <table border="1" celspacing="0" colpading="5" align = "center">
        <tr align = "center" bgcolor = '#EE6868'>
        <th >No</th>
        <th>Cover</th>
        <th>Nama Film</th>
        <th>ID Genre</th>
        <th>Durasi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($semuafilm as $film): ?>
        <tr align = "center" bgcolor = 'FFEEEE'>
            <td><?= $i++; ?></td>
            <td><img style="width: 50px;" src="/assets/cover/<?= $film ['cover'] ?>" alt=""></td>
            <td><?php echo $film ['nama_film'] ?></td>
            <td><?php echo $film ['nama_genre'] ?></td>
            <td><?php echo $film ['duration'] ?></td>
</tr>
        <?php endforeach; ?>
    </table>
</body>
</html>