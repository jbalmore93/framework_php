<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <div class="m-5 p-5">
    <table class="table table-primary">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $id_categoria?></td>
                <td><?= $nombre_cat?></td>
                <td><?= $descripcion_cat?></td>
                <td><?= $ruta_cat?></td>
            </tr>
        </tbody>
    </table>
    </div>
  
</body>
</html>