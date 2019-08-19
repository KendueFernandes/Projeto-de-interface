<?php


//Conecta no seu banco de dados
$con = mysqli_connect("localhost", "usuario", "senha", "nome_do_banco");

// Formata seu comando de inserir
$insert = "insert into cidade (nome, idest) values ('$nome', '$idest')";

// Executa o comando
$res = mysqli_query($con, $insert);

if ($res){
  echo "Cidade inserido com sucesso!!! <br><br>";
  echo "<a href='?pagina=cidade'>Voltar</a>";
} else {
  echo "Cidade Não foi inserida, por favor, contacte o administrador!!! <br><br>";
  echo "<a href='?pagina=cidade'>Voltar</a>";
}
?>
