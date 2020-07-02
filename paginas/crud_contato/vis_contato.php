<?php

$vItem = Contato::get_Contatos();

?>

<div id="tbl_vis_contato">
  <table class="table table-striped">
    <thead>
      <tr class="table-primary">
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">telefone</th>
        <th scope="col">E-mail</th>
        <th scope="col">Mensagem</th>
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
                <?= $objItem->telefone ?>
              </td>
              <td class='align-middle'>
                <?= $objItem->email ?>
              </td>
              <td class='align-middle'>
                <?= $objItem->mensagem ?>
              </td>

            </tr>

          <?php
          }
          ?>

        </tbody>
      </table>

    </div>
</div>