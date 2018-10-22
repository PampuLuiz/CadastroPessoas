<div class="form-group">
  <label for="nome">*Nome</label>
  <input type="Nome" name="nome" class="form-control" id="nome" placeholder="Nome" value="<?=$dependente->getNome()?>" require>
</div>
<div class="form-group">
  <label for="dt-nascimento">*Data de nascimento</label>
  <input class="form-control" name="dtNascimento" type="date" id="dtNascimento" value="<?=$dependente->getDtNascimento()?>" require>
</div>
<div class="form-group">
  <label for="relacao">*Relação</label>
  <input type="relacao" name="relacao" class="form-control" id="relacao" placeholder="Relacao" value="<?=$dependente->getRelacao()?>" require>
</div>