
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
        <div class="container">

            <h1>Pesquisar</h1>

            <nav>
                <div class="nav-wrapper">
                <form class="" action="pesquisa.php"  method="POST" >
                    <div class="input-field">
                    <input id="search" type="search" name="busca"/>
                    <!-- <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i> -->
                    <label class="label-icon" for="search"><button class="btn waves-effect waves-light right" type="submit">Pesquisar
                    <i class="material-icons left">search</i></label>
                  </button>
                    </div>
                </form>
                </div>
            </nav>

            <table>
        <thead>
          <tr>
              <th>Nome</th>
              <th>Endereço</th>
              <th>Telefone</th>
              <th>Email</th>
              <th>Data nascimento</th>
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
            <td><?=$linha['dataNascimento'];?></td>
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