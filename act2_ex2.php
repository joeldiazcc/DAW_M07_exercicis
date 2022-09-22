<!DOCTYPE html>
<html>
    <head>
        <!--Coding UTF8-->
        <meta charset="UTF-8">
        <!--Titol de la pagina-->
        <TITLE> Activitat 2 - PHP </TITLE>   
    </head>
    
    <body>
        <!-- Titol -->
        <h1>Hotel PHP</h1>
        <h2>Habitacions</h2>
        <?php
            // Declarem array de Habitacions
            $habitacio = [];
            $min = 0;
            $max = 4;
            //plantes (5)
            for($i = 0; $i <= 5; $i++){
                //Habitacions (10)
                for($n = 0; $n <= 10; $n++){
                $persones = random_int($min,$max);
                if($persones == 0)
                    $habitacio[$i]= "L'habitació ".$n." de la planta ".$i." està buida.";
                else
                    if($persones == 4)
                        $habitacio[$i] = "L'habitació ".$n." de la planta ".$i." està plena.";
                    else
                        $habitacio[$i] = "A l'habitació ".$n." de la planta ".$i." hi ha $persones persones.";
                // Mostrem per pantalla
                echo $habitacio[$i];
                echo "<br>";}
            }
        ?>

    </body>
</html>
