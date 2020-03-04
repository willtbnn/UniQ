$(document).ready(function() {
    $("#jcontrol").submit(function () {
        //variaveis locais
        var _dados = $(this).serializeArray();
        var _urlphp = $(this).attr("action");
        var _seletoralert = $(".j_seletor");
        var _seletorBtn = $(".btn-primary");
        var _seletorEnviando = $("#j_enviando");
        var _seletorErro = $("#j_error");
        var _seletorSucesso = $("#j_sucesso");
        
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
              //variaveis locais 
                var _error = data.error;
                
                //esconder mensagem de enviando
                setTimeout(function(){
                    _seletorEnviando.fadeOut(0,function(){
                        //Verifica se houver erro
                        if(!_error) {
                                _seletorSucesso.fadeIn(1000);
                           }else{
                                _seletorErro.fadeIn(500);
                           }
                        //esconder os tickets - seja qual for
                        //setTimeout(function(){
                          //  _seletoralert.fadeOut();
                        //},5500);
                    });    
                },3500);
            }
        });
        return false;
    });
});
//selecionando div
$(function(){
    $('.construcao-1').bind('click', function(){
        $('.sombra-branca').fadeToggle();
    });
    $('.construcao-2').bind('click', function(){
        $('.sombra-branca-2').fadeToggle();
    });
    $('.construcao-3').bind('click', function(){
        $('.sombra-branca-3').fadeToggle();
    });
    $('.construcao-4').bind('click', function(){
        $('.sombra-branca-4').fadeToggle();
    });
    $('.construcao-5').bind('click', function(){
        $('.sombra-branca-5').fadeToggle();
    });
    $('.construcao-6').bind('click', function(){
        $('.sombra-branca-6').fadeToggle();
    });
});
$(function(e){
    $('.btn').click(function(){
		$('html, body').animate({scrollTop: $('#portifolio').offset().top }, 2000);
	});
    $('ul li:nth-child(1)').click(function(){
		$('html, body').animate({scrollTop: $('#quem').offset().top }, 3000);
	});
});
function ativadoSelecao(){
    if(window.location.href === 'http://localhost/uniq/planejados'/* && 'https://www.grupouniq.com.br/planejados'*/){
            document.querySelector('[href^="planejados"]' ).classList.add('ativo');
    }else if(window.location.href === 'http://localhost/uniq/moveis' /*&& 'https://www.grupouniq.com.br/moveis'*/){
            document.querySelector('[href^="moveis"]').classList.add('ativo');
    }else if(window.location.href === 'http://localhost/uniq/corporativo' /*&& 'https://www.grupouniq.com.br/corporativo'*/){
            document.querySelector('[href^="corporativo"]').classList.add('ativo');
    }else if(window.location.href === 'http://localhost/uniq/construcao' /*&& 'https://www.grupouniq.com.br/construcao'*/){
            document.querySelector('[href^="construcao"]').classList.add('ativo');
    }else if(window.location.href === 'http://localhost/uniq/solar' /* && 'https://www.grupouniq.com.br/solar'*/){
            document.querySelector('[href^="solar"]').classList.add('ativo');}
}
ativadoSelecao();
const selecionarJS = document.querySelectorAll('.js-right');
const selecionarJsLeft = document.querySelectorAll('.js-left');
const at = 'js-ativo';
if(selecionarJS.length){
    const windowalem = window.innerHeight * 0.7;
    function animaScrollRight(){
        selecionarJS.forEach((article) => {
            const selecionarTopo = article.getBoundingClientRect().top;
            const isSelecaoVisible = (selecionarTopo - windowalem) < 0 ;
            if(isSelecaoVisible){
                article.classList.add(at);
            }
        })
    }
    animaScrollRight();
    window.addEventListener('scroll', animaScrollRight);
}
if(selecionarJsLeft.length){
    const windowmetade = window.innerHeight * 0.7;
    function animaScrollLeft(){
        selecionarJsLeft.forEach((article) => {
            const selecionarTop = article.getBoundingClientRect().top;
            const isArticleVisible = (selecionarTop - windowmetade) < 0;
            if(isArticleVisible){
                article.classList.add(at);
            }
        })
    }
    animaScrollLeft();
    window.addEventListener('scroll', animaScrollLeft);
}
