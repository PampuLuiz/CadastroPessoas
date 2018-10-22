<?php require_once("cabecalho.php");
require_once("class/pessoa.php");
$pessoa = new Pessoa("", "", "", 0);
?>
<section>
  <div class="container">
    <h1>Cadastrar pessoas</h1>
    <form id="cadastrar-pessoa">
        <?php require_once("formularios/formulario-cadastro.php"); ?>
        <div>
          <button class="btn btn-primary" id="btn-salvar-pessoa" type="submit">Cadastrar</button>
        </div>
    </form>
  </div>
</section>
<?php/*
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '' ;
$dtNascimento = isset($_POST['dtNascimento']) ? $_POST['dtNascimento'] : '';

$pessoa = new Pessoa($nome, $email, $dtNascimento, 0);
*/
require_once("rodape.php");?>