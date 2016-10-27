<?php

require_once "Cliente.php";
class ClienteJuridica extends Cliente
{
  private $inscri;
  private $juri;

    
    public function getJuri()
    {
        return $this->juri;
    }

    
    public function setJuri($juri)
    {
        $this->juri = $juri;
        return $this;
    }


    public function getInscri()
    {
        return $this->inscri;
    }

    public function setInscri($inscri)
    {
        $this->inscri = $inscri;
        return $this;
    }
}
?>