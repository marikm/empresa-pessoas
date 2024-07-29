
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
        
        $pesquisa = $_POST['busca'] ?? '';
        try{
            require_once("./conexao/conexao.php");
            $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
    
            $dados = $conn->query($sql);
            print_r($dados);

            $matrizDados = $dados->fetchAll();
            $totalRegistros = $dados->rowCount();

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
                    <input id="search" type="search" name="busca" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
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
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>


        </div>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>