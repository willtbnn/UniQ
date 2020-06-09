export default function initAnimacaoScroll(){
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
}