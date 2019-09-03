<?php
    $dado = $_POST['nome'] . ',' . $_POST['nota'] . "\n";
    $handle = fopen('dados.csv', 'a');
    fwrite($handle, $dado);
?>
<?php header('location:tabela.php'); ?>