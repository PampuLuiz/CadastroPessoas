$(document).ready(function () {
    $('#btn-salvar-pessoa').click(function (e) {
        e.preventDefault();

        if ($('#nome').val() == '' || $('#email').val() == '' || $('#dtNascimento').val() == '') {
            alert("Todos campos devem ser preenchidos");
        } else {
            CadastraPessoa();
        }
    });

});

function CadastraPessoa() {
    var dados = $('#cadastrar-pessoa').serialize();

    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: 'adciona-pessoa.php',
        async: true,
        data: dados
    }).done(function () {
        location.replace("http://localhost/teste-it4acio/listar-pessoas.php")
    });
}