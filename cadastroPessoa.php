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
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $nomePessoa = filter_input(INPUT_POST, "nomePessoa", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $endereco = filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $telefone = filter_input(INPUT_POST, "telefone", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $dataNascimento = filter_input(INPUT_POST, "dataNascimento", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
                try{
                    require_once("./conexao/conexao.php");
                    $sql = $conn -> prepare("INSERT INTO pessoas 
                                    (nomePessoa, 
                                    endereco, 
                                    telefone, 
                                    email, 
                                    dataNascimento)

                                    VALUES (
                                    :nomePessoa, 
                                    :endereco, 
                                    :telefone, 
                                    :email, 
                                    :dataNascimento)");

                    $sql-> execute(array(
                        ":nomePessoa" => $nomePessoa,
                        ":endereco" => $endereco, 
                        ":telefone" => $telefone, 
                        ":email"=> $email, 
                        ":dataNascimento" => $dataNascimento 
                    ));

                    mensagem("$nomePessoa foi cadastrado(a) com sucesso");


                }catch(PDOException $e){
                    
                    echo("Não foi possivel inserir dados ao bd remoto");
                }

            }
            else{
                echo("Não foi possivel capturar os dados do formulario");
            }

            ?>
            

        </div>
        


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>