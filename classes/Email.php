<?php
/*
 * Classe Email
 * Classe que gerencia os e-mails, define qual classe de e-mail deve ser criada,
 * como os templates e cada enviador.
 * Também é responsável por algumas validações.
 */
//require 'MailSimples.php';
//require 'MailTrabalhe.php';
class Email
{
   private $REQ_PERMITIDAS = array(
       "csc"
   );
   private $requisicao;

    /**
     * Email constructor.
     * @param $requisicao
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getRequisicao(): string
    {
        return $this->requisicao;
    }

    /**
     * @param mixed $requisicao
     * Se a requisição estiver nas requisições aceitas, ele cria e retorna TRUE,
     * senão, não cria e retorna FALSE;
     */
    public function setRequisicao(string $requisicao)
    {
        if(in_array($requisicao, $this->REQ_PERMITIDAS)){
            $this->requisicao = $requisicao;
            return TRUE;
        }
        return FALSE;
    }

    public function defineObjetoEmail(string $requisicao, string $tipoEmail = null)
    {
        if ($requisicao = "csc")
        {
            if($tipoEmail = "simp"){
                return new MailSimples(null,null,null,null);
            }
        }
    }

}