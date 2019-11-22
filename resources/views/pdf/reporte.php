<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Reporte</title>
</head>
<body>
    
    <?php  foreach ($data as $punto) {?>
        # <?= $punto->id_new_place;?>
        <br>
        Punto solicitado por: <?= $punto->full_name;?>
        <br>
        longitud: <?= $punto->lng;?>
        <br>
        latitud: <?= $punto->lat;?>
        Nombre: <?= $punto->description;?>
        <hr>
    <?php } ?>

</body>
</html>