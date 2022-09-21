<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía 5 | PHP</title>
</head>
<body>
    <form methot="post">
        <p>Cuantos lados tiene un pentágono?</p>
        <p>a. 6 <input type="checkbox" name="i"></p>
        <p>b. 4 <input type="checkbox" name="i"></p>
        <p>c. 5 <input type="checkbox" name="c"></p>
        <p>d. 8 <input type="checkbox" name="i"></p>

        <p>Como se llama el triangulo que tiene sus tres lados distintos?</p>
        <p>a. Equilatero <input type="checkbox" name="i" value="a"></p>
        <p>b. Isósceles <input type="checkbox" name="i" value="b"></p>
        <p>c. Escaleno <input type="checkbox" name="c" value="c"></p>
        <p>d. Acutángulo <input type="checkbox" name="i" value="d"></p>

        <p>Que letra representa los numeros enteros?</p>
        <p>a. R <input type="checkbox" name="i" value="a"></p>
        <p>b. Z <input type="checkbox" name="i" value="b"></p>
        <p>c. Q <input type="checkbox" name="c" value="c"></p>
        <p>d. N <input type="checkbox" name="i" value="d"></p>

        <p>Que numero sigue en la sucesion de numeros 5, 8, 11, 14, 17</p>
        <p>a. 21 <input type="checkbox" name="i" value="a"></p>
        <p>b. 19 <input type="checkbox" name="i" value="b"></p>
        <p>c. 20 <input type="checkbox" name="c" value="c"></p>
        <p>d. 22 <input type="checkbox" name="i" value="d"></p>

        <p>Que numero sigue en la sucesion de numeros 2, 7, 3, 6, 4, 5, 5, 4</p>
        <p>a. 6 <input type="checkbox" name="i" value="a"></p>
        <p>b. 4 <input type="checkbox" name="i" value="b"></p>
        <p>c. 7 <input type="checkbox" name="i" value="c"></p>
        <p>d. 5 <input type="checkbox" name="c" value="d"></p>

        <p>Cuanto es el resultado de 5/3 * 2/4</p>
        <p>a. 20/6 <input type="checkbox" name="i" value="a"></p>
        <p>b. 10/3 <input type="checkbox" name="c" value="b"></p>
        <p>c. 5/6 <input type="checkbox" name="i" value="c"></p>
        <p>d. 7/6 <input type="checkbox" name="i" value="d"></p>

        <p><input type ="submit" value ="Verificar"</p>
    </form>

    <?php
        $c = 0;
        $i = 0; 

        if ($_POST['c'] == "c"){
            $c++;
        }else{
            $i++;
        }

        if ($_POST['c'] == "c"){
            $c +=1;
        }else{
            print "Respuesta 2 incorrecta <br>";
            $i +=1;
        }
        if ($r3 == "b"){
            print "Respuesta 3 correcta! <br>";
            $c +=1;
        }else{
            print "Respuesta 3 incorrecta <br>";
            $i +=1;
        }

        if ($r4 == "c"){
            print "Respuesta 4 correcta! <br>";
            $c +=1;
        }else{
            print "Respuesta 4 incorrecta <br>";
            $i +=1;
        }
        if ($r1 == "a"){
            print "Respuesta 5 correcta! <br>";
            $c +=1;
        }else{
            print "Respuesta 5 incorrecta <br>";
            $i +=1;
        }

        if ($r2 == "c"){
            print "Respuesta 6 correcta! <br>";
            $c +=1;
        }else{
            print "Respuesta 6 incorrecta <br>";
            $i +=1;
        }

        if ($c==6){
            print "Felicitaciones, tus respuestas correctas son " .$c;        
        }else {
            print "Tus respuestas correctas son ".$c;
            print "Tus respuestas incorrectas son " .$i;
        }
    ?>
</body>
</html>