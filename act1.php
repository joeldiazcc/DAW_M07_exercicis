<!DOCTYPE html>
<html>
    <head>
        <!--Coding UTF8-->
        <meta charset="UTF-8">
        <!--Titol de la pagina-->
        <TITLE> Activitat 1 - PHP </TITLE>   
    </head>
    
    <body>
        <!-- Titol -->
        <h1>Descrivint a Jhon Doe</h1>
        <h2>Les dades de Jhon són</h2>
        <!-- Declarem les variables de les dades de Jhon en PHP -->
        <?php
            $nom = "Jhon Doe";
            $edad = 30;
            $data = date("1986/03/11");
            $tel = 935555555;
            $adress = "Blackpool, England";
            $email = "oswin@dr.who";
            $treballa = False;
            $altura = "1.80";
            if ($treballa == False) {
                $sino = "no";}
            else{
                $sino = "si";}
        ?>
        <!-- Llista amb les dades de Jhon -->
        <ul>
            <li>Es diu: <?php echo $nom ?>  </li>
            <li>Té <?php echo $edad ?> anys</li>
            <li>Va néixer l'any: <?php echo $data ?></li>
            <li>El seu telèfon és: <?php echo $tel ?></li>
            <li>Viu a <?php echo $adress ?></li>
            <li>El seu e-mail és <?php echo $email ?></li>
            <li>Actualment <?php echo $sino ?> treballa</li>
            <li>I la seva altura es de: <?php echo $altura ?></li>
        </ul>  

    </body>
</html>
