<?php 
require 'Conta.php';
session_start();
if(!isset($_SESSION['saldo'])){
    $_SESSION[ 'saldo'] = 6700;
}
$conta = new Conta($_SESSION['saldo']);
if(isset($_POST['deposito'])){
    $deposito = (float) htmlspecialchars($_POST['deposito']) ?? '0';
    try{
        $conta->depositar($deposito);
        $_SESSION['saldo'] = $conta->getSaldo();
    } catch(Exception $e){
        echo $e->getMessage();
    }
}

if(isset($_POST['saque'])){
    $saque = (float) htmlspecialchars($_POST['saque']) ?? '0';
    try{
        $conta->sacar($saque);
        $_SESSION['saldo'] = $conta->getSaldo();
    } catch(Exception $e){
        echo $e->getMessage();
    }
}
?>

<h1>Saldo bancário</h1>
<h2>R$ <?php echo $conta->getSaldo(6700); ?> </h2>
<hr>
<form method="post">
    <fieldset>
    <legend>Depositar</legend>
    <input type="number" step="0.01" name="deposito" required>
    <input type="submit" value="depositar">
    </fieldset>
</form>
<hr>
<form method="post">
    <fieldset>
    <legend>Sacar</legend>
    <input type="number" step="0.01" name="saque" required>
    <input type="submit" value="sacar">
    </fieldset>
</form>