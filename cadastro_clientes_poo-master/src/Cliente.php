<?php



class Cliente
{
   private $nome;
   private $cpf;
   private $endereco;
   private $telefone;
   private $fisi;


    public function getFisi()
    {
        return $this->fisi;
    }

    public function setFisi($fisi)
    {
        $this->fisi = $fisi;
        return $this;
    }
 
    public function getCpf()
    {
        return $this->cpf;
    }

    
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

   
    public function getNome()
    {
        return $this->nome;
    }

    
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

  
    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    
    public function getTelefone()
    {
        return $this->telefone;
    }

    
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }
    
    
}


?>

