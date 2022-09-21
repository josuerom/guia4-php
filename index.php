<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solucíon guía 5 | PHP</title>
</head>
<body>
    <form action="index.php" method="post">
        <h2>Test Básico Uniminuto</h2>
        <p>Cuantos lados tiene un pentágono?</p>
        a. 6 <input type="checkbox" name="pr1">
        b. 4 <input type="checkbox" name="pr1">
        c. 5 <input type="checkbox" name="pr1">
        d. 8 <input type="checkbox" name="pr1">

        <p>Como se llama el triángulo que tiene sus tres lados distintos?</p>
        a. Equilatero <input type="checkbox" name="pr2" value="a">
        b. Isósceles <input type="checkbox" name="pr2" value="b">
        c. Escaleno <input type="checkbox" name="pr2" value="c">
        d. Acutángulo <input type="checkbox" name="pr2" value="d">

        <p>Que letra representa los números enteros?</p>
        a. R <input type="checkbox" name="pr3" value="a">
        b. Z <input type="checkbox" name="pr3" value="b">
        c. Q <input type="checkbox" name="pr3" value="c">
        d. N <input type="checkbox" name="pr3" value="d">

        <p>Que número sigue en la sucesión de numeros 5, 8, 11, 14, 17</p>
        a. 21 <input type="checkbox" name="pr4" value="a">
        b. 19 <input type="checkbox" name="pr4" value="b">
        c. 20 <input type="checkbox" name="pr4" value="c">
        d. 22 <input type="checkbox" name="pr4" value="d">

        <p>Que número sigue en la sucesion de 2, 7, 3, 6, 4, 5, 5, 4</p>
        a. 6 <input type="checkbox" name="pr5" value="a">
        b. 4 <input type="checkbox" name="pr5" value="b">
        c. 7 <input type="checkbox" name="pr5" value="c">
        d. 5 <input type="checkbox" name="pr5" value="d">

        <p>Cuánto es el resultado de 5/3 * 2/4</p>
        a. 20/6 <input type="checkbox" name="pr6" value="a">
        b. 10/3 <input type="checkbox" name="pr6" value="b">
        c. 5/6 <input type="checkbox" name="pr6" value="c">
        d. 7/6 <input type="checkbox" name="pr6" value="d">

        <p><input type="submit" name="enviar" value="Enviar"></p>
    </form>

    <?php
        $c = 0;
        $i = 0; 

        if (isset($_POST['pr1'])) {
            $c++;
        } else{
            $i++;
        }
        if (isset($_POST['pr2'])) {
            $c++;
        } else {
            $i++;
        }
        if (isset($_POST['pr3'])) {
            $c++;
        } else {
            $i++;
        }
        if (isset($_POST['pr4'])) {
            $c++;
        } else {
            $i++;
        }
        if (isset($_POST['pr5'])) {
            $c++;
        } else {
            $i++;
        }
        if (isset($_POST['pr6'])) {
            $c++;
        } else {
            $i++;
        }

        if ($_POST['enviar']) {
            echo "Cantidad de respuestas correctas: $c</br>";
            echo "Cantidad de respuestas incorrectas: $i";
        }
    ?>
</body>
</html>
