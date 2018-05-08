<?php include'cabeçalho.php';?>
<br><br></br><br><br></br>
<div class="container">
    <div class="panel-heading">
        <ul class="breadcrumb">
                <li><a href="index.php">Pagina Inicial</a></li>
                <li><a href="active"></a>Deixe um comentário</li>
            </ul> 
            <h3>Comentários</h3>
        </div>

        <div class="panel-body">
            <p>Insira seu comentário</p>
            <div class="text-right">
                <button class="btn btn-primary">Listar</button>
            </div>
        </div>
    

    <hr>
    <form action="insere.php">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" class="form-control" name="nome">
        </div>
        
        <div class="form-group">
            <label for="comentario">Comentário</label>
            <textarea id="comentario" rows="10" class="form-control"name="comentarios"></textarea>
        </div>
        <div class="form-group">
            <label for="Telefone">Telefone</label>
            <input type="tel" id="Telefone" class="form-control" name="Telefone">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" id="email" class="form-control" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</div>




<?php include'rodapeIndex.php';?>