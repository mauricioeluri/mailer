<?php
/*
 * Classe Email
 * Classe que gerencia os e-mails, define qual classe de e-mail deve ser criada,
 * como os templates e cada enviador.
 * Também é responsável por algumas validações.
 */
class Email
{
   private $REMETENTES_AUTORIZADOS = array(
       "csc"
   );
   private $remetente;
   private $dados = array();

    /**
     * Email constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getRemetente()
    {
        return $this->remetente;
    }

    /**
     * @param string $remetente
     * Se o remetente estiver na lista de remetentes autorizados, cria o objeto e seleciona o remetente.
     */
    public function setRemetente(string $remetente)
    {
        if(in_array($remetente, $this->REMETENTES_AUTORIZADOS)) {
            $this->remetente = $remetente;
        }
    }

    /**
     * @return array
     */
    public function getDados(): array
    {
        return $this->dados;
    }

    /**
     * @param array $dados
     */
    public function setDados(array $dados)
    {
        $this->dados = $dados;
    }

    /**
     * Função que serve para definir qual objeto de e-mail criar.
     * A partir da requisição, define o site principal, e caso tenha mais de um
     * formulário, utiliza o tipoEmail para definir qual dos formulários do
     * site solicitou o envio.
     *
     * @param string|null $tipoEmail
     * @return MailSimples
     */
     public function defineObjetoEmail(string $tipoEmail = null)
     {
         if ($this->requisicao = "csc")
         {
             if($tipoEmail = "simp"){
                 return new MailSimples(null,null,null,null);
             }
         }
     }


    /**
     * @param mixed $requisicao
     * Se a requisição estiver nas requisições aceitas, ele cria e retorna TRUE,
     * senão, não cria e retorna FALSE;
     */
   /* public function isAutorizado(string $remetente)
    {
        if(in_array($remetente, $this->REMETENTES_AUTORIZADOS)){
            $this->remetente = $remetente;
            return TRUE;
        }
        return FALSE;
    } */


}