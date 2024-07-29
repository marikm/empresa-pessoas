
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
    <title>.:Lista de Pessoas:.</title>

    <?php
        try{
            require_once("./conexao/conexao.php");
            $pesquisa = $_POST['busca'] ?? "";
            echo $pesquisa;
            $sql = "SELECT * FROM pessoas WHERE nomePessoa LIKE '%$pesquisa%'";
    
            $dados = $conn->query($sql);
            
            $matrizDados = $dados->fetchAll();
            $totalRegistros = $dados->rowCount();
            
            // foreach($matrizDados as $linha){ // imprimindo conteudo do array
            //   print_r($linha);
            // }

        } catch (PDOException $e) {
            echo "não executou sql para buscar pesquisa no bd";
        }    
    ?>

    <body>
        <div class="container pink lighten-5">

          <h1>Pesquisar</h1>
              <form class="" action="pesquisa.php"  method="POST" >
                <div class="container">
                  <div class="row">
                    <div class="col s12">
                      <div class="row valign-wrapper">
                        <div class="input-field col s6">
                          <input id="search" type="search" name="busca" autofocus/>
                          <label class="label-icon" for="search">Digite o nome da pessoa para pesquisar</label>
                        </div>
                        <div class="col s3">
                          <button type="submit" class="btn waves-effect waves-light"><i class="material-icons right">search</i>Pesquisar
                          </button>
                        </div>
                        <div class="col s3">
                              <a href="pessoas.php" class="btn waves-effect waves-light">Cadastrar</a>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </form>
          <table>
            <thead>
              <tr>
                  <th>Nome</th>
                  <th>Endereço</th>
                  <th>Telefone</th>
                  <th>Email</th>
                  <th>Data nascimento</th>
                  <th>Funçoes</th>
              </tr>
            </thead>

            <tbody>
              <?php
                if($totalRegistros > 0) {
                  foreach($matrizDados as $linha){
              ?>
              <tr>
                <td><?=$linha['nomePessoa'];?></td>
                <td><?=$linha['endereco'];?></td>
                <td><?=$linha['telefone'];?></td>
                <td><?=$linha['email'];?></td>
                <td><?=mostrarData($linha['dataNascimento']);?></td>
                <td class="">
                  <a href="editarPessoa.php?id=<?=$linha['id'];?>" class="btn waves-effect waves-light ">Editar</a>
                  <a href="#" class="btn waves-effect red lighten-1">Excluir</a>
                </td>
                
              
              </tr>
              <?php
                  }
                }
              ?>

            </tbody>
          </table>
        </div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>