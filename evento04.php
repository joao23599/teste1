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
   <title>Trádego Pago Para Seu Negócio</title>
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

 <center><h1>TRÁFEGO PAGO PARA SEU NEGÓCIO</h1></center>

  <div id="card_grande">
         <p align="justify">TRÁFEGO PAGO PARA SEU NEGÓCIO: UM ANÚNCIO ONLINE VALE MAIS QUE MIL PANFLETOS<br><br>

         Com a facilidade de alguns cliques, é possível veicular seus anúncios nas principais plataformas do Facebook, incluindo o Instagram, Audience Network e Messenger. Com uma única campanha, sua mensagem pode alcançar pessoas em todos os aplicativos e sites que elas adoram, aumentando assim o potencial de engajamento e conversão.</p>

         <h3> OBJETIVOS </h3>

         <p align="justify">

            Aprender como funciona o mundo dos anúncios online e começar a anunciar no Facebook e Instagram. Crie e veicule campanhas usando ferramentas simples e de autoatendimento. Acompanhar seu desempenho com relatórios fáceis de entender.</p>

         <h3> CONTEÚDO PROGRAMÁTICO </h3>

                     <p align="justify">MÓDULO 01 – O MUNDO DOS ANUNCIANTES<br><br>

                     • O que é anúncios online?

                     • Quais as principais ferramentas de tráfego pago da atualidade

                     • Qual a importância de usar tráfego pago para o crescimento do seu negócio<br><br>

                      

                     MÓDULO 02 – PRIMEIROS PASSOS<br><br>

                     • ABC do tráfego pago<br>

                     • Qual fonte de tráfego usar primeiro<br>

                     • Como medir meu retorno<br>

                     • Pixel o que é?<br>

                     • Técnicas de organização<br>

                     • Leilão<br>

                     • Principais Métricas<br>

                     • Públicos e segmentação<br>

                     • Estrutura de campanhas<br>

                     • Testes<br><br>

                      

                     MÓDULO 03 – PREPARANDO O TERRENO<br><br>

                     • Configurando seu Gerenciador de negócios<br>

                     • Formas de pagamento<br>

                     • Funil de vendas<br>

                     • Tipos de criativos<br><br>

                      

                     MÓDULO 04 – MÃO NA MASSA (Facebook Ads)<br><br>

                     • Tipos de campanhas<br>

                     • Criando públicos para cada campanha<br>

                     • Criando uma campanha de visualização de vídeo<br>

                     • Criando uma campanha de tráfego<br>

                     • Criando uma campanha de conversão<br>

                     • Definindo uma estratégia para o funil de vendas<br>

                     • Otimização de campanhas<br></p>


               <h3> AO FINAL DO CURSO O PARTICIPANTE SERÁ CAPAZ DE: </h3>

               <p align="justify">
                  Conhecer todas as possibilidades de anúncios no Facebook e Instagram, criar um plano de mídia detalhado, criar campanhas da forma correta no Facebook, Instagram e sites parceiros.</p>

               <h3> FORMATO </h3>

               <p align="justify">Aulas presenciais aos sábados com teoria e atividade prática.</p>

               <h3> PERÍODO DE REALIZAÇÃO </h3>

               <p align="justify">

               01, 08, 15 e 22/JULHO/2023 – Aulas aos Sábados<br>
               HORÁRIO: 8h30 as 12h30</p>

               <h3> CARGA HORÁRIA </h3>
               <p> 16h/a </p>

               <h3> PÚBLICO ALVO </h3>

               <p align="justify"> Interessados no tema em geral que buscam aprender as usar as fontes de tráfego pago de forma correta para melhorar seus anúncios ou aprender a criar do zero campanhas online de forma estratégica, seja para negócios online ou negócios locais.</p>

               <h3> FACILITADOR </h3>

               <p align="justify"> Romário Rocha – Publicitário formado pela UniFanor Wyden e atua na área da comunicação desde 2012. Com vasta experiência em publicidade, ele se destaca na criação e promoção de marcas, produtos e serviços, tendo atendido diversos segmentos, como cultura, varejo, educação, grandes eventos locais e campanhas políticas. Além disso, no mundo do tráfego pago, Romário já ultrapassou a marca de 1 milhão e meio de reais investidos em campanhas, demonstrando sua expertise em alcançar resultados expressivos por meio de estratégias de mídia pagas. </p>

               <h3> CERTIFICAÇÃO </h3>
               <p align="justify">A Faculdade CDL concederá certificação de conclusão para os participantes com frequência mínima de 75% às aulas, que realizarem as atividades solicitadas pelo facilitador, dentro dos critérios estabelecidos por ele, durante o desenvolvimento do curso.</p>

      </div>


   
    <div class="card" id="card">
        <div class="card-front">
            <center><img class="img_card_01" src="img/trafego.gif" width="270px" height="200px"></center>
         
            <p class="data_evento01"><b>01 JUL > 22 JUL</b> </p>
            <p class="nome_evento01"> <b>TRÁFEGO PAGO PARA SEU NEGÓCIO</b></p>
            <p class="local_evento01"> Faculdade CDL </p>

            <center><input class="botao_evento01" type="submit" value="GARANTA JÁ O SEU INGRESSO!" onclick="rotateCard()"></center> 
        </div>
        <div class="card-back">
            <img class="img_card_02" src="img/qrCode_trafego_pago.png">
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