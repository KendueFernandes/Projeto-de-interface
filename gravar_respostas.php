<?php
session_start();
// Recebe direto do form
$resp10 = $_REQUEST["reposta10"];

// Receber respostas da sessão
$resp9 = $_SESSION["resposta9"];
$resp8 = $_SESSION["resposta8"];
$resp7 = $_SESSION["resposta7"];
$resp6 = $_SESSION["resposta6"];
$resp5 = $_SESSION["resposta5"];
$resp4 = $_SESSION["resposta4"];
$resp3 = $_SESSION["resposta3"];
$resp2 = $_SESSION["resposta2"];
$resp1 = $_SESSION["resposta1"];
//... até 1

if($resp1 && $resp2 && $resp3 && $resp4 && $resp5 && $resp6 && $resp7 && $resp8 && $resp9 && $resp10 ){

  echo "Resposta 1: $resp1 <br/>";


  // conectar no banco

  // preparar o insert

  // fazer a mágica

} else {

  echo "Você não respondeu todas as perguntas...";

}

?>
