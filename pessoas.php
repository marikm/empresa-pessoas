<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <div class="container #e1f5fe light-blue lighten-5 center">
            <h1>Cadastro de Pessoa</h1>
            <form action="cadastroPessoa.php" method="POST">
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s6 push-s3">
                                <input type="text" name="nomePessoa" required> <!-- para nao deixar cadastrar sem nome -->
                                <label for="nomePessoa">Nome completo</label>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s6 push-s3">
                                <input type="text" name="endereco">
                                <label for="endereco">Endereço</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s6 push-s3">
                                <input type="text" name="telefone">
                                <label for="telefone">Telefone</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s6 push-s3">
                                <input type="text" name="email">
                                <label for="email">Email</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s6 push-s3">
                                <input type="date" name="dataNascimento">
                                <label for="dataNascimento">Data Nascimento</label>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn waves-effect waves-light" type="submit">Enviar
                    <i class="material-icons right">send</i>
                  </button>
                
            </form> 

        </div>
        


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>