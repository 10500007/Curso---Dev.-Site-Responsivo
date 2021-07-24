
/*
  //Abrir e fechar menu com jS //
       var menu = document.querySelector('.menu-principal--fechado')
       menu.addEventListener('click', clicar)

       function clicar(){    

        menu.classList.toggle('menu-principal--fechado')
        console.log(menu)
       }

*/

       /*
       function scrollTo(element){
        document.querySelector(element).scrollIntoView({behavior: "smooth"});
        }

        document.querySelector('.cabecalho-home__role').addEventListener("click", function(event){
        event.preventDefault();
           

        scrollTo('#servicos', 1000)

        
});
    */
    //ready - Executa essa função so quando todos os elementos da páginas foram carregados
  $(document).ready(function(){
    //Abrir e fechar menu com jquery //
    $('.menu-principal__btn').click(function(){
        $('.menu-principal').toggleClass('menu-principal--fechado')

    });

    // Parte de slide de depoimentos
    $('.depoimentos__caixa').slick({
      autoplay: true,
      arrows: false,
      dots: true
    });

});
//fim menu

//Scroll suave
    $('header a[href^="#"]').on('click', function(e) {
    e.preventDefault();
    var id = $(this).attr('href'),
    targetOffset = $(id).offset().top;
    $('html, body').animate({
    scrollTop: targetOffset - 100
    }, 1500);});
            
   


