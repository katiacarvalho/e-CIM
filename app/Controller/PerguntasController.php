<?php

/**
 * Description of PerguntasController
 *
 * @author Katinha
 */

class PerguntasController extends AppController{
    
    public function index(){
        
        $ultimas = $this->Pergunta->find('all');
        $this->set('perguntas', $ultimas);
    }
}
?>
