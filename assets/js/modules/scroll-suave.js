export default function initScrollSuave(){
    const linksInternos = document.querySelectorAll('[data-menu="suave"] a[href^="#"');
    function scrollToSection(event){
        event.preventDefault();
        const href = this.getAttribute('href');
        const section = document.querySelector(href);
        //Forma alternativa 
        /*
        const topo = section.offsetTop;
        window.scrollTo({
            top: topo,
            behavior:'smooth',
        }); */
        section.scrollIntoView({
            behavior: 'smooth',
            block: 'start',
        });
    }
    
    linksInternos.forEach((iten) => {
        iten.addEventListener('click', scrollToSection);
    });
}