<?php

    function inicioDaPagina($tituloDaPagina){
        echo '<html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>', $tituloDaPagina, '</title>
            <LINK REL="STYLESHEET" HREF="./view/css/cssPrincipal.css" TYPE="text/css">
        </head>
        <body>


            <div id="conteiner">
                <div id="cabecalho">
                    <p align="center"> <br><br><br> Canal Agatetepe </p>
                </div>

                <div id="menu_superior">
                    <ul type="none" class="nivel_1  ">
                        <li> <a> Inicio </a> </li>
                        <li> <a> GoldCast </a> </li>
                        <li> <a> GoldNews </a> </li>
                        <li> <a> GoldPlayer </a> </li>
                        <li> <a> GoldUnboxing </a> </li>
                    </ul>
                </div>

                <div id="menu_esquerdo">
                    <p align="center"> <br> menu esquerdo </p>
                </div>
            
            <div id="painel_principal">';               
    }
    
    function fimDaPagina(){
        echo '</div>
            
                </div>



            </body>
        </html>';
    }

?>