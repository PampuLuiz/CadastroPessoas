<?php require_once("cabecalho.php");
require_once("class/Dependente.php");
require_once("controler-dependente.php");
require_once("controler-pessoa.php");

$idPessoa = isset($_POST['idPessoa']) ? $_POST['idPessoa'] : $_GET['idPessoa'];
$pessoa = buscaPessoa($conexao,$idPessoa);

$dependentes = listadependentes($conexao,$idPessoa);
$qtdDependentes = count($dependentes);
atualizaQtdDependentes($conexao, $pessoa, $qtdDependentes);

?>
<div class="container">
    <div class="row">
    <h1>Dependentes de <?= $pessoa->getNome() ?></h1>
  </div>
    <?php  if( $qtdDependentes == 0){ ?>
            <br>
            <h4>Nenhum dependente cadastrado</h4>
            <br>
    <?php }
    
    if($qtdDependentes <= 3 && $qtdDependentes > 0){
        require_once("listar-dependentes.php"); 
    }
    
    if($qtdDependentes < 3 || $qtdDependentes == 0){
    ?>
        <form id="cadastrar-dependente">
            <input type="hidden" name="idPessoa" value="<?=$pessoa->getId()?>">
            <?php require_once("formularios/formulario-dependente.php"); ?>
            <button class="btn btn-primary" id="btn-salvar-dependente" type="submit">Cadastrar</button>
        </form>
        <div id="alerta" class="container"></div>
    <?php }else{ ?>
        <p>Permitido apenas 3 dependentes por pessoa.</p>
        <p>Para cadastrar um novo exclua um existente.</p>
    <?php 
    }
    ?>
</div>
<?php require_once("rodape.php");?>