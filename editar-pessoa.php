<?php 
require_once("cabecalho.php");
require_once("controler-pessoa.php");

$id = $_POST['idPessoa'];
$pessoa = buscaPessoa($conexao, $id);

?>
<section>
<div class="container">
    <h1>Editar pessoa</h1>
    <form action="altera-pessoa.php" method="post">
      <input type="hidden" name="id" value="<?=$id?>">
      <?php require_once("formularios/formulario-cadastro.php"); ?>
      <div>
        <button type="submit" class="btn btn-primary">Alterar</button>
      </div>
    </form>
</section>
<?php
require_once("rodape.php");?>