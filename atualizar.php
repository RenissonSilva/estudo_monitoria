<?php
    $dado = $_POST['nome'] . ',' . $_POST['nota'] . "\n";
    $handle = fopen('dados.csv', 'a');
    fwrite($handle, $dado);
?>
<pre>
olá
    mundo
        cruel
</pre>
<h1>tá escrito</h1>
<a href="tabela.php">Voltar</a>
<?php header('location:tabela.php'); ?>