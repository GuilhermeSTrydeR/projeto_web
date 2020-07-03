<div class="row">
    <div class="col">

    <?php

      if(isset($_POST['nome'])){

        $objServico = new Servico(
          NULL,
          $_POST['nome'],
          $_POST['descricao'],
          $_POST['previsao'],
          $_POST['finalizado'], 
        );

        if( $objServico->salvar() ){

      ?>

      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Serviço cadastrado com sucesso!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <center>
        <a href="?pagina=inicio" class="btn btn-primary">&nbsp; Voltar para Início &nbsp;</a>
        <a href="?pagina=servico" class="btn btn-primary">Voltar para registrar outro serviço</a>
      </center>

      <?php
        }
        else{
      ?>

      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Erro ao enviar formulário! Por favor, tente novamente!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <center>
        <a href="?pagina=produto" class="btn btn-primary">Voltar para Produto</a>
      </center>

      <?php

        }

      }
      else{
        
        header("Location: ?pagina=inicio");

      }

    ?>

  </div>
</div>