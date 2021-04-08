<html>
    <head>

    <link rel = "stylesheet" type = "text/css" href = "publico/css/estilo.css" />
        
    </head>
    <body>
    
        <header><font face="sans-serif" size=5; color=aaaa;>cabeçalho</font> </header>
        <nav> 

        <a href="?modulo=cliente&acao=adicionar"> <font face="sans-serif">cliente adicionar   </font><a>
        <a href="?modulo=cliente&acao=listar"> <font face="sans-serif">cliente listar </font><a>

        <a href="?modulo=modelo&acao=adicionar"><font face="sans-serif">modelo adicionar </font><a>
        <a href="?modulo=modelo&acao=listar"> <font face="sans-serif">modelo listar </font><a>

        <a href="?modulo=carroceria&acao=adicionar"> <font face="sans-serif"> carroceria adicionar </font><a>
        <a href="?modulo=carroceria&acao=listar"> <font face="sans-serif"> carroceria listar </font> <a>

        <a href="?modulo=motor&acao=adicionar"> <font face="sans-serif"> motor adicionar </font> <a>
        <a href="?modulo=motor&acao=listar"><font face="sans-serif"> motor listar </font><a>

        <a href="?modulo=opcionais&acao=adicionar"> <font face="sans-serif"> opcionais adicionar </font><a>
        <a href="?modulo=opcionais&acao=listar"> <font face="sans-serif"> opcionais listar</font> <a>

        <a href="?modulo=cor&acao=adicionar"> <font face="sans-serif"> cor adicionar </font><a>
        <a href="?modulo=cor&acao=listar"><font face="sans-serif"> cor listar </font> <a>
       

        </nav>
        <div class= 'content'> 

        <?php
        
            $modulo = $_GET['modulo'];
            $acao = $_GET['acao'];
            require_once("modulos/".$modulo."/".$acao.".php");

            if(isset($_GET["modulo"])){
                $modulo=$_GET["modulo"];
            }else{$modulo=false;
        }
            if(isset($_GET["acao"])){
                $acao=$_GET["acao"];
            }else{
                $acao='listar';
        }

        if($modulo){
            if(file_exists("modulos/".$modulo."/".$acao.".php")){
                include("modulos/".$modulo."/".$acao.".php");
            }else{
                echo "pagina solicitada nao existe";
            }
        }
        
        ?>

        </div>
        <footer> <font face="sans-serif" size=5; color=aaaa;>rodape</font> </footer>
    
    

    </body>
</html>