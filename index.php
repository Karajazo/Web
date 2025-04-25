<!DOCTYPE html>
<html>
<head>
    <title>Formulario POST</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Formulario POST</h2>
    <form method="POST" action="">
        <label>Nombre:</label><br>
        <input type="text" name="nombre"><br>
        <label>Dirección:</label><br>
        <input type="text" name="direccion"><br>
        <label>Teléfono:</label><br>
        <input type="text" name="telefono"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    //var_dump($_SERVER);
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["nombre"]) || empty($_POST["direccion"]) || empty($_POST["telefono"])) {
            echo "Por favor coloque los datos por favor";
        } else {
            $nombre = $_POST["nombre"];
            $dir = $_POST["direccion"];
            $telefono = $_POST["telefono"];
            echo "Nombre: ".$nombre."<br>";
            echo "Direccion: ".$dir."<br>";
            echo "Telefono: ".$telefono."<br>";
        }
    }
    ?>
</body>
</html> 