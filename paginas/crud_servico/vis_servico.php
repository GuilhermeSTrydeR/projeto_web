<?php

$vItem = Servico::get_Servicos();

?>

<div id="tbl_vis_produto">
  <table class="table table-striped">

    <thead>
      <tr class="table-primary">
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Previsao</th>
        <th scope="col">Finalizado?</th>
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
                <?= $objItem->previsao ?>
              </td>
              <td class='align-middle'>
                <?= $objItem->finalizado ?>
              </td>

            </tr>

          <?php
          }
          ?>

        </tbody>
      </table>

    </div>
</div>