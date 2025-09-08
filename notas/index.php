<?php
//chama o arquivo que contém os dados de cada aluno
require 'alunos.php';
?>
<!-- Mostra o nome dos alunos -->
<h1>Lista de alunos</h1>
<ul style="list-style:none;">
    <?php
        foreach($alunos as $aluno){
            $nomeAluno = $aluno['nome'];
            echo "<h2><li>$nomeAluno</li></h2>";
        }
    ?>
</ul><hr>

<!-- Mostra a nota dos quatro bimestres de cada aluno junto com a média e se o aluno foi aprovado.-->
<h1>Verificar notas</h1>
<form method="post">
    <select name="aluno">
        <option value="1">João</option>
        <option value="2">Nina</option>
        <option value="3">José</option>
        <option value="4">Samuel</option>
        <option value="5">Maria</option>
    </select>
    <input type="submit" value="Verificar notas">
</form>
<?php
//Confere se algum valor foi recebido
if(!empty($_POST['aluno'])){
    //Para não enviar um valor nulo, eu enviei cada indice acrescido de um no formulário, então aqui eu reduzo em 1 para ter o índice correto e então eu passo esse valor para a variável $pessoa que vai representar cada aluno no código
    $numeroAluno = $_POST['aluno'] - 1;
    $pessoa = $alunos[$numeroAluno];
    //Para calcular a média de cada pessoa eu somei as notas dos quatro bimestres e dividi pelo numero de bismestres
    $media = ($pessoa['nota1']+$pessoa['nota2']+$pessoa['nota3']+$pessoa['nota4']) / 4;

    //Mostro o nome do aluno selecionado e suas notas
    echo '<h2>Notas de '.$pessoa['nome'].': '.$pessoa['nota1'].' - '.$pessoa['nota2'].' - '.$pessoa['nota3'].' - '.$pessoa['nota4'].'</h2>';
    
    //Baseado em sua nota aqui eu mostro a media. Se o aluno tiver a media igual ou maior que 7 ele está aprovado. Se sua media for abaixo de 7 mas acima de 5 ele vai para a recuperação. Caso seja abaixo de 5 ele está reprovado
    if($media >= 7){
        echo "<h2>Media: $media - APROVADO</h2>";
    } elseif($media < 7 && $media >= 5){
        echo "<h2>Media: $media - RECUPERAÇÃO</h2>";
    }else{
        echo "<h2>Media: $media - REPROVADO</h2>";
    }
}