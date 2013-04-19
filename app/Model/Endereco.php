<?php

/**
 * Description of Endereco
 *
 * @author Katinha
 */

class Endereco extends AppModel{
    
    public $hasOne = array('Contato', 'Pessoa');
    
}

?>
