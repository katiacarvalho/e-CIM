<?php

/**
 * Description of Estagiario
 *
 * @author Katinha
 */

class Estagiario extends AppModel{
    
    public $hasOne = array('Resposta', 'Evento', 'Noticia');
    
}

?>