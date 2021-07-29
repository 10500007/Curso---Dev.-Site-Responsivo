<?php 
global $titulo_pag;
$titulo_pag = "Portfólio";
include('partes/cabecalho.php'); 
?>    
    <main>
        <article>
            <header class="pagina-cabecalho">
                <h1 class="pagina-cabecalho__titulo"> Portifólio</h1>
            </header>
                <section class="pagina-portifolio">
                    <div class="ccontainer"><!--Inicio container-->
                    <p class="pagina-conteudo_subtitulo text-center">         Lorem ipsum, dolor sit amet consectetur adipisicing<br> elitb Maxime, error asperiores deserunt quam assumenda cupiditate <br> a laboriosam eveniet fugiat? Tenetur consequatur
                    </p>
                    <nav>
                        <ul class="lista-trabalhos">
                            <li class="lista-trabalhos__item">
                                <a data-fancybox="gallery" href="img/portfolio/aircraft-2806035_1280.jpg">
                                    <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/aircraft-2806035_min.jpg" alt="aviao">
                                    <h2 class="lista-trabalhos__titulos">Nome do trabalho Aviao</h2>
                                </a>
                            </li>
                            <li class="lista-trabalhos__item">
                                <a data-fancybox="gallery" href="img/portfolio/gear-2291916_1280.jpg">
                                    <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/gear-2291916_min.jpg" alt="engrenagem">
                                    <h2 class="lista-trabalhos__titulos">Nome do trabalho Gear</h2>
                                </a>
                            </li>
                            <li class="lista-trabalhos__item">
                                <a data-fancybox="gallery" href="img/portfolio/hong-kong-1990268_1280.jpg">
                                    <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/hong-kong-1990268_min.jpg" alt="honkong">
                                    <h2 class="lista-trabalhos__titulos">Nome do trabalho Honkong</h2>
                                </a>
                            </li>
                            <li class="lista-trabalhos__item">
                                <a data-fancybox="gallery" href="img/portfolio/landscape-2268775_1280.jpg">
                                    <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/landscape-2268775_min.jpg" alt="landscape">
                                    <h2 class="lista-trabalhos__titulos">Nome do trabalho land</h2>
                                </a>
                            </li>
                            <li class="lista-trabalhos__item">
                                <a data-fancybox="gallery" href="img/portfolio/saddle-2614038_1280.jpg">
                                    <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/saddle-2614038_min.jpg" alt="saddle">
                                    <h2 class="lista-trabalhos__titulos">Nome do trabalho saddle</h2>
                                </a>
                            </li>
                            <li class="lista-trabalhos__item">
                                <a data-fancybox="gallery" href="img/portfolio/town-2430571_1920.jpg">
                                    <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/town-2430571_min.jpg" alt="town">
                                    <h2 class="lista-trabalhos__titulos">Nome do trabalho town</h2>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    </div><!--Fim container-->
                </section>
           
        </article>
 
    </main>
    <?php include('partes/rodape.php'); ?>
</body>
</html>