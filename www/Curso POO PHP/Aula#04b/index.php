<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset="UTF-8">

    <title>Métodos Getter, Setter e Construtor</title>
</head>

<body>
    <pre>
    <?php 
        require_once 'Caneta.php';  
        
        $c1 = new Caneta ("BIC", "Azul", 0.5 );
        //$c1->setModelo("BIC");
        //$c1->setPonta(0.4);
        print_r ($c1); 
        $c2 = new Caneta ("ABC", "Verde", 1.0);
        print_r ($c2); 
        
    ?>
    </pre>
</body>

</html>