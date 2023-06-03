<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>


<!DOCTYPE HTML> 
<html lang="pt-br"> 
   <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neurovendas</title>
    <link rel="icon" href="img/logo_faculdade.png"> 
      <link rel="stylesheet" href=css/style_evento01.css> 
   </head>

   <body>


 <nav>
         <img class="logo" src="img/logo_nav.png" width="100px">
         <h3> FACULDADE CDL </h3>
         <ul class="nav_list"> 
             <ul class="nav_list"> 
               <div class="img_perfil">
                  <img class="icone_perfil" src="img/icone_perfil.png">
               </div>
               <div class="nome_perfil"> 
                  <p class="nome_perfil"><span><?php echo $_SESSION['user_name'] ?></span></p> 
               </div>
               <div class="img_sair"> 
                  <input type="image" img class="icone_sair" src="img/icone_sair.png" onclick="openModal()"> 
               </div>
         </ul>
      </nav>

<center><h1>NEUROVENDAS</h1></center>

  <div id="card_grande">
            <p align="justify"> TÉCNICAS PARA AUMENTAR A EFICÁCIA DAS ABORDAGENS DE VENDAS E ESTIMULAR A TOMADA DE DECISÃO DOS COMPRADORES.<br><br>

            Em um contexto de mudança de comportamento de compra e de interesse de venda se faz necessário fazer esse encontro assertivo entre o que e quem quer comprar e quem deseja vender. Porém, nem sempre é fácil, já que muitas vezes a pessoa que quer comprar não sabe exatamente o que deseja. Surge então a importância de se conhecer a mente do consumidor e ferramentas capazes de potencializar esse vendedor a fim de fechar a venda.</p>

            <h3> OBJETIVO </h3>

            <p align="justify"> 
                Apresentar ferramentas e estratégias de vendas com base nas neurociências para potencializar o vendedor para o fechamento da venda, incluindo:<br><br>

                • Conhecer mente dos clientes: o que buscam, querem e desejam;<br>
                • Conhecer limites e formas de se potencializar como vendedor;<br>
                • Conhecer as estratégias de comunicação assertiva para fechamento de vendas.<br>

            <h3> CONTEÚDO PROGRAMÁTICO </h3>

            <p align="justify">
                • CONSUMIDOR – Neurociências e Comportamento do consumidor: Cérebro e decisão de compra, Sensação, emoção e percepção;<br>
                • VENDEDOR – papel do vendedor, bloqueios e estratégias para potencializar-se;<br>
                • CONEXÃO VENDEDOR/CONSUMIDOR E VENDA – Comunicação assertiva com o cliente: assertividade, Rapport e Escuta ativa, processos de venda com uso de gatilhos.<br>
            </p>

            <h3> METODOLOGIA </h3>

            <p align="justify">

                Para o curso serão utilizadas metodologias ativas, com reflexões e discussão de casos e de interação entre os participantes.
            </p>


            <h3> AO FINAL DO CURSO O PARTICIPANTE SERÁ CAPAZ DE: </h3>

            <p align="justify">

                • Entender o funcionamento da mente do consumidor frente ao seu processo de decisão de compra;<br>
                • Utilizar estratégias para se potencializar enquanto vendedor;<br>
                • Aplicar ferramentas de comunicação assertiva para fechar a venda.<br>

            <h3> FACILITADORA </h3>

            <p align="justify">
                Alessandra Schiarantolla – Mestre em Administração de Empresas, especialista em Marketing com graduação em Administração e psicologia (em andamento), psicanalista, practitioner em programação neurolinguística, coach e mentora de negócios inovadores. Gestora no segmento educacional, professora de graduação e pós-graduação, palestrante e facilitadora de treinamentos nas áreas de liderança, motivação, relações interpessoais, marketing, vendas e comportamento.</p>

            <h3> CARGA HORÁRIA </h3>

            <p>12 h/a</p>

            <h3> PERÍODO DE REALIZAÇÃO </h3>
            <p align="justify">

                11, 13, 18 e 20/JULHO/2023 – Aulas na 3ª e 5ª feira

                Horário: 18h30 as 21h30</p>

            <h3> CERTIFICAÇÃO </h3>

            <p align="justify">
                A Faculdade CDL concederá certificação de conclusão para os participantes com frequência mínima de 75% às aulas, que realizarem as atividades solicitadas pela facilitadora, dentro dos critérios estabelecidos por ela, durante o desenvolvimento do curso.
            </p>
        </div>


   
    <div class="card" id="card">
        <div class="card-front">
            <center><img class="img_card_01" src="img/neuro.gif" width="270px" height="200px"></center>
         
        <p class="data_evento01"><b>11 JUL > 23 JUL</b> </p>
        <p class="nome_evento01"> <b>NEUROVENDAS</b></p>
        <p class="local_evento01"> Faculdade CDL </p>

            <center><input class="botao_evento01" type="submit" value="GARANTA JÁ O SEU INGRESSO!" onclick="rotateCard()"></center> 
        </div>
        <div class="card-back">
            <img class="img_card_02" src="img/qrCode_neurovendas.png">
            <br>
            <p class="text_escanear" align="center" style="color: #fff"> Escaneie o QR Code acima para acessar o ingresso </p>
            <input type="image" img class="icone_voltar_card" src="img/icone_voltar_card.png" onclick="rotateCard2()">
        </div>
    </div>


<div class="modal-container">
    <div class="modal">
      <center><h4>ATENÇÃO!</h4></center>
      <hr>
      <span>
        Tem certeza que deseja sair?
      </span>
      <div class="btns">
        <button class="btnOK" onclick= "location.href='logout.php'">Sim</button>
        <button class="btnClose" onclick="closeModal()">Cancelar</button>
      </div>
    </div>
  </div>


<script src="js/script.js"></script>
   </body>
</html>