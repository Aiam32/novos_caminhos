<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exemplo Prático com Objetos</title>
</head>

<body>
    <pre>
    <?php 
        require_once 'Conta.php';

        $p1 = new ContaBanco (); // Ugo
        $p2 = new ContaBanco (); // Hadis
        
        $p1->abrirConta("CC");
        $p1->setNumConta(2488);
        $p1->setDono("Ugo");
        $p1->depositar(300);
        $p1->sacar(338);
        $p1->pagarMensal();
        $p1->fecharConta();
        
        $p2->abrirConta("CP");
        $p2->setNumConta(2691);
        $p2->setDono("Hadis");
        $p2->depositar(500);
        $p2->sacar(630);
        $p2->pagarMensal();
        $p2->fecharConta();
        
        print_r($p1);
        print_r($p2);
    ?>
    </pre>
</body>

</html>