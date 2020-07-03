<?php

$vItem = Produto::get_Produtos();

?>

<div id="tbl_vis_produto">
  <table class="table table-striped">

    <thead>
      <tr class="table-primary">
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Categoria</th>
        <th scope="col">Preço</th>
      </tr>
    </thead>
        <tbody>
        
          <?php
          foreach ($vItem as $objItem) {
          ?>

            <tr>

              <td class='align-middle'>
                <?= $objItem->id ?>
              </td>
              <td class='align-middle'>
                <?= $objItem->nome ?>
              </td>
              <td class='align-middle'>
                <?= $objItem->descricao ?>
              </td>
              <td class='align-middle'>
                <?= $objItem->categoria ?>
              </td>
              <td class='align-middle'>
                <?= $objItem->preco ?>
              </td>

            </tr>

          <?php
          }
          ?>

        </tbody>
      </table>

    </div>
</div>