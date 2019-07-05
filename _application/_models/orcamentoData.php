<?php

class OrcamentoData extends Model 
{


    public function getOrcamentos()
    {

        $this->loadFacade('orcamento');
        return $this->orcamentoFacade->getOrcamentos();
    }


    public function getOrcamentosOffset($startof, $endof, $updown)
    {


 
        $this->loadFacade('orcamento');
        return $this->orcamentoFacade->getOrcamentosInterval($startof, $endof, $updown);
    }



    public function addOrcamento($dataArray) {
        
        $this->loadFacade('orcamento');
        return $this->orcamentoFacade->insertOrcamento($dataArray);
    }


    public function getOrcamento($id)
    {

        $this->loadFacade('orcamento');
        return $this->orcamentoFacade->getOrcamento($id);
    }

    
    public function setOrcamentoStatus($id, $status)
    {

        $this->loadFacade('orcamento');
        return $this->orcamentoFacade->setStatus($id, $status);
    }


    public function setOrcamentoAnswerMail($id, $answermail)
    {
        $this->loadFacade('orcamento');
        return $this->exampleFacade->setAnswerMail($id, $email);
    }




	
}