<?php 
    global $titulo_pag;
    $titulo_pag = "Contato";
    include('partes/cabecalho.php');

    $nome ='';
    $email ='';
    $mensagem ='';
    if(isset($_POST['Enviar'])){
        $nome = $_POST['name_nome'];
        $email = $_POST['name_email'];
        $mensagem = $_POST['areadetexto'];
    }
    ?>
    
    <main>
        
        <article>
            <header class="pagina-cabecalho">
                <div class="container"><!--Inicio container-->
                   <?php echo $nome.'<br>'.$email.'<br>'.$mensagem
                        
                   ?>
                <h1 class="pagina-cabecalho__titulo">contato</h1>

                </div>
            </header>
            <section>
                <div class="container  pagina-contato"><!--Inicio container-->
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ducimus, porro et at corrupti esse,</p>
                <form class="formulario" action="#" method="POST">
                    <div class="formulario_grupo formulario_grupo--esq">
                        <label class="formulario_label" for="nome">Nome </label>
                        <input class="formulario_campo" id="nome" type="text" name="name_nome">
                    </div>
                    <div class="formulario_grupo formulario_grupo--dir">
                        <label class="formulario_label" for="email">Email </label>
                        <input class="formulario_campo" id="email" type="email" name="name_email"><br>
                    </div>
                    <div class="formulario_grupo">
                        <label class="formulario_label" for="">Mensagem <br></label>
                        <textarea class="formulario_campo" name="areadetexto" id="" cols="30" rows="10"></textarea><br>
                    </div>
                    <input class="formulario_botao" type="submit" name="Enviar" id="Enviar">
                </form>
                <div>
                    <p class="text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed provident eius unde asperiores molestias, exercitationem quibusdam sint tempora officiis iste veritatis ipsam except
                    </p>
                </div>
                
            </div><!--fim container-->
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d445.09487071635675!2d-45.859708965409574!3d-23.185782755029784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4bb6ef6d97c7%3A0x6c5433c366a6035e!2sRonda%2C%20S%C3%A3o%20Jos%C3%A9%20dos%20Campos%20-%20SP%2C%2012220-110!5e1!3m2!1spt-BR!2sbr!4v1621897001904!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            </section>
        
        </article>
    
    </main>
    <?php include('partes/rodape.php'); ?>
</body>
</html>