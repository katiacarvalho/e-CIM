<?php

/**
 * Description of TipoNoticia
 *
 * @author Katinha
 */

class TipoNoticia extends AppModel{
   
    public $hasAndBelongsToMany = array('Noticia');
    public $order = array('Descricao' => 'ASC');
}

?>
