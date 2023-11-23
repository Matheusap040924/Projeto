<?php
include_once 'app/model/Servico.php';
include_once 'app/view/ServicoView.php';

echo "<h1>Serviços</h1>"

//instanciar as classes
$servicoview = new ServicoView();
$servicoview ->exibirServicos();
   

?>