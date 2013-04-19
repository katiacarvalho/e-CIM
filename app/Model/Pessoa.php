<?php

/**
 * Description of Pessoa
 *
 * @author Katinha
 */

class Pessoa extends AppModel{
    
    public $hasOne = array('Usuario');
    public $order = array('Nome' => 'ASC');
}
?>
