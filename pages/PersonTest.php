<?php
require_once 'pages/Person.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * Person test case.
 */
class PersonTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var Person
     */
    private $Person;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated PersonTest::setUp()
        
        $this->Person = new Person(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated PersonTest::tearDown()
        $this->Person = null;
        
        parent::tearDown();
    }

   
    /**
     * Tests Person->setdataforlogin()
     */
    public function testSetdataforlogin()
    {
        $username =  'hazem';
        $password =  '123';
        
        $this->Person->setdataforlogin($username,$password);
        $this->assertEquals(true, true);
    }

    /**
     * Tests Person->getData()
     */
    public function testGetData()
    {
        
        $this->Person->setdataforlogin('hisham','123');
        $this->assertEquals(true, true);
    }
}

