<div class="form-group">
  <label for="nome">*Nome</label>
  <input type="Nome" name="nome" class="form-control" id="nome" placeholder="Nome" value="<?=$pessoa->getNome()?>" require>
</div>
<div class="form-group">
  <label for="email">*Endereço de e-mail</label>
  <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" value="<?=$pessoa->getEmail()?>" require>
</div>
<div class="form-group">
  <label for="dt-nascimento">*Data de nascimento</label>
  <input class="form-control" name="dtNascimento" type="date" id="dtNascimento" value="<?=$pessoa->getDtNascimento()?>" require>
</div>