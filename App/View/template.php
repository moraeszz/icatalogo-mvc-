


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/styles-global.css" />
  <link rel="stylesheet" href="/css/produtos.css" />
  <link rel="stylesheet" href="/css/header.css"/>
  <link rel="stylesheet" href="/css/categorias.css" />
  <title>Administrar Produtos</title>
</head>

<body>
  <?php
  include("../App/View/header.php");
  ?>
  <div class="content">
    <section class="produtos-container">
      <?php
      //autorização

      //se o usuário estiver logado, mostrar os botões
      if (isset($_SESSION["usuarioId"])) {
      ?>
        <header>
          <button onclick="javascript:window.location.href ='./novo/'">Novo Produto</button>
          <button onclick="javascript:window.location.href ='../categorias/'">Adicionar Categoria</button>
        </header>
      <?php
      }
      ?>
      <main>

        <?php require_once "../App/View/" . $view . ".php"; ?>
        </main>
    </section>
  </div>
  <footer>
    SENAI 2021 - Todos os direitos reservados
  </footer>
  <script lang="javascript">
    function deletar(produtoId) {
      if (confirm("Tem certeza que deseja deletar este produto?")) {
        document.querySelector("#produtoId").value = produtoId;
        document.querySelector("#formDeletar").submit();
      }
    }
  </script>
</body>

</html>