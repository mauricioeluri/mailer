<?php

/**
 * Class MailCsc
 * Classe abstrata para o enviador de e-mails CSC
 */
abstract class MailCsc
{

    private $nomeCompleto;
    private $email;
    private $telefone;

    public function __construct($nomeCompleto, $email, $telefone)
    {
        $this->nomeCompleto = $nomeCompleto;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getNomeCompleto(): string
    {
        return $this->nomeCompleto;
    }

    /**
     * @param mixed $nomeCompleto
     */
    public function setNomeCompleto(string $nomeCompleto)
    {
        $this->nomeCompleto = $nomeCompleto;
    }

    /**
     * @return mixed
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelefone(): string
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone(string $telefone)
    {
        $this->telefone = $telefone;
    }
}