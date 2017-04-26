
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
    </head>
    <body>
        
        <?php
        
       $n = $_GET["v"];
       $n1 = $_GET["s"];
       
       function soma($a,$b){
           $s = $a + $b;
           echo $s;
           
       }
        
       soma($n,$n1);
       
        ?>
        <br/>
        <a href="Cadastrando.html">
            Voltar
        </a>
    </body>
</html>
