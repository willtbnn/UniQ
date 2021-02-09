export default function initAtivado(){
    // function deslizar(){
    //     $(function(e){
    //         $('.btn').click(function(){
    //             $('html, body').animate({scrollTop: $('#portifolio').offset().top }, 3000);
    //             });
    //     });
    // };
    // Lembra que no Deploy tem que colocar https://grupouniq.com.br/ ... 
    // com www não pega 
    function ativadoSelecao(){
        let selecionanadoLink = document.querySelectorAll('link');
        let selecionandoMetaTitle = document.querySelectorAll('meta');
        let selecionandoImg = document.querySelector('img');
        if(window.location.href === 'http://localhost/UniQ/planejados'  && 'http://localhost/UniQ/planejados#portifolio'/* && 'https://www.grupouniq.com.br/planejados'*/){
            document.querySelector('[href^="planejados"]' ).classList.add('ativo');
            selecionanadoLink[0].setAttribute('href', 'assets/css/planejados.css');
            // deslizar();
        }else if(window.location.href === /*'http://localhost/UniQ/moveis' &&*/ 'https://grupouniq.com.br/moveis'){
            document.querySelector('[href^="moveis"]').classList.add('ativo');
            selecionanadoLink[0].setAttribute('href', 'assets/css/moveis.css');
            selecionandoImg.setAttribute('src', 'assets/images/slogan/moveis.png');
            selecionandoImg.classList.add('js-left');
        }else if(window.location.href === 'https://grupouniq.com.br/corporativo'){
            document.querySelector('[href^="corporativo"]').classList.add('ativo');
            selecionanadoLink[0].setAttribute('href', 'assets/css/corporativo.css');
        }else if(window.location.href === /*'http://localhost/UniQ/construcao' && */ 'https://grupouniq.com.br/construcao'){
            document.querySelector('[href^="construcao"]').classList.add('ativo');
            selecionanadoLink[0].setAttribute('href', 'assets/css/construcao.css');
        }else if(window.location.href === /*'http://localhost/UniQ/solar'  && */ 'https://grupouniq.com.br/solar'){
            document.querySelector('[href^="solar"]').classList.add('ativo');
            selecionanadoLink[0].setAttribute('href', 'assets/css/solar.css');
        }else if(window.location.href === /*'http://localhost/UniQ/pedidos'  &&*/ 'https://grupouniq.com.br/pedidos'){
            document.querySelector('[href^="pedidos"]').classList.add('ativo');
            selecionanadoLink[0].setAttribute('href', 'assets/css/geral.css');
        }
    }
    ativadoSelecao();
}