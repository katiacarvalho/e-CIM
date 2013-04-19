<?php

/**
 * Description of Estado
 *
 * @author Katinha
 */

class Estado extends AppModel{
    
      
    public $hasMany = array('Cidade');
    public $order = array('Nome' => 'ASC');
    public $validate = array(
        'Nome' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Informe o Nome do Estado'
            ),
            array(
                'rule' => 'isUnique',
                'message' => 'O nome do Estado informado já existe'
            )
        ),
        'SiglaEstado' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Informe a Sigla do Estado'
            ),
            array(
                'rule' => array('maxLength', 2),
                'message' => 'Digite no máximo 2 caracteres'
            ),
            array(
                'rule' => 'isUnique',
                'message' => 'A sigla do Estado informada já existe'
            )
        )
    );
}

?>
