
            <div class="row justify-content-md-center">

                
                <form action="?pagina=crud_produto/registrar_produto" method="POST">
                <h1>Cadastrar Produto</h1>
                <p>Preencha o campo abaixo com as informações do produto:</p>
                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text" class="form-control" name="nome" required placeholder="Digite o nome do produto" />
                    </div>
                    <div id="telefone" class="form-group">
                        <label>Descrição:</label>
                        <input type="text" class="form-control telefone" name="descricao" required placeholder="Digite a descrição do produto" />
                    </div>
                    <div class="form-group">
                        <label>Preço:</label>
                        <input type="float" class="form-control" name="preco" required placeholder="Digite o preço do produto" />
                    </div>
                    <div class="form-button">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>

