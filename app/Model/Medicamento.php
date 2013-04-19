<?php

/**
 * Description of Medicamento
 *
 * @author Katinha
 */

class Medicamento extends AppModel{
    
    public $hasAndBelongsToMany = array('Atc');
    public $order = array('Substancia' => 'ASC'); 
}

?>