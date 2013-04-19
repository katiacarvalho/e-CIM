<?php

/**
 * Description of RespostasController
 *
 * @author Katinha
 */

class RespostasController extends AppController{
    
    public function index(){
        $this->set('respostas', $this->Resposta->find(all));
    }
    
}
?>
