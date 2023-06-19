<?php
  $adc_id = $_GET['adc_id'];

  include("conexao.php");
 
  //selecione os campos de seu produto que deseja visualizar na compra /esse limit � para mostrar de 1 a 9; 10 a 18; ...(de 9 em 9)
  $sql = "SELECT adc_id,adc_desc, adc_sexo, adc_porte, adc_raca, adc_idade,adc_foto FROM publi_adocao where adc_id ='$adc_id'";	   
   $consulta = mysqli_query($conn,$sql); //executa a consulta

echo'

<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coloque para adoção</title>
  <style>
    #content {
      background-color: white;
      text-align: center;
      font-size: 25px;
    }

    .btnseta {
      width: 4%;
      height: 7%;
      margin-top: 1%;
      margin-left: -95%;
      background-color: #4B8DA5;
      font-size: 36px;
      color: #fff;
      border: none;
      border-radius: 9px;
    }

    .logo {
      margin-left: auto;
      max-width: 250%;
      margin-top: -5%;
    }

    .name {
      font-family: Bahnschrift Light;
      font-size: 20px;
      margin-top: 2%;
      margin-left: -40%;
      border-radius: 25px;
      border-color: rgb(134, 186, 235);
      border-style: double;
      width: 35%;
      height: 10%;
      padding-left: 1%;
    }

    .btn_img {
      width: 35%;
      height: 38.3%;
      border-color: rgb(134, 186, 235);
      border-style: double;
      border-radius: 6%;
      font-family: Bahnschrift Light;
      font-size: 100%;
      margin-top: -47.7%;
      margin-left: 45%;
      overflow: hidden;
      position: relative;
    }

    .ebxaln {
      margin-top: 15%;
      width: 100%;
    }

    .ebx {
      font-family: Bahnschrift Light;
      font-size: 20px;
      margin-top: -41.8%;
      margin-left: 45%; 
      border-radius: 25px;
      border-color: rgb(134, 186, 235);
      border-style: double;
      width: 35%;
      height: 10%;
    }

    .tlf {
      font-family: Bahnschrift Light;
      font-size: 20px;
      margin-top: -49.9%;
      margin-left: 45%; 
      border-radius: 25px;
      border-color: rgb(134, 186, 235);
      border-style: double;
      width: 35%;
      height: 10%;
    }

    .button {
      width: 15%;
      height: 9%;
      background: #ED7E32;
      border-radius: 40px;
      margin-left: auto;
      margin-top: -43%;
      border: none;
      font-family: Bahnschrift Light;
      font-size: 25px;
      color: #ffffff;
    }

    form {
      margin-top: 2%;
      margin-left: 150px;
      font-family: arial;
      line-height: 40px;
      font-weight: bold;
      width: 500px;
      height: 130px;
    }

  

  </style>
</head>
<body>
';
?>

<div id="content">
    <button class="btnseta" onclick="location.href='telaentrada.php'" type="button">⟵</button>
    <div class="logo">
      <img src="aaaa.png">
    </div>
    
<?php

while($campo = mysqli_fetch_array($consulta)){
  //converção do campo sexo
  $varr;
  if ($campo['adc_sexo'] == 0) {
      $varr= "Macho";
  } elseif ($campo['adc_sexo'] == 1) {
      $varr="Fêmea";
  }
        

    
    echo '
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputName"></label>
        <input class="name" type="text" id="porte" aria-label="   Porte" value=" '.$campo["adc_porte"].'" readonly>
      </div>

      <div class="form-group col-md-6">
        <label for="inputEmail"></label>
        <input type="text" class="name" id="raca" aria-label="Raça" value=" '.$campo["adc_raca"].'" readonly>
      </div>


    <div class="form-group col-md-6">
        <label for="inputEmail"></label>
        <input type="text" class="name" id="sexo" aria-label="Sexo" value="'.$varr.'" readonly>
      </div>
    </div>

    <div class="form-group">
      <label for="inputTelephone"></label>
      <input type="text" class="name" id="Idade" value=" '.$campo["adc_idade"].'" readonly>
    </div>

    <div class="form-group">
      <label for="inputTelephone"></label>
    </div>

    <div class="form-group">
      <label for="inputTelephone"></label>
      <input type="textarea" class="name" id="Idade" value=" '.$campo["adc_desc"].'" readonly> 
    </div>
  <div class="ebxaln">
    <div class="form-group">
      <button class="btn_img"  type="sobmit"><img src=./fotos/'.$campo["adc_foto"].' style="width:100%"></button>
    </div>  
  </div>      
  <div class="ebxaln">
    <div class="form-group">
      <label for="inputTelephone"></label>
      <input type="text" class="ebx" id="Idade" placeholder="  Nome do Dono" readonly>
  </div>
  <div class="ebxaln">
    <div class="form-group">
      <label for="inputTelephone"></label>
      <input type="text" class="tlf" id="Idade" placeholder="  Telefone" readonly>
    </div>
  </div>

</div>
'; 
}
    echo'<button class="button">Adotar</button>';
?>  
</body>
</html>

