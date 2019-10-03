$(document).ready(function() {
    $("#jclickform01").submit(function () {
        //variaveis locais
        var _dados = $(this).serializeArray();
        var _urlphp = $(this).attr("action");
        var _seletoralert = $(".jdplustrigger");
        var _seletorBtn = $(".jdplustrigger-btn");
        var _seletorEnviando = $(".jdplustrigger-enviando");
        var _seletorErro = $(".jdplustrigger-erro");
        var _seletorSucesso = $(".jdplustrigger-sucesso");
        
        //requisicao Ajax
        $.ajax({
            url: _urlphp,
            data: {dados: _dados},
            type: 'POST',
            dataType: 'json',
            beforeSend: function() {
                
                _seletorEnviando.fadeIn(100);
                _seletorBtn.attr('disabled', 'disabled');
                
            },
            success: function(data) {
                var _error = data.error;
                
                //esconder mensagem de enviando
                setTimeout(function(){
                    _seletorEnviando.fadeOut(0,function(){
                        //Verifica se houver erro
                        if(!_error) {
                                _seletorSucesso.fadeIn(100);
                           }else{
                                _seletorErro.fadeIn(100);
                           }
                        //esconder os tickets - seja qual fot
                        setTimeout(function(){
                            _seletoralert.fadeOut(0);
                        },3500);
                    });    
                },3500);
            }
        });
        return false;
    });
});