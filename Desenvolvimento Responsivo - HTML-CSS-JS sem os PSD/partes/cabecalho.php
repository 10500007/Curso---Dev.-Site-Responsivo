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
                <li ><a class="menu-principal__item Home"href="index.php">Home</a></li>

                <li><a class="menu-principal__item Sobre" href="sobre.php">Sobre nós</a></li>

                <li><a class="menu-principal__item" href="portfolio.php"> Portifólio</a></li>

                <li><a class="menu-principal__item" href="contato.php">
                Contato</a></li>

            </ul>
        </nav>
    </div><!--Fim container-->
    </header>
    <!--
    <script>

        var titu = document.querySelector('title').text
        var menu_sel = document.querySelector('.Home').classList[1]
        console.log(menu_sel)
        console.log(titu)
        
        if(titu == "Design Responsivo | Home"){
            menu_sel= 'menu-principal__item--atual'
            console.log(menu_sel)
         }
         
     
    </script>

        -->