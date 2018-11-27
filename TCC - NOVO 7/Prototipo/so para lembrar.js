
$(document).ready(function(){
    resultado();
});

function resultado(){
    $('#print-result').click(function () {
        var tijolo = $('#tijolo').text();
        var azulejo = $('#azulejo').text();
        var largura = $('#metrosLarg').text();
        var comprimento = $('#metrosCompr').text();
        $.ajax({
            url:'apc.php',
            type:'POST',
            data:{tijolo:tijolo,azulejo:azulejo,largura:largura,comprimento:comprimento},
            success: function (data) {
                $('.resultado').html(data);
                $('#salvar-hist').click(function () {
                    var qtdtijolo = $('#qtd_tijolo').text();
                    var qtdazulejo = $('#qtd_azulejo').text();
                    var qtdlargura = $('#qtd_metrosLarg').text();
                    var qtdcomprimento = $('#metrosCompr').text();
                    $.ajax({
                        url:'salvar.php',
                        type: 'POST',
                        data:{},
                    })
                });
            }
        });
    });
}