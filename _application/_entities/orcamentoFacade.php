<?php 

class OrcamentoFacade extends Facade
{


public function insertOrcamento($dataArray) {

    $this->loadEntity('orcamento');
    $this->loadDao('orcamento');
    $this->orcamentoDao->setDbTable('orcamentos');

    $dA = $dataArray;

 
     if (isset($dA['callme']) ) {
     return $this->orcamentoDao->insert(['product','class','nome','email','telefone','estado','cidade','callmail','status','time','mensagem'],[$dA['product'],$dA['class'],$dA['nome'],$dA['email'],$dA['telefone'],$dA['estado'],$dA['cidade'],'call',0,date("Y-m-d H:i:s"), $dA['mensagem']]);
     } else if (isset($dA['mailme']) ) {
    return $this->orcamentoDao->insert(['product','class','nome','email','telefone','estado','cidade','callmail','status','time','mensagem'],[$dA['product'],$dA['class'],$dA['nome'],$dA['email'],$dA['telefone'],$dA['estado'],$dA['cidade'],'mail',0,date("Y-m-d H:i:s"), $dA['mensagem']]);
     }
     
     
      
}

public function getOrcamentos() {
    $this->loadEntity('orcamento');
    $this->loadDao('orcamento');
    $this->orcamentoDao->setDbTable('orcamentos');

    return $this->orcamentoDao->find();
}


public function getOrcamentosInterval($stoff, $endoff, $updown) {
    $this->loadEntity('orcamento');
    $this->loadDao('orcamento');
    $this->orcamentoDao->setDbTable('orcamentos');
    
    if ($updown=="ASC") { 
        $this->orcamentoDao->orderUp();
    } else if ($updown="DESC") {
        $this->orcamentoDao->orderDown();
    }

    return $this->orcamentoDao->findOffset($stoff, $endoff);
}



public function getOrcamento($id) {
    $this->loadEntity('orcamento');
    $this->loadDao('orcamento');
    $this->orcamentoDao->setDbTable('orcamentos');
    return $this->orcamentoDao->find('id',$id);
}


public function setStatus($id, $status){
    $this->loadEntity('orcamento');
    $this->loadDao('orcamento');
    $this->orcamentoDao->setDbTable('orcamentos');

    return $this->orcamentoDao->update('id', $id, ['status'], $status );
}


public function setAnswerMail($id, $email){
    $this->loadEntity('orcamento');
    $this->loadDao('orcamento');
    $this->orcamentoDao->setDbTable('orcamentos');
    //$this->orcamentoDao->update('id', $id, ['status'], $status );
}




}