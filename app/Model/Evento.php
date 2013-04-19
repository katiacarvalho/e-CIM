<?php

/**
 * Description of Evento
 *
 * @author Katinha
 */

class Evento extends AppModel{
    
    public $hasOne = array('Cidade', 'Professor', 'Estagiario');
    public $order = array('created' => 'DEC'); 
}

?>