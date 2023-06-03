<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo_faculdade.png"> 
   <title>Eventos Disponíveis</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style_user_page.css">

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


   <div class="ola">
      <h1>Olá, <span style="color:#3e4095;"><?php echo $_SESSION['user_name'] ?></span></h1>
   </div>

   <div class="apresentacao"> 
      <h3 class="texto"> Aqui você pode ver os eventos disponíveis </h4>
   </div>


   <div class="eventos_disponiveis"> 



      <div class="card_01"> 
         <center><img class="img_card_01" src="img/img_01.jpg" width="270px" height="200px"></center>
         
         <p class="data_evento01"><b>17 JUN > 08 JUL</b> </p>

         <p class="nome_evento01"> <b>POWER BI NA PRÁTICA</b></p>
         <p class="local_evento01"> Faculdade CDL </p>

         <center><input class="botao_evento01" type="submit" value="Saiba mais" onclick="location.href='evento01.php'"></center> 

      </div>






      <div class="card_02"> 
         <center><img class="img_card_02" src="img/img_06.jpg" width="270px" height="200px"></center>

         <p class="data_evento02"><b>04 JUL > 27 JUL </b> </p>
         <p class="nome_evento02"> <b>JORNADA NO EXCEL</b></p>
         <p class="local_evento02"> Faculdade CDL </p>


         <center><input class="botao_evento02" type="submit" value="Saiba mais" onclick="location.href='evento02.php'"></center> 

      </div>





      <div class="card_03"> 
         <center><img class="img_card_03" src="img/img_05.jpg" width="270px" height="200px"></center>

         <p class="data_evento03"><b>11 JUL > 23 JUL </b> </p>

         <p class="nome_evento02"> <b>NEUROVENDAS</b></p>
         <p class="local_evento02"> Faculdade CDL </p>

          <center><input class="botao_evento03" type="submit" value="Saiba mais" onclick="location.href='evento03.php'"></center> 
      </div>


      <div class="card_04"> 
         <center><img class="img_card_04" src="img/img_07.jpg" width="270px" height="200px"></center>

           <p class="data_evento04"><b>01 JUL > 22 JUL </b> </p>
           <p class="nome_evento04"> <b>TRÁFEGO PAGO PARA SEU...</p>
           <p class="local_evento04"> Faculdade CDL </p>


             <center><input class="botao_evento04" type="submit" value="Saiba mais" onclick="location.href='evento04.php'"></center>


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