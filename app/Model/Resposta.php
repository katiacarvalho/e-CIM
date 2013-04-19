<?php

/**
 * Description of Resposta
 *
 * @author Katinha
 */

class Resposta extends AppModel{
    
   public $hasMany = array('Avaliacao');
   public $hasOne = array('Pergunta', 'Estagiario');
   public $order = array('created' => 'DEC'); 
}

?>