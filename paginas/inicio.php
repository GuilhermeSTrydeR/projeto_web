<div class="row justify-content-md-center">

    <div class="col-8">
        <h1>Cadastro de Usuarios</h1>
        <p>Preencha o Cadastro do Usuario abaixo:</p>
        <form action="?pagina=crud_contato/registrar_contato" method="POST">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" class="form-control nome" name="nome" required placeholder="Nome" />
            </div>
            <div class="form-group">
                <label>Descrição:</label>
                <input type="text" class="form-control descricao" name="descricao" required placeholder="Descrição">
            <br>
            <div class="form-group">
                <label>E-mail:</label>
                <input type="text" class="form-control e-mail" name="email" required placeholder="E-mail">
            <br>
            <div class="form-group">
                <label>Telefone:</label>
                <input type="text" class="form-control telefone" name="telefone" required placeholder="Telefone">
            <br>
            <div class="form-button">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</div>