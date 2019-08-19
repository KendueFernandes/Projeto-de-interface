<?php
session_start();
// Recebe direto do form
$resp10 = $_REQUEST["resposta10"];

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

  // echo "Resposta 1: $resp1 <br/>";
  // echo "Resposta 2: $resp2 <br/>";
  // echo "Resposta 3: $resp3 <br/>";
  // echo "Resposta 4: $resp4 <br/>";
  // echo "Resposta 5: $resp5 <br/>";
  // echo "Resposta 6: $resp6 <br/>";
  // echo "Resposta 7: $resp7 <br/>";
  // echo "Resposta 8: $resp8 <br/>";
  // echo "Resposta 9: $resp9 <br/>";
  // echo "Resposta 10: $resp10 <br/>";

  //Conecta no seu banco de dados
  $con = mysqli_connect("localhost", "usuario", "senha", "nome_do_banco");

  // Formata seu comando de inserir com as $resp...
  $insert = "insert into Perguntas (nome, resp1, resp2, resp3, resp4, resp5, resp6, resp7, resp8, resp9, resp10) values ('$resp1', '$resp2', '$resp3', '$resp4', '$resp5', '$resp6', '$resp7', '$resp8', '$resp9', '$resp10')";

  // Executa o comando
  $resposta = mysqli_query($con, $insert);

  if ($resposta){
    echo "Respostas salvas com sucesso!";
    echo "<a href=''>Voltar</a>";
  } else {
    echo "Não foi possível salvar suas respostas.";
    echo "<a href=''>Voltar</a>";
  }


  // fazer a mágica

} else {

  echo "Você não respondeu todas as perguntas!";

}

?>
