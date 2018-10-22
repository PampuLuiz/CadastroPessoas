<?php
require_once("cabecalho.php");
require_once("class/Pessoa.php");
require_once("conecta.php");
require_once("controler-pessoa.php");
?>
<section id="listar-pessoas" class="container">
<div class="row">
  <h1>Listagem de pessoas</h1>
</div>
<div class="row">
  <?php
  $pessoas = listapessoas($conexao);
  if(count($pessoas) > 0){?>
    <table class="table table-striped">
      <thead class="table-primary">
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Data de nascimento</th>
          <th class="text-center" scope="col">Dependentes</th>
          <th class="text-center" scope="col">Editar</th>
          <th class="text-center" scope="col">Excluir</th>
        </tr>
      </thead>
      <tbody>
      <?php
      foreach ($pessoas as $pessoa) { 
      ?>
          <tr>
            <td><?= $pessoa->getNome() ?></td>
            <td><?= $pessoa->getEmail() ?></td>
            <td><?= date('d/m/Y', strtotime($pessoa->getDtNascimento())) ?></td>
            <td>
              <form class="text-center" action="cadastro-dependentes.php" method="post">
                <input type="hidden" name="idPessoa" value="<?=$pessoa->getId()?>">
                <?= $pessoa->getQtdDependentes() ?>
                <button type="submit" class="btn btn-outline-primary">
                  <i class="fas fa-user-edit"></i>
                </button>
              </form>
            </td>
            <td>
              <form class="text-center" action="editar-pessoa.php" method="post">
                <input type="hidden" name="idPessoa" value="<?=$pessoa->getId()?>">
                <button type="submit" class="btn btn-outline-info">
                  <i class="far fa-edit"></i>
                </button>
              </form>
              </a>
            </td>
            <td>
              <form class="text-center" action="excluir-pessoa.php" method="post">
                <input type="hidden" name="idPessoa" value="<?=$pessoa->getId()?>">
                <button type="submit" class="btn btn-outline-danger">
                  <i class="far fa-trash-alt"></i>
                </button>
              </form>
            </td>
          </tr>
          <?php
      }?>
      </tbody>
    </table>
  <?php
  }else{
    echo "<h3>Nenhuma pessoa cadastrada</h3>";
  }
  ?>
</div>
</section>
<?php require_once("rodape.php");?>