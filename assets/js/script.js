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
//selecionando div na pagina construção
/* testando uso de cssavançado
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
});*/
$(function(e){
    $('.btn').click(function(){
		$('html, body').animate({scrollTop: $('#portifolio').offset().top }, 2000);
	});
    $('ul li:nth-child(1)').click(function(){
		$('html, body').animate({scrollTop: $('#quem').offset().top }, 3000);
	});
});

/*
$(function(){
    // aqui esta o elemento legenda da galeria
    $('<div id="legenda_foto" class="col-12 align-self-center"></div>').insertBefore('ul.album');
    //elemento foto principal
    $('<div id="foto_principal" class="col-12"></div>').insertBefore('#legenda_foto');
    //adicinando tag de imagem
    $('#foto_principal').prepend('<img id="imagen" class="img-fluid"/>');
    //adicionando uma foto a tag img
    $('#foto_principal img').attr('src', $('.galeria a').attr('href'));

    $('#legenda_foto').text( $('.galeria a img').attr('title'));
    

    //EVENTO DE CLICK
    function abrirFoto(e){
        e.preventDefault();
        $('#foto_principal img').attr('src', $(this).parent().attr('href'));
        //adicionando legenda da foto
        $('#legenda_foto').text( $(this).attr('title'));
    }
    $('.thumbb').on('click', abrirFoto);

    // aplicando mesmo em outra div
    $('<div id="legenda_foto2" class="col-12 align-self-center"></div>').insertBefore('ul.album2');
    
    $('<div id="foto_principal2" class="col-12"></div>').insertBefore('#legenda_foto2');
    
    $('#foto_principal2').prepend('<img id="imagen2" class="img-fluid"/>');
    
    $('#foto_principal2 img').attr('src', $('.galeria2 a').attr('href'));

    $('#legenda_foto2').text( $('.galeria2 a img').attr('title'));
    

    //EVENTO DE CLICK
    function abrirFotoo(e){
        e.preventDefault();
        $('#foto_principal2 img').attr('src', $(this).parent().attr('href'));
        //adicionando legenda da foto
        $('#legenda_foto2').text( $(this).attr('title'));
    }
    $('.thumbbb').on('click', abrirFotoo)

});
/*
 Author: Jafar Akhondali
 Release year: 2016
 Title:	Light-Zoom JQuery plugin that use pure css to zoom on images, this enables you to zoom without loading bigger image and zoom even on gif images !
 https://github.com/JafarAkhondali/lightzoom
 
$.fn.lightzoom = function(options) {

    var settings = $.extend({
        zoomPower   : 3,
        glassSize   : 175,
    }, options);
  
    var halfSize= settings.glassSize /2;
    var quarterSize = settings.glassSize/4;
  
    var zoomPower = settings.zoomPower;
  
    $("body").append('<div id="glass"></div>');
    $('html > head').append($('<style> #glass{width: '+settings.glassSize+'px; height: '+settings.glassSize+'px;}</style>'));
  
  
    var faker;
    var obj=this;
  
    $("#glass").mousemove(function(event) {
        var obj=this.targ;
        event.target=obj;
        faker(event,obj);
    });
  
    this.mousemove(function(event) {
        faker(event,this);
    });
    faker=function(event,obj) {
        //console.log(obj);
        document.getElementById('glass').targ=obj;
        var mx = event.pageX;
        var my = event.pageY;
        var bounding = obj.getBoundingClientRect();
        var w = bounding.width;
        var h = bounding.height;
        var objOffset  = $(obj).offset();         
        var ol = objOffset.left;
        var ot = objOffset.top;
        if(mx > ol &&  mx < ol + w  && ot < my  &&  ot+h > my ) {
            offsetXfixer = ((mx-ol - w/2)/(w/2))*quarterSize;
            offsetYfixer = ((my-ot - h/2)/(h/2))*quarterSize;
            var cx = (((mx - ol + offsetXfixer ) / w)) * 100;
            var cy = (((my - ot + offsetYfixer ) / h)) * 100;
            my -= halfSize;
            mx -= halfSize;
            $("#glass").css({
                "top": (my),
                "left": (mx),
                "background-image" : " url('" + obj.src + "')",
                "background-size" : (w * zoomPower) + "px " + (h * zoomPower) + "px",
                "background-position": cx + "% " + cy + "%",
                "display" : "inline-block"
            });
            $("body").css("cursor","none");
        }else {
            $("#glass").css("display", "none");
            $("body").css("cursor","default");
        }
    };
    return this;
  };
$(function() {
    $('#imagen').lightzoom({
        zoomPower:3,glassSize:280,
    });
    $('#imagen2').lightzoom({
        zoomPower:3,glassSize:280,
    });
});
