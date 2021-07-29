<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="../Desenvolvimento Responsivo - HTML-CSS-JS sem os PSD/sass/estilo.css">
    <?php 
        $titulo = "Design Responsivo" ;        
        global $titulo_pag;

        if($titulo_pag != ''){
            $titulo .= ' | '.$titulo_pag;
        }
    
    ?>
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="estilo.css">
    
  
  
</head>
<body>
    <header class="cabecalho">
        <div class="container"><!--Inicio container-->
        <h1 class="logo">Design Responsivo</h1>
        <nav class="menu-principal menu-principal--fechado">
            <button class="menu-principal__btn">

            </button>
            <ul class="menu-principal__lista">
                <!--menu-principal__item--atual-->
                <li ><a class="menu-principal__item <?php echo $titulo_pag == "Home" ? "menu-principal__item--atual":""?> "href="index.php">Home</a></li>

                <li><a class="menu-principal__item <?php echo $titulo_pag == "Sobre nós" ? "menu-principal__item--atual":""?> " href="sobre.php">Sobre nós</a></li>

                <li><a class="menu-principal__item <?php echo $titulo_pag == "Portfólio" ? "menu-principal__item--atual":""?>" href="portfolio.php"> Portfólio</a></li>

                <li><a class="menu-principal__item <?php echo $titulo_pag == "Contato" ? "menu-principal__item--atual":""?>" href="contato.php">
                Contato</a></li>

            </ul>
        </nav>
    </div><!--Fim container-->
    </header>
    
    <script>

    </script>

      