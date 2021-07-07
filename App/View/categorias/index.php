<div class="categorias-container">
<div style="display: flex; align-items: center; justify-content: center; gap: 10px;margin-bottom: 20px;">
        <h1 style="margin: 0;">Lista de categorias</h1>
        <button id="addCategoria" style="border-radius: 50%;">+</button>
    </div>
        <?php
        if (count($dados) == 0) {
          echo "<center>Nenhuma categoria cadastrada</center>";
        }
        foreach ($dados as $categoria) {
        ?>
          <div class="card-categorias">
            <?= $categoria->descricao ?>
            <div>
            <img onclick="deletarCategoria(<?= $categoria->id ?>)" src="/imgs/close-cross.png" />
            <img onclick="editarCategoria(<?= $categoria->id ?>)" src="/imgs/editar-arquivo.png" />
            </div>
          </div>
        <?php
        }
        ?>
</div>
<script>
    document.querySelector("#addCategoria").addEventListener("click", () => {
        window.location = "/categorias/create";
    });

    function deletarCategoria(id){
      window.location = `/categorias/destroy/${id}`;
    }

    function editarCategoria(id){
      window.location = `/categorias/edit/${id}`;
    }
</script>