<?php
/**
 * Created by PhpStorm.
 * User: mdk
 * Date: 1/10/19
 * Time: 9:40 PM
 */

use PHPUnit\Framework\TestCase;
require 'classes/MailSimples.php';

class MailSimplesTest extends TestCase
{

    private $ms;

    /**
     * @before
     */
    public function setUp()
    {
        $this->ms = new MailSimples("Mauricio", "mauricio", "mauricio", "teste");
    }

    public function testRetornaOk()
    {
        $this->assertEquals("ok", $this->ms->retornaOk());
    }

    public function testFalseRetornaOk()
    {
        $this->assertNotEquals("ok2", $this->ms->retornaOk());
    }
}
