<?php

include './view/molduras/Moldura_Index.php';
include './model/Video.php';
include './dao/VideoDAO.php';

inicioDaPagina("Inicio");

echo '<p align="center"> Bem Vindo ao Canal Agatetepe </p>';


$titulo = "Unboxing película ZAGG iPhone 4s";
$autor = "Gabriel Costa";
$texto = "Realizamos um unboxing da película 
para iPhone 4 ou 4s da ZAGG .Continue nos acompanhando 
nas redes sociais.";
$link = "www.youtube.com/embed/lDI7aG4JGRQ";

$sqlDataHora = mysql_query("SELECT now()");
$data = mysql_result($sqlDataHora, 0, "now()");

$video = new Video($titulo);
$video->setAutor($autor);
$video->setTexto($texto);
$video->setData($data);
$video->setLink($link);

/*
$videoDAO = new VideoDAO();
try{
    $videoDAO->cadastrarVideo($video);
} catch(Exception $e){
    echo "<br> ", $e->getMessage(), " <br> <br>";
}
 *
 */


echo 'Titulo: ',$video->getTitulo(),' <br>
      Autor: ',$video->getAutor(),'<br>
      Texto: ',$video->getTexto(),' <br>
      Data: ',$video->getData(),' <br>
      <p align="center"> <iframe width="480" height="360" src="//',$video->getLink(),'" frameborder="0" allowfullscreen></iframe> </p>';

fimDaPagina();

?>
