export default function InitCliqueDiv(){
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
}