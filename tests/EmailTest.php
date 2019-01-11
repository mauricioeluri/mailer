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
        $this->email->setRemetente("csc");
        $this->assertEquals("csc", $this->email->getRemetente());
    }

    public function testTestaRequisicaoFalse()
    {
        $this->email->setRemetente("csc2");
        $this->assertEquals(NULL,
            $this->email->getRemetente());
    }

    public function testDefineObjetoEmail()
    {
        $this->email = new Email("csc");
        $this->assertInstanceOf(MailSimples::class,
        $this->email->defineObjetoEmail("simp"));
    }
}
