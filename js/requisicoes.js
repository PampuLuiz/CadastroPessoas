$(document).ready(function () {
    $('#btn-salvar-pessoa').click(function (e) {
        e.preventDefault();

        if ($('#nome').val() == '' || $('#email').val() == '' || $('#dtNascimento').val() == '') {
            alert("Todos campos devem ser preenchidos");
        } else {

            var dados = $('#cadastrar-pessoa').serialize();

            $.ajax({
                method: 'POST',
                dataType: 'json',
                url: 'adciona-pessoa.php',
                async: true,
                data: dados
            });

            location.reload();
            alert("Cadastrado");
        }
    });

});
