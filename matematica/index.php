<?php 
require('calculadora.php');
?>
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
if(!empty($_POST['n1']) && !empty($_POST['n2'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $op = $_POST['op'];

    echo "<h2>Resultado: ".fazerOperacao($n1, $n2, $op)."</h2>";
}
?>
<hr>