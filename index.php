<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Projeto Controle Remoto</h1>
        <pre>
        <?php
        // put your code here
        require_once 'ControleRemoto.php';
        $c = new ControleRemoto();
        
        $c->ligar();
        $c->tocar();
        $c->maisVolume();
        $c->abrirMenu();
                
        ?>
</pre>
    </body>
</html>
