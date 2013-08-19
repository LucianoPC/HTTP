<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Video
 *
 * @author luciano
 */
class Video {
    private $titulo;
    private $autor;
    private $texto;
    private $data;
    private $link;
    private $icone;
    
    public function __construct($titulo) {
        $this->titulo = $titulo;
    }
    
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }
    public function getLink() {
        return $this->link;
    }

    public function setLink($link) {
        $this->link = $link;
    }

    public function getIcone() {
        return $this->icone;
    }

    public function setIcone($icone) {
        $this->icone = $icone;
    }



}

?>
