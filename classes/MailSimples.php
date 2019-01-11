<?php
require 'MailCsc.php';

/**
 * Class mailSimples
 * Classe para o enviador de e-mails trabalhe conosco
 */
class MailSimples extends MailCsc
{

    private $mensagem;

    /**
     * MailSimples constructor.
     */
    public function __construct($nomeCompleto, $email, $telefone, $mensagem)
    {
        parent::__construct($nomeCompleto, $email, $telefone);
        $this->mensagem = $mensagem;
    }

    /**
     * @return mixed
     */
    public function getMensagem(): string
    {
        return $this->mensagem;
    }

    /**
     * @param mixed $mensagem
     */
    public function setMensagem(string $mensagem)
    {
        $this->mensagem = $mensagem;
    }

    public function retornaOk(): string
    {
        return "ok";
    }
}