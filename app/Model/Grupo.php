<?php

/**
 * Description of Grupo
 *
 * @author Katinha
 */

class Grupo extends AppModel{
    
    public $hasOne = array('Usuario');
    public $order = array('Descricao' => 'ASC'); 
}

?>
