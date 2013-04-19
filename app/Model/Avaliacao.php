<?php

/**
 * Description of Avaliacao
 *
 * @author Katinha
 */

class Avaliacao extends AppModel{
    
    public $useTable = 'avaliacoes';
    public $belongsTo = array('Resposta', 'Professor');
}

?>
