<?php

/**
 * Description of Professor
 *
 * @author Katinha
 */

class Professor extends AppModel{
   
   public $useTable = 'professores'; 
   public $hasOne = array('Evento', 'Noticia');
   public $hasMany = array('Avaliacao') ;
   
}
?>