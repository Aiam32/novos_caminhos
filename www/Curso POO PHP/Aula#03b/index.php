<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Aula 03 - POO - Configurando Visibilidade de Atributos e Métodos</title>
</head>

<body>
    <pre>
    <?php
        require_once 'Caneta.php';
        
        $c1 = new Caneta("Bic Cristal", "Azul", 0.5);
        $c1->modelo = "Bic cristal";
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        //$c1->carga = 99;
        //$c1->tampada = true; 
        $c1->rabiscar();
        $c1->destampar();
        print_r($c1);  
    ?>
    </pre>
</body>

</html>