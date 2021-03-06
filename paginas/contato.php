
<div id="tbl_cad_contato">
    <div class="row justify-content-md-center">

        <div class="col-8">
            <h1>Contato</h1>
            <p>Preencha o formulário de contato abaixo:</p>
            <form action="?pagina=crud_contato/registrar_contato" method="POST">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" class="form-control" name="nome" required placeholder="Digite seu nome" />
                </div>
                <div id="telefone" class="form-group">
                    <label>Telefone:</label>
                    <input type="text" class="form-control telefone" name="telefone" required placeholder="Digite seu telefone" />
                </div>
                <div class="form-group">
                    <label>E-mail:</label>
                    <input type="email" class="form-control" name="email" required placeholder="Digite seu e-mail" />
                </div>
                <div class="form-group">
                    <label>Mensagem:</label>
                    <textarea name="mensagem" class="form-control" required placeholder="Digite sua mensagem..."></textarea>
                </div>
                <div class="form-button">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>