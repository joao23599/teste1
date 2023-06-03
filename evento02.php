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
    <title>Jornada no Excel</title>
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

 <center><h1>JORNADA NO EXCEL</h1></center>

 <div id="card_grande">

         <p align="justify"> Por ser uma das ferramentas mais versáteis da Microsoft, aprender Excel irá permitir que você, sua empresa simplifique processos, automatizando e otimizando as análises de dados com rapidez e agilidade. Independente da sua área de atuação. Se você deseja iniciar sua vida profissional ou crescer na sua profissão, dominar o Excel será o diferencial que você precisa. </p>


         <h3> CONTEÚDO PROGRAMÁTICO </h3>

         <p align="justify">

         Nível 1- INICIANTE <br><br> 

          • O que é planilha<br> 
          • Conhecer o ambiente de trabalho<br> 
          • Mover-se entre células e planilhas<br> 
          • Gerenciar planilhas na pasta de trabalho (inserir, excluir, ocultar, reexibir, copiar, mover)<br> 
          • Criar e salvar planilha utilizando formatações básicas<br> 
          • Incluir e excluir linhas, colunas e células, ocultar e reexibir linhas e colunas<br> 
          • Copiar, colar, desfazer e refazer<br> 
          • Formatar como tabela<br> 
          • Formatação condicional<br> 
          • Modos de visualização, zoom, cabeçalho e rodapé<br> 
          • Configurar impressão<br> 
          • Criar fórmulas<br> 
          • Usar funções com e sem argumentos (soma, média, máximo, mínimo, mult, subtotal, maior, menor, hoje, agora etc.)<br> 
          • Cálculos com percentuais %<br> 
          • Referências relativas e absolutas<br> 
          • Cálculos entre planilhas<br> 
          • Classificar e filtrar<br> 
          • Criar e formatar Gráficos e minigráficos<br><br>

          CARGA HORÁRIA: 12 h/a<br>

          PERÍODO DE REALIZAÇÃO: 02 a 06/julho (2ª a 5ª feira)<br> 

          HORÁRIO: 18h30 as 21h30<br><br> 

          Nível 2 | INTERMEDIÁRIO<br><br> 

          
          • Filtro avançado<br> 
          • Campo calculado no filtro avançado<br> 
          • Subtotal na estrutura de tópicos<br> 
          • Congelar painéis<br> 
          • Validar dados<br> 
          • Proteger planilhas e arquivos<br> 
          • Gerenciador de Nomes<br> 
          • Funções estatísticas de contagem (cont.núm, cont.valores, contar.vazio)<br> 
          • Funções estatísticas condicionais (cont.se, cont.ses, médiase, médiases, máximoses, mínimoses)<br> 
          • Funções matemáticas (somase, somases, somarproduto)<br> 
          • Funções financeiras (Vf, Vp, Pgto, Nper, TaxaJuro)<br> 
          • Auditoria de fórmulas: rastrear precedentes e dependentes, rastrear erros em fórmulas, avaliar fórmulas<br> 
          • Localizar e substituir<br><br> 

          CARGA HORÁRIA: 12 h/a<br>

          PERÍODO DE REALIZAÇÃO: 10 a 13/julho (2ª a 5ª feira)<br>

          HORÁRIO: 18h30 as 21h30<br><br> 

          Nível 3 | Avançado<br><br>

          • Testes de hipóteses: Cenários, atingir meta, solver<br>
          • Função de banco de dados (BDContar, BDContara, BDExtrair, BDMáx, BDMín, BDMédia, BDSoma)<br>
          • Importação de dados para o Excel: arquivo de texto, tabela do Access<br>
          • Funções Lógicas (Se, E, Ou, SeErro, Ses)<br>
          • Funções de Pesquisas (ProcV, ProcH, Corresp, Índice, ProcX, CorrespX)<br>
          • Funções de texto: Arrumar, Direita, Esquerda, Ext.Texto, Maiúscula, Minúscula.<br><br>

          CARGA HORÁRIA: 12 h/a<br> 

          PERÍODO DE REALIZAÇÃO: 17 a 20/julho (2ª a 5ª feira)<br> 

          HORÁRIO: 18h30 as 21h30<br><br>

          Nível 4 | Nível Max Avançado<br><br>

          • Fórmulas e funções para cálculos com data e hora (Ano, Mês, Dia, Dia.da.Semana, DiaTrabalho.Intl, DiaTrabalhoTotal.Intl<br>
          • Tabela dinâmica<br>
          • Gráficos dinâmicos e Dashboards<br>
          • Macros de gravação, segurança de macros<br>
          • Botões associado a macro<br>
          • Formulários<br>
          • Macro com uso de editor VBA<br>
          • Macro de funções<br>
          • Criações de formulários de busca

          <h3> FORMATO </h3>

          <p align="justify"> As aulas serão presenciais realizadas no LABORATÓRIO DE INFORMÁTICA da Faculdade CDL, um aluno por máquina, sempre praticando o que é apresentado de conteúdo programático pela instrutoria. </p>

          <h3> BÔNUS </h3>

          <p align="justify"> Ao final de cada nível será disponibilizado atividade de revisão com objetivo do aluno exercitar o que foi ensinado, sendo disponibilizado em momento posterior vídeo com a resolução.</p>

          <h3> CARGA HORÁRIA TOTAL </h3>

          <p align="justify"> 48 h/a </p>

          <h3> FACILITADORA </h3>

          <p align="justify"> Aeicha Roldan, graduada em Processamento de Dados pela Faculdade de Ciências Tecnológicas de Fortaleza. Especialista em Processos Educacionais. Ampla experiência como tutora. Licenciatura plena em matemática através do Programa Especial de Formação Pedagógica. Facilitadora de treinamentos de informática pela Faculdade CDL, dentre outras instituições. </p>

          <h3> CERTIFICAÇÃO </h3>

          <p align="justify"> A Faculdade CDL concederá certificação de conclusão para os participantes com frequência mínima de 75% às aulas, que realizarem as atividades solicitadas pela facilitadora, dentro dos critérios estabelecidos por ela, durante o desenvolvimento do curso. </p>
      </div>


   
    <div class="card" id="card">
        <div class="card-front">
            <center><img class="img_card_01" src="img/excel.gif" width="270px" height="200px"></center>
         
        <p class="data_evento01"><b>04 JUL > 27 JUL</b> </p>

         <p class="nome_evento01"> <b>JORNADA NO EXCEL</b></p>
         <p class="local_evento01"> Faculdade CDL </p>

            <center><input class="botao_evento01" type="submit" value="GARANTA JÁ O SEU INGRESSO!" onclick="rotateCard()"></center> 
        </div>
        <div class="card-back">
            <img class="img_card_02" src="img/qrCode_jornadaExcel.png">
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

