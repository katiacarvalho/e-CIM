<?php

/**
 * Description of Cidade
 *
 * @author Katinha
 */

class Cidade extends AppModel{
    
    public $hasOne = array('Endereco', 'Evento');
    public $belongsTo = array('Estado');
    public $order = array('NomeCidade' => 'ASC'); 
}

?>
