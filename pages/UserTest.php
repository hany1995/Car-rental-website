<?php
require_once 'pages/User.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * User test case.
 */
class UserTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var User
     */
    private $User;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated UserTest::setUp()
        
        $this->User = new User(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated UserTest::tearDown()
        $this->User = null;
        
        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests User->register()
     */
    public function testRegister()
    {
        $data['firstname']='Ahmed';
        $data['lastname']='Mohamed';
        $data['username']='ahmed1';
        $data['email']='ahmed1@yahoo.com';
        $data['password']='123';
        $data['mobnum']='01144778855';
        $data['ssn']='77889966554411';
        $data['BoD']='2014-12-12';
        
        $this->User->register($data);
        $this->assertEquals(true, true);
    }
}

