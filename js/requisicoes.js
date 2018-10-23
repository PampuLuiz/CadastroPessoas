$(document).ready(function () {
    $('#btn-salvar-pessoa').click(function (e) {
        e.preventDefault();

        if ($('#nome').val() == '' || $('#email').val() == '' || $('#dtNascimento').val() == '') {
            alert("Todos campos devem ser preenchidos");
        } else {
            CadastraPessoa();
        }
    });

    $('#btn-salvar-dependente').click(function (e) {
        e.preventDefault();
        if ($('#nome').val() == '' || $('#dtNascimento').val() == '' || $('#relacao').val() == '') {
            alert("Todos campos devem ser preenchidos");
        } else {
            CadastraDependente();
            window.location.reload();
            alerta('success', 'Dependente cadastrado');
        }
    });

    $('.btn-excluir-dependente').click(function (e) {
        e.preventDefault();

        var dados = $('#excluir-dependente').serialize();

        $.post("excluir-dependente.php", dados);
        window.location.reload();
    });

});

function CadastraPessoa() {

    var dados = $('#cadastrar-pessoa').serialize();

    $.post("adciona-pessoa.php", dados, function () {
        $('#cadastrar-pessoa').each(function () {
            this.reset();
            alerta('success', 'Pessoa cadastrada');
        });
    });
}

function CadastraDependente() {

    var dados = $('#cadastrar-dependente').serialize();

    $.post("adciona-dependente.php", dados, function () {
        
    });

}

function alerta(tipo, msg) {
    $("#alerta").attr('class', 'alert alert-'+tipo+' rounded').text(msg).fadeIn(0).delay(3000).fadeOut(3000);
}