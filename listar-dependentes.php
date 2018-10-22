<?php
require_once("controler-dependente.php");
require_once("controler-pessoa.php");
require_once("class/pessoa.php");

  if(true){
  ?>
  <div class="row">
    <table class="table table-striped">
      <thead class="table-primary">
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Data de nascimento</th>
          <th scope="col">Relação</th>
          <th class="text-center" scope="col">Editar</th>
          <th class="text-center" scope="col">Excluir</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($dependentes as $dependente) {
        ?>
          <tr>
            <td><?= $dependente->getNome() ?></td>
            <td><?= date('d/m/Y', strtotime($dependente->getDtNascimento())) ?></td>
            <td><?= $dependente->getRelacao() ?></td>
            <td>
              <form class="text-center" action="editar-dependente.php" method="post">
                <input type="hidden" name="idDependente" value="<?=$dependente->getId()?>">
                <input type="hidden" name="idPessoa" value="<?=$pessoa->getId()?>">
                <button type="submit" class="btn btn-outline-info">
                  <i class="far fa-edit"></i>
                </button>
              </form>
            </td>
            <td>
              <form class="text-center" action="excluir-dependente.php" method="post">
                <input type="hidden" name="idDependente" value="<?=$dependente->getId()?>">
                <input type="hidden" name="idPessoa" value="<?=$dependente->getIdPessoa()?>">
                <button type="submit" class="btn btn-outline-danger">
                  <i class="far fa-trash-alt"></i>
                </button>
              </form>
            </td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <?php
  }
  ?>