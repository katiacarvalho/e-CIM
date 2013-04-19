<?php

/**
 * Description of EstadosController
 *
 * @author Katinha
 */

class EstadosController extends AppController{
    
    public function index(){ //Busca todos os estados que encontrar no banco
        
        $this->set('estados', $this->Estado->find('all')); // Manda para a View -- 'estados' é a variável
               
    }
    
    public function view($id){
        
        $this->Estado->id = $id;
        $this->set('estados', $this->Estado->find('all'));
        
    }
    
    public function cadastrar(){
        
        $isPost = $this->request->is('post'); 
        if ($isPost && !empty($this->request->data)){ // Tenta salvar os dados da inscrição      
            if($this->Estado->save($this->request->data)){ // Registro inserido com sucesso!  
                $this->Session->setFlash('Seu post foi salvo.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
} 