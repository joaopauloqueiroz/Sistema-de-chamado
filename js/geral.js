$(function () {
    $('#file').change(function() {
         $('.nomeArquivo').html('<b>Nome: </b>' + $(this).val());
    });
});