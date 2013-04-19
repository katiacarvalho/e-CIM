<?php

/**
 * Description of Paciente
 *
 * @author Katinha
 */

class Paciente extends AppModel{
    
    public $hasMany = array('Pergunta');
}
?>
