<?php
include 'ConexaoComBanco.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VideoDAO
 *
 * @author luciano
 */
class VideoDAO {
    
    private $ERRO_NAO_PODE_CADASTRAR = "Nao foi possivel cadastrar o video.
                                    Verifique se ja existe um video com esse
                                    titulo, caso ja exista, informe o
                                    Administrador.";
    
    private $conexaoComBanco;
    
    public function __construct() {
        $this->conexaoComBanco = new ConexaoComBanco();
    }
    
    public function cadastrarVideo($video){
        
        $query = $this->getQueryDeInsercao($video);
        
        $this->conexaoComBanco->iniciarConexao();
        $resultado = mysql_query($query);
        $this->conexaoComBanco->finalizarConexao();
        
        if(!$resultado)
            throw new Exception($this->ERRO_NAO_PODE_CADASTRAR);
    }
    
    private function getQueryDeInsercao($video){
        $query = "INSERT INTO `t_video` VALUES (";
        $query .= "'" . $video->getTitulo() . "', ";
        $query .= "'" . $video->getAutor() . "', ";
        $query .= "'" . $video->getTexto() . "', ";
        $query .= "'" . $video->getLink() . "', ";
        $query .= "'" . $video->getData() . "')";
        
        return $query;
    }
    
    private function __destruct() {
        $this->conexaoComBanco = null;
    }
}

?>
