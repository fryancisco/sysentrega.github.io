<?php
    if(session_status() !== PHP_SESSION_ACTIVE){session_start();}
    include("conexao.php");
    date_default_timezone_set('America/Sao_Paulo');
    $hhoje = date("H:i:s");                         // 17:16:18
    $nomecli = $_POST['nomecli'];
    $telcli = $_POST['telcli'];
    $ruacli = $_POST['ruacli'];
    $bairrocli = $_POST['bairrocli'];
    $numerocasacli = $_POST['numerocasacli'];
    $refcli = $_POST['refcli'];
    $volcli = $_POST['volcli'];
    

    $sql = "INSERT INTO `entrega`(`datah`, `hora`, `identrega`, `nomecli`, `telcli`, `ruacli`, `bairrocli`, `numerocasacli`, `refcli`, `volcli`, `caixa`) VALUES (NOW(),'$hhoje','','$nomecli','$telcli','$ruacli','$bairrocli','$numerocasacli','$refcli','$volcli', '$caixa')";
    $conexao->query($sql);
    $conexao->close();

    header('Location: index.php');
    exit;
?>