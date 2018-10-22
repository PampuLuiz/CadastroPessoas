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
    
    $.post("adciona-pessoa.php", dados, function () {
        $('#cadastrar-pessoa').each(function () {
            this.reset();
            $("#alerta").attr('class', 'alert alert-success rounded').text("Pessoa cadastrada").fadeIn(0).delay(3000).fadeOut(3000);
        });
    });
}