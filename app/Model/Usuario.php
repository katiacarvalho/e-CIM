<?php

/**
 * Description of Usuario
 *
 * @author Katinha
 */

class Usuario extends AppModel{
    
    public $hasOne = array('Pergunta', 'Estagiario', 'Professor');
    public $belongsTo = array('Grupo');
    
    

}

?>