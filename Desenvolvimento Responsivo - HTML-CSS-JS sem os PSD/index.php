    <?php 
    global $titulo_pag;
    $titulo_pag = "Home";
    include('partes/cabecalho.php');
    ?>
    
    <main>             
          <header class="cabecalho-home cnc">
              <h2 class="cabecalho-home__titulo">Desenvolvimento Responsivo</h2>
              <p class="cabecalho-home__subtitulo">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum cumque </p>
              <a class="cabecalho-home__role" href="#servicos">Role para ver mais</a>
          </header>
<!--Seção de serviços-->

          <section id="servicos" class="servicos">
           <div class="container"><!--Inicio container-->
              <h2 class="home__titulo">O que fazemos</h2>
              <section class="servico__item">
                  <img src="img/icone-desenvolvimento-web.png" alt="icone planeta terra">
                  <h3 class="titulo__servicos">Desenvolvimento Web</h3>
                  <p class="servicos__texto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut eum saepe ex perferendis deserunt sapiente nulla eos excepturi vitae. Nam rerum qui dicta? .</p>
              </section>
              <section class="servico__item">
                  <img src="img/icone-carrinho.png" alt="carrinho de loja">
                  <h3 class="titulo__servicos">E-commerce</h3>
                  <p class="servicos__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quae explicabo, omnis quis similique, iste quo vel corrupti eos nemo necessitatibus cumque sequi. </p>
              </section>
              <section class="servico__item">
                  <img src="img/icone-cafe.png" alt="copo de café">
                  <h3 class="titulo__servicos">Café</h3>
                  <p class="servicos__texto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, eum doloribus! Velit non esse quaerat quo officiis id voluptate dolorum. Doloribus voluptatum </p>
              </section>
            </div><!--Fim container-->
          </section><!--Fim Seção Serviços-->

          <section class="depoimentos cnc"><!--Seção Depoimentos-->
            <div class="container"><!--Inicio container-->
                <h2 class="home__titulo home__titulo--branco">O que falam de nós</h2>

                    <div class="depoimentos__caixa">
                        <section class="depoimentos__item">
                            <img class="depoimentos__img" src="imagens/img/depoimentos/pessoa-1.jpg" alt="foto da pessoa">
                            <p class="depoimentos__texto">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione officiis ipsam praesentium distinctio nihil voluptates quos, excepturi quisquam sapiente
                            </p>
                            <p class="depoimentos__pessoa">Nome da pessoa - cargo</p>
                        </section>

                        <section class="depoimentos__item">
                            <img class="depoimentos__img" src="imagens/img/depoimentos/pessoa-1.jpg" alt="foto da pessoa">
                            <p class="depoimentos__texto">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                            <p class="depoimentos__pessoa">Nome da pessoa - cargo</p>
                        </section>

                        <section class="depoimentos__item">
                            <img class="depoimentos__img" src="imagens/img/depoimentos/pessoa-1.jpg" alt="foto da pessoa">
                            <p class="depoimentos__texto">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione officiis ipsam praesentium distinctio nihil voluptates quos, excepturi quisquam sapiente
                            </p>
                            <p class="depoimentos__pessoa">Nome da pessoa - cargo</p>
                        </section>

                    </div>
            </div><!--Fim container-->
          </section><!--Fim Seção Depoimentos-->

    </main>
   <?php include('partes/rodape.php'); ?>
  
</body>
</html>