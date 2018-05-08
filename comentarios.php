<?php include'cabeçalho.php';

include 'conexao.php';
$resultado = $conexao->query("SELECT *FROM comentarios");
$comentarios = $resultado->fetch_all(MYSQLI_ASSOC);

?>
<br><br></br><br><br></br>

<div class="container">
<ul class="breadcrumb">
                <li><a href="index.php">Pagina Inicial</a></li>
                <li><a href="active"></a>Deixe um comentário</li>
            </ul> 
    <div class="panel panel-default">
        <div class="panel-heading"><h3>Comentários</h3></div>
        <div class="panel-body">
            <p>Todos os comentários sobre o site</p>
            <div class="text-right">
                <a href="formulario.php" role="button" class="btn btn-primary">Inserir</a>
            </div>
        </div>
        <table class="table table-bordered table-striped table-condensed table-responsive">
        <thead>
            <tr>
                <th class="text-center">id</th>
                
                <th class="text-center">Nome</th>
                <th class="text-center">Comentários</th>
                <th class="text-center">Telefone</th>
                <th class="text-center">email</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($comentarios as $linha){?>
            <tr>
                <td><?php echo $linha["id"]?></td>
                
                <td><?php echo $linha["nome"]?></td>
                <td><?php echo $linha["comentarios"]?></td>
                <td><?php echo $linha["Telefone"]?></td>
                <td><?php echo $linha["email"]?></td>
            </tr>
            <?php }?>
           
        </tbody>
    </table>
    </div>
</div>

<?php include'rodapeIndex.php';?>