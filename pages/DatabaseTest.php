<?php
require_once 'pages/database.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * Database test case.
 */
class DatabaseTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var Database
     */
    private $Database;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated DatabaseTest::setUp()
        
        $this->Database = new Database(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated DatabaseTest::tearDown()
        $this->Database = null;
        
        parent::tearDown();
    }

   
   
    /**
     * Tests Database->Select()
     */
    public function testSelect()
    {
        $query = "SELECT `NumOfDays` FROM `reserve` order by id desc limit 1";
        
        $this->Database->Select($query);
        $this->assertEquals(true, true);
    }

    /**
     * Tests Database->Insert()
     */
    public function testInsert()
    {
         $query = "insert into `cars` (`carID`,`modelName`, `price`, `Color`) values('','kia','100','red') ";
        
        $this->Database->Insert($query);
        $this->assertEquals(true, true);
    }

    /**
     * Tests Database->Delete()
     */
    public function testDelete()
    {
        $query = "delete from `cars` where `modelName` ='kia' and `price`='100' ";
        
        $this->Database->Delete($query);
        $this->assertEquals(true, true);
    }
}

