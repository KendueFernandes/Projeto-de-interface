<?php
session_start();
$_SESSION["resposta2"] = $_REQUEST["resposta2"]
?>
<!DOCTYPE html>
<html lang="PT-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="layout.css">
  </head>
  <body class="fundo">
    <div class="container">

      <div class="row">
        <div class="col-sm">
          <!-- menu -->
          <?php include("menu.php") ?>

        </div>

        <!-- <div class="col-sm-2 mt-3 mb-3">
          <img src="http://www.eb.mil.br/image/image_gallery?uuid=b36272d3-26e2-43a0-8e85-2c66cf4cb3ea&groupId=10138&t=1287246479127" width="50">
        </div>

        <div class="col-sm mt-5">
          <button type="button" name="">Questionário</button>
        </div> -->

      </div>
      <form action="pergunta4.php" method="post">
      <div class="row">
        <div class="col-sm-8 mx-auto bg-white mt-5 p-5">
          <label>Você Trabalha e/ou estuda?</label><br>
          <select class="" name="reposta3">
            <option value="">Informe sua resposta</option>
            <option value="sim">Sim</option>
            <option value="não">Não</option>
          </select>
          <br>


          <br><button type="submit" class="btn btn-primary">Próxima</button></br>
        </form>
        </div>
      </div>


    </div>



  </body>
</html>
