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
   <title>POWER BI NA PRÁTICA</title>
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

 <center><h1>POWER BI NA PRÁTICA</h1></center>

 <div id="card_grande">

         <p align="justify">O Microsoft Power BI é a ferramenta de Business Intelligence da Microsoft.</p>
         <p align="justify">
         Com ela é possível consolidar, tornar coerentes e visuais as informações que se encontram em diversas fontes, desde uma simples pasta de trabalho do Microsoft Excel, a arquivos localizados na nuvem.
         <br><br>
         Essa ferramenta é uma coleção de serviços de software, aplicativos e conectores que trabalham juntos para transformar suas fontes de dados não relacionadas em informações coerentes, visualmente envolventes e interativas.
         <br><br> 
         Além disso, ela também possibilita o fácil acesso e compartilhamento dessas informações. 
         <br><br> 
         O Power BI pode ser usado de forma simples para pequenos trabalhos no Excel e banco de dados local, ou até mesmo para grandes e robustos trabalhos a nível empresarial.
         <br><br> 
         Com esta ferramenta é possível gerar uma visão de 360º graus com suas métricas mais importantes em um só lugar, atualizadas em tempo real.
         </p> 


         <h3> OBJETIVOS </h3>

         <p align="justify"> Aprender a gerar relatórios e melhorar a tomada de decisão com base em Dashboards de Indicadores de Desempenho.
         <br><br>

         O curso cobrirá em detalhes, porém de uma forma bem objetiva, todos os processos de BI (ETL, modelagem e visualização de dados) e todas as features (características) do Power BI através de uma aplicação real, para que se aprenda passo a passo os processos de BI e comece a resolver problemas de negócio com maior agilidade. </p>
         
         <h3> CONTEÚDO PROGRAMÁTICO </h3>

         <p align="justify"> 
            1. Introdução<br><br> 

             • Introdução à inteligência de negócios;<br> 
             • Introdução à análise de dados;<br> 
             • Introdução à visualização de dados;<br> 
             • Visão geral do self-service BI;<br> 
             • Considerações de self-service BI;<br> 
             • Ferramentas da Microsoft para self-service BI.<br> 
             • O que é Business Intelligence?<br> 
             • O que é o Microsoft Power BI?<br> 
             • Instalação do Power BI<br> 
            <br><br> 
            2. Primeiros Passos com o Power BI<br><br>

             • Introdução<br>
             • Fontes de Dados do Power BI<br>
             • Carregando Dataset e Ajustando<br>
             • Explorando Dados<br>
             • Navegando pelo Power BI<br>
             • Construindo Visualizações<br>
             • Drill-Down na Hierarquia<br>
             • Power BI Desktop Workflow<br>
             • Carregando dados do Microsoft Excel<br>
             • Design de Dashboard<br>
             • Formatando Título e Legenda<br>
             • Adicionando Estatística<br>
             • Formatando o Dashboard<br>
             • Salvando o projeto<br>
             • Publicando o Dashboard Online<br>
             • Carregando Pastas no Power BI<br><br>
             
            3. Limpeza e transformação, Formatando o Dataset no Query Editor<br><br>

             • Fazendo Pivot dos dados com 1 clique (Converter, juntar, unir)<br>
             • Eliminando valores missing<br>
             • Construindo mapas<br>
             • Web Scraping no Power BI (Exemplo PIB)<br>
             • Conectando a uma pasta<br>
             • Limpeza de dados – Removendo espaços em branco<br>
             • Limpeza de dados – Capitalize<br>
             • Limpeza de dados – Adicionando Metadados<br>
             • Transformação – Divisão de colunas (Split)<br>
             • Transformação – Substituir valores<br>
             • Transformação – Removendo linhas<br>
             • Transformação – Preenchimento<br>
             • Transformação – Criando colunas customizadas<br><br>

            4. Modelagem e relacionamento de dados<br><br>

             • Relacionamentos;<br>
             • Consultas DAX;<br>
             • Cálculos e medidas.<br>
             • Modelo Star Schema<br>
             • Criando tabelas dimensão no Power BI<br>
             • Criando tabelas Fato no Power BI<br>
             • Criando Medidas<br>
             • Resolvendo problema de negócio<br>
             • Query Editor x Report View x Relationship<br>
         </p>

         <h3> AO FINAL DO CURSO O PARTICIPANTRE SERÁ CAPAZ DE: </h3>

         <p align="justify">• Manipular a ferramenta Power BI para criar painéis, indicadores e relatórios visualmente atraentes e funcionais.<br>
            • Criar relatórios diferenciados, focados na tomada de decisão;<br>
            • Analisar informações de sites, banco de dados, planilhas, tudo na mesma tela e com facilidade.<br>
         </p>

         <h3> FORMATO </h3>
         <p align="justify"> As aulas serão presenciais no LABORATÓRIO DE INFORMÁTICA da Faculdade CDL. </p>

         <h3> PÚBLICO ALVO </h3>
         <p align="justify"> Profissionais que necessitam consolidar diferentes fontes de dados, fazer cruzamentos de informações de diferentes sistemas, criar relatórios, produzir visões e dashboards, acompanhar em tempo real indicadores de resultados, criar cenários e fazer análises avançadas de negócios.</p>

         <h3> REQUISITOS </h3>
         <p align="justify"> Conhecimentos em informática especificamente em excel a partir do nível intermediário, além de muita vontade de aprender.</p>

         <h3> CARGA HORÁRIA </h3>

         <p align="justify">18 h/a </p>

         <h3> FACILITADOR </h3>
         <p align="justify">Welton Alves, Administrador de empresas por formação e comprometido com a transformação nas organizações. Profissional com experiência nas áreas de atendimento ao cliente, Implantação de Dashboards, treinamentos presenciais e à distância, especialista na ferramenta de Self-Service BI da Microsoft, o Power BI. Possui visão estratégica e sistêmica com foco nos resultados. Atualmente atua como instrutor de capacitação e conteudista, também ministrando treinamentos focados para a tomada de decisão com o uso do Power BI. </p>

         <h3> PERÍODO DE REALIZAÇÃO </h3>
         <p align="justify"> 17, 24/JUNHO e 01, 08/JULHO/2023– Aulas aos Sábados<br> 
          HORÁRIO: 8h30 as 13h </p>

         <h3> CERTIFICAÇÃO </h3>
         <p align="justify">A Faculdade CDL concederá certificação de conclusão para os participantes com frequência mínima de 75% às aulas, que realizarem as atividades solicitadas pelo facilitador, dentro dos critérios estabelecidos por ele, durante o desenvolvimento do curso.</p>

      </div>


   
    <div class="card" id="card">
        <div class="card-front">
            <center><img class="img_card_01" src="img/grafico.gif" width="270px" height="200px"></center>
         
            <p class="data_evento01"><b>17 JUN > 08 JUL</b> </p>
            <p class="nome_evento01"> <b>POWER BI NA PRÁTICA</b></p>
            <p class="local_evento01"> Faculdade CDL </p>

            <center><input class="botao_evento01" type="submit" value="GARANTA JÁ O SEU INGRESSO!" onclick="rotateCard()"></center> 
        </div>
        <div class="card-back">
            <img class="img_card_02" src="img/qrCode_powerBI.png">
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