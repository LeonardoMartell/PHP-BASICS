<?php require 'gerador.php';?>
<h1>Gerador de senhas</h1>
<form method="post">
    <label for="senha">Numero de caracteres:</label>
    <input name="senha" type="number" value="15" min="8" max="50"><br>
    <fieldset style="width:200px;">
        <legend>A senha conterá:</legend>
        <div>
            <input type="checkbox" name="maiusculas" checked>
            <label for="maiusculas">Letras maiúsculas</label>
        </div>
        <div>
            <input type="checkbox" name="minusculas" checked>
            <label for="minusculas">Letras minúsculas</label>
        </div>
        <div>
            <input type="checkbox" name="numeros" checked>
            <label for="numeros">Números</label>
        </div>
        <div>
            <input type="checkbox" name="simbolos" checked>
            <label for="simbolos">Caracteres especiais</label>
        </div>
    </fieldset><br>
    <input type="submit" value="Gerar">
</form>

<?php
//Se os dados forem enviados chama a função gerar() e retorna a nova senha
if(!empty($_POST['senha'])){
    $tamanhoSenha = (int) $_POST['senha'];
    $maiusculas = (bool) ($_POST['maiusculas'] ?? false);
    $minusculas = (bool) ($_POST['minusculas'] ?? false);
    $numeros = (bool) ($_POST['numeros'] ?? false);
    $simbolos = (bool) ($_POST['simbolos'] ?? false);

    $gerarSenha = gerar($tamanhoSenha, $maiusculas, $minusculas, $numeros, $simbolos);

    echo "<h1>Senha: $gerarSenha</h1>";
}