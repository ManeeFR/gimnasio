<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- <link rel="StyleSheet" href="../View/estilos.css" type="text/css"> -->
    <title> Gimnasio </title>
    </meta>
</head>

<body>
        <h1> Anota los pesos que vayas cogiendo </h1>

        <form action="../Controller/dia1.php" method="post">

            <label for="1">press_plano_mancuernas</label>
            <input type="text" name="1" id="1">

            <label for="2">aperturas_inclinado</label>
            <input type="text" name="2" id="2">

            <label for="3">purestrength_por_separado</label>
            <input type="text" name="3" id="3">

            <label for="4">flexiones</label>
            <input type="text" name="4" id="4">

            <label for="5">curl_mancuernas_tumbado</label>
            <input type="text" name="5" id="5">

            <label for="6">dominadas_agarre_cerrado</label>
            <input type="text" name="6" id="6">

            <label for="7">barra_romana</label>
            <input type="text" name="7" id="7">

            <input type="submit" value="submit" name="form1">

        </form>

</body>

</html>