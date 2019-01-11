<?php
/**
 * Created by PhpStorm.
 * User: mdk
 * Date: 1/10/19
 * Time: 10:53 PM
 */

use PHPUnit\Framework\TestCase;
require 'classes/Email.php';

class EmailTest extends TestCase
{

    private $email;

    /**
     * @before
     */
    public function setUp()
    {
        $this->email = new Email();
    }

    public function testTestaRequisicaoTrue()
    {
        $this->assertTrue($this->email->setRequisicao("csc"));
    }

    public function testTestaRequisicaoFalse()
    {
        $this->assertFalse($this->email->setRequisicao("csc2"));
    }

    public function testDefineObjetoEmail()
    {
        $this->assertInstanceOf(MailSimples::class,
        $this->email->defineObjetoEmail("csc", "simp"));
    }
}
