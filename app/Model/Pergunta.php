<?php

/**
 * Description of Pergunta
 *
 * @author Katinha
 */

class Pergunta extends AppModel{
   
    public $hasOne = array('Resposta');
    public $order = array('created' => 'DEC');    
}
?>
