<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserTable Test Case
 * 
 * @property App\Model\Table\UserTable $User
 */
class UserTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'User' => 'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('User') ? [] : ['className' => 'App\Model\Table\UserTable'];
        $this->User = TableRegistry::get('User', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->User);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->User->initialize(array());
        $this->assertEquals('users', $this->User->table(), "The primary key does not coincide");
        $this->assertEquals('id', $this->User->primaryKey(), "The primary is setted incorrectly");
        $this->assertEquals('name', $this->User->displayField(), "The display field is not the adecuate");
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testValidations()
    {
        $entity = $this->User->newEntity();
        
        // Null email
        $entity->set('email', null);
        $this->assertFalse($this->User->save($entity));
        
        // Repeated email
        $entity->set('email', 'esteban.zeller+test@gmail.com');
        $this->assertFalse($this->User->rulesChecker()->checkCreate($entity));
        
        // Correct Email
        $entity->set('email', 'esteban.zeller+test2@gmail.com');
        $this->assertTrue($this->User->rulesChecker()->checkCreate($entity));
    }
    
}
