<?php
//Chama os arquivos que contém a lógica das operações
require('calculadora.php');
require('tabuada.php');
?>

<!-- Área da calculadora -->
<h1>Calculadora</h1>
<form method="post">
    <input name="n1" type="text">
    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input name="n2" type="text">
    <input type="submit" value="Calcular">
</form>
<?php
//verificação se os dados foram enviados
if(!empty($_POST['n1']) && !empty($_POST['n2'])){
    $n1 =  $_POST['n1'];
    $n2 =  $_POST['n2'];
    $op =  $_POST['op'];
    
    //verificação se os dados enviados são numeros
    if(is_numeric($n1) && is_numeric($n2)){
        //Se os dados forem enviados corretamente, imprime o resultado na tela
        echo "<h2>Resultado: ".fazerOperacao($n1, $n2, $op)."</h2>";
    } else{
        echo "<h2>Os valores enviados precisam ser numeros</h2>";
    }
}
?>
<hr>


<!-- Área da tabuada -->
 <h1>Tabuada</h1>
 <form method="post">
    <input name="numero" type="text">
    <input type="submit" value="Verificar tabuada">
 </form>
 <ul>
 <?php
    //verifico se os dados foram enviados
    $tabuada = array();
    if(!empty($_POST['numero'])){
        //verifico se os dados são numericos
        if(!is_numeric($_POST['numero'])){
            echo "<h2>O valor enviado precisa ser um numero</h2>";
        } else{
            $tabuada = tabuada($_POST['numero']);
        }
    }
    //mapeio cada resultado e envio numa lista
    foreach($tabuada as $result):
 ?>
    <li><?php echo $result; ?></li>
    <?php endforeach;?>
</ul>
<hr>