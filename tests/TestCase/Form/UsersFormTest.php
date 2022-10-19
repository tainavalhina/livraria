<?php
namespace App\Test\TestCase\Form;

use App\Form\UsersForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\UsersForm Test Case
 */
class UsersFormTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Form\UsersForm
     */
    public $Users;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Users = new UsersForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Users);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
