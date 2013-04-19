<?php

/**
 * Description of Noticia
 *
 * @author Katinha
 */

class Noticia extends AppModel{
    
    public $hasAndBelongsToMany = array('TipoNoticia');
    public $order = array('created' => 'DESC'); 
}
?>
