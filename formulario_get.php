<!DOCTYPE html>
<html>
<head>
    <title>Formulario GET</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Formulario GET</h2>
    <form method="GET" action="">
        <label>Universidad:</label><br>
        <input type="text" name="universidad"><br>
        <label>Carrera:</label><br>
        <input type="text" name="carrera"><br>
        <label>Semestre:</label><br>
        <input type="text" name="semestre"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    //var_dump($_GET);
    if($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET["universidad"])){
        if(empty($_GET["universidad"]) || empty($_GET["carrera"]) || empty($_GET["semestre"])) {
            echo "Por favor coloque los datos por favor";
        } else {
            $universidad = $_GET["universidad"];
            $carrera = $_GET["carrera"];
            $semestre = $_GET["semestre"];
            echo "Universidad: ".$universidad."<br>";
            echo "Carrera: ".$carrera."<br>";
            echo "Semestre: ".$semestre."<br>";
        }
    }
    ?>
</body>
</html> 