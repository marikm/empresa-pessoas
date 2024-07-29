<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.7-beta.0/inputmask.min.js"></script>
    </head>

    <?php
        try {
            require_once("./conexao/conexao.php");
    
            $id = $_GET['id'];
            $sql = $conn->prepare("SELEECT * FROM pessoas WHERE id = :id");

            $sql->execute(array(":id" => $id));


        } catch(PDOException $e) {
            echo "Não foi possivel selecionar a linha referente ao id selecionado";
        }
    ?>

    <body>
        <div class="container #e1f5fe light-blue lighten-5 center">
            <h1>Editar cadastro de Pessoa</h1>
            <form action="editarPessoaIns.php" method="POST">
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
                                <input type="text" name="telefone" placeholder="(00) 00000-0000'">
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
                                <input type="text" id="dataNascimento" placeholder="dd/mm/yyyy" name="dataNascimento">
                                <label for="dataNascimento">Data Nascimento</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <button class="btn waves-effect waves-light" type="submit">Enviar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                    <div class="col s6">
                        <a href="pesquisa.php" class="btn waves-effect waves-light">Voltar</a>
                    </div>
                </div>
                
                
            </form> 

        </div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
      <script>
            $('#dataNascimento').mask('00/00/0000');
            $('#telefone').mask('(00) 00000-0000');
      </script>
      
    </body>
  </html>