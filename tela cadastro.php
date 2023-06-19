<html lang="en"> 

<head> 

    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>Cadastrar Cliente</title> 
</head>

<body> 

  <div id="content"> 
      <div class="logo">
        <img src="aaaa.png">    
     </div>

      <form name="form" enctype='multipart/form-data' method="post" action="inserecliente.php"> 
          <div class="blocoesq">
            <div class="form-row"> 
                  <div class="form-group col-md-6"> 
                    <label for="inputName"></label> 
                    <input type="text" class="name" name="nome" id="name" placeholder="  Nome" required maxlength="60">
                    <span role="alert" id="name" aria-hidden="true"> Please enter First Name </span>
                  </div> 

                  <div class="form-group col-md-6"> 
                      <label for="inputAddress"></label> 
                      <input type="text" class="name" name="endereco" id="endereco" aria-label="Endereço" placeholder="  Endereço" required maxlength="150"> 
                  </div> 
                </div> 

                <div class="form-group"> 
                  <label for="inputTelephone"></label> 
                  <input type="text" class="name" name="telefone" id="telefone" placeholder="  Telefone" required max="11"> 
                </div> 
          </div>

          <div class="blocodir"> 
            <div class="form-group"> 
              <label for="inputEmail"></label> 
              <input type="email" class="name1" name="email" id="email" placeholder="  Email" required maxlength="60"> 
            </div> 

            <div class="form-row"> 
              <div class="form-group col-md-6"> 
                <label for="inputPassword"></label> 
                <input type="password" class="name1" name="senha" id="senha" aria-label="Senha" placeholder="  Senha"> 
              </div> 

              <div class="form-row"> 
                <div class="form-group col-md-6"> 
                  <label for="inputPassword2"></label> 
                  <input type="password" class="name1" id="confirmsenha" aria-label="confirmar senha" placeholder="  Confirme sua senha"> 
                </div> 
              </div>

            <div class="form-group"> 
              <div class="form-check"> 
                <input class="form-check-input" type="checkbox" id="gridCheck"> 
                <label class="check" for="gridCheck"> 
                    Mantenha-me conectado
                </label> 
              </div> 
            </div> 
            
            <button class="button" type="submit" location.href="login.html"> Cadastrar</button> 
          </div>
        </div>
      </form> 
        
  </div>
</body> 

</html> 