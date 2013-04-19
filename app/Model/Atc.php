<?php

/**
 * Description of Atc
 *
 * @author Katinha
 */

class Atc extends AppModel{
    
    public $hasAndBelongsToMany = array('Atc');
    public $order = array('Codigo' => 'ASC'); 
}

?>
