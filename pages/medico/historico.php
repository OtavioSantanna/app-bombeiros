<?php
  //inicia a seção
  session_start();
  //print_r($_SESSION);
  if((!isset($_SESSION['matricula']) == true ) and (!isset($_SESSION['senha']) == true))
  {
      unset($_SESSION['matricula']);
      header('Location: login.html');
  }
  $logado = $_SESSION['matricula'];
  $matricula = $_SESSION['matricula'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Ocorrência</title>
    <link rel="stylesheet" href="../../css/socorrista/historico.css">
</head>

<body>
    <div class="shadow center" id="menu">
        <div class="menu" >

                <p class="form_tt">FOLHA DE OCORRÊNCIA</p>

                <p class="form_tt">FOLHA DE OCORRÊNCIA</p>

                <p class="form_tt">FOLHA DE OCORRÊNCIA</p>

        </div>
        <div></div>
    </div>
    <div class="header">
        <div class="pic_menu_sq" onclick="menu()">
            <div class="menu_bt">
                <div class="menu_dash"></div>
                <div class="menu_dash"></div>
                <div class="menu_dash"></div>
            </div>
        </div>
        <div class="logo_sq center">
            <img src="../img/logo_pequena.png" class="logo">
        </div>
        <div class="pic_menu_sq">
            <div class="pic"></div>
        </div>


    </div>

    <div class="title_sq center">
        <p class="title">HISTÓRICO DE OCORRÊNCIAS</p>
    </div>

    <div class="forms center">
        <div class="searchbar">
            <button type="button" id="searchButton" style="display: none;">Q</button>
            <input type="text" class="searchbar_input" placeholder="PESQUISAR..." id="searchInput" onfocus="searchButtonAppear()"></input>
            <hr style="border: 1px solid gray;">
            <select class="searchbar_select">
                <option>
                    DATA
                </option>
                <option>
                    NOME
                </option>
                <option>
                    CIDADE
                </option>
                <option>
                    Opção 4
                </option>
            </select>
        </div>

        <div class="bloco_ocorrencia">
            <p class="form_tt">NOVA OCORRÊNCIA</p>
            <p class="text_content">endereço</p>
            <p class="text_content">11/09/2001</p>
            <p class="text_content">dado 1</p>
            <p class="text_content">dado 2</p>
            <a class="ver_mais_a" href="?">VER MAIS ></a>
            <a href="edicaohistorico.html" class="editar_historico_button center">EDITAR HISTÓRICO DA OCORRÊNCIA</a>

        </div>

    </div>

</body>
<script src="../script/historico.js"></script>
<script src="../script/imagemInput.js"></script>

</html>