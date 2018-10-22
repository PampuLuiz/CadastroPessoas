<?php 
require_once("cabecalho.php");
require_once("controler-dependente.php");
require_once("class/dependente.php");

$id = $_POST['idDependente'];
$idPessoa = $_POST['idPessoa'];
$dependente = buscaDependente($conexao, $id);

?>
<section>
<div class="container">
    <h1>Editar dependente</h1>
    <form action="altera-dependente.php" method="post">
      <input type="hidden" name="id" value="<?= $id ?>">
      <input type="hidden" name="idPessoa" value="<?= $idPessoa ?>">
      <?php require_once("formularios/formulario-dependente-preenchido.php"); ?>
      <div>
        <button type="submit" class="btn btn-primary">Alterar</button>
      </div>
    </form>
</section>
<?php
require_once("rodape.php");?>