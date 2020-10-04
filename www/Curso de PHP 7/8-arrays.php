<?php
// Arrays
$carros = array(1=>"BMW", 2=>"Ferrari", 3=>"Hilux");
$carros[] = "Fiat Uno";
$carros[5] = "Camaro";
print_r ($carros);
echo "<hr>";
echo $carros[4];
echo "<br>";
echo $carros[5];
echo "<hr>";
echo "<hr>";
////////////////////////////////////

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[3] = "Suzuki";
print_r($motos);
echo "<hr>";
echo $motos[0];
echo "<br>";
echo $motos[3];
echo "<hr>";
echo "<hr>";
////////////////////////////////////

$clientes = [ "Fernando", "Caio", "Rafael"];
print_r($clientes);
echo "<hr>";
echo $clientes[0];
echo "<br>";
echo $clientes[2];
echo "<hr>";
echo "<hr>";
/////////////////////////////////////

// Count
echo count($carros);
echo "<br>";
echo 'ou';
echo "<br>";
$totalCarros = count($carros);
echo $totalCarros;
echo "<hr>";
/////////////////////////////////////
echo count($motos);
echo "<br>";
echo 'ou';
echo "<br>";
$totalMotos = count($motos);
echo $totalMotos;
echo "<hr>";
/////////////////////////////////////
echo count($clientes);
echo "<br>";
echo 'ou';
echo "<br>";
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";
echo "<hr>";
/////////////////////////////////////

// Foreach
foreach($carros as $valor) {
    echo $valor."<br>";
}
echo "<hr>";
/////////////////////////////////////
foreach($motos as $valor) {
    echo $valor;
    echo "<br>";
}
echo "<hr>";
/////////////////////////////////////
foreach($clientes as $valor) {
    echo $valor."<br>";
}
echo "<hr>";
echo "<hr>";

/////////////////////////////////////

// Arrays assoiativos
$pessoa = array ("Nome"=> "Ugo", "Idade"=> 32, "Altura"=> 1.77);
echo $pessoa["Nome"];
echo "<br>";
echo $pessoa["Idade"];
echo "<br>";
echo $pessoa["Altura"];
echo "<br>";
$pessoa["Cidade"] = "Coimbra";
print_r($pessoa);
echo "<hr>";
/////////////////////////////////////
foreach($pessoa as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}
echo "<hr>";
echo "<hr>";

/////////////////////////////////////

// Arrays multidimensinais
$times = array(
                "Cariocas"=> array("Vice-campeão"=>"vasco", "Campeão"=>"flamengo", "Terceiro lugar"=>"botafogo"), 
                "Paulistas"=> array("Campeão"=>"santos", "Vice-campeão"=>"são paulo", "Terceiro lugar"=> "palmeiras"), 
                "Baianos"=> array("Terceiro lugar"=>"bahia", "Vice-campeão"=>"vitoria", "Campeão"=>"itabuna")
                );
echo $times["Cariocas"]["Vice-campeão"];
echo "<br>";
echo $times["Cariocas"]["Campeão"];
echo "<br>";
echo $times["Cariocas"]["Terceiro lugar"];
echo "<br>";
foreach($times["Cariocas"] as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}
echo "<hr>";
/////////////////////////////////////
echo $times["Paulistas"]["Campeão"];
echo "<br>";
echo $times["Paulistas"]["Vice-campeão"];
echo "<br>";
echo $times["Paulistas"]["Terceiro lugar"];
echo "<br>";
foreach($times["Paulistas"] as $indice => $valor) {
    echo $indice .": " .$valor ."<br>";
}
echo "<hr>";
/////////////////////////////////////
echo $times["Baianos"]["Terceiro lugar"];
echo "<br>";
echo $times["Baianos"]["Vice-campeão"];
echo "<br>";
echo $times["Baianos"]["Campeão"];
echo "<br>";
foreach($times["Baianos"] as $indice => $valor) {
    echo $indice .": " .$valor;
    echo"<br>"; 
}