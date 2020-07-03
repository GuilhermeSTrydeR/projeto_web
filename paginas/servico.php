<div id="tbl_cad_contato">
    <div class="row justify-content-md-center">

        <div class="col-8">
            <h1>Serviços</h1>
            <p>Preencha o serviço abaixo:</p>
            <form action="?pagina=crud_servico/registrar_servico" method="POST">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" class="form-control" name="nome" required placeholder="Digite o nome do serviço" />
                </div>
                <div id="telefone" class="form-group">
                    <label>Descrição:</label>
                    <input type="text" class="form-control telefone" name="descricao" required placeholder="Digite a descrição do serviço" />
                </div>
                <div class="form-group">
                    <label>Previsão:</label>
                    <input type="text" class="form-control" name="previsao" required placeholder="Digite uma previsão caso há alguma" />
                </div>
                <div class="form-group">
                    <label>Finalizado?</label>
                    <input type="text" class="form-control" name="finalizado" required placeholder="o serviço ja foi efetuado?" />
                </div>
                
                <div class="form-button">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>