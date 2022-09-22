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
        <h2>Taules del restaurant</h2>
        <?php
            // Declarem array de Taules
            $taules = [];
            $min = 0;
            $max = 5;
            // Taules (10)
            for($i = 0; $i <= 9; $i++){
                $ncomensal = random_int($min,$max);
                if($ncomensal == 0)
                    $taules[$i]= "La taula " . $i . " está buida.";
                else
                    if($ncomensal == 5)
                        $taules[$i] = "La taula " . $i ." está plena.";
                    else
                        $taules[$i] = "A la taula " . $i . " hi han " . $ncomensal . " comensals.";
                // Mostrem per pantalla
                echo $taules[$i];
                echo "<br>";}
        ?>

    </body>
</html>
