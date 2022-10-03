<!DOCTYPE html>
<html>
    <head>
        <!--Coding UTF8-->
        <meta charset="UTF-8">
        <!--Titol de la pagina-->
        <TITLE> Activitat 3 - OOP en PHP </TITLE>   
    </head>
    
    <body>
        <!-- Titol -->
        <h1>Vehicle</h1>
        <?php
        // Escriu una classe Vehicle amb les següents especificacions:
            class Vehicle {
                // 5 atributs 
                private $traccion;
                private $peso;
                private $modelo;
                private $potencia;
                private $consumo;
                
                // 3 constructors

                public function __construct($traccion, $peso, $modelo, $potencia, $consumo){
                    $this->traccion = $traccion;
                    $this->peso = $peso;
                    $this->modelo = $modelo;
                    $this->potencia = $potencia;
                    $this->consumo = $consumo;
                }

                public function __construct1($traccion, $peso, $modelo){
                    $this->traccion = $traccion;
                    $this->peso = $peso;
                    $this->modelo = $modelo;
                }

                public function __construct2(){

                }
        ?>

    </body>
</html>