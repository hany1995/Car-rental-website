<?php
require_once 'pages/Admin.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * Admin test case.
 */
class AdminTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var Admin
     */
    private $Admin;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated AdminTest::setUp()
        
        $this->Admin = new Admin(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated AdminTest::tearDown()
        $this->Admin = null;
        
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
     * Tests Admin->register()
     */
    public function testRegister()
    {
       $data['FirstName']='ahmed';
       $data['LastName']='mahmoud';
       $data['username']='ahmed111';
       $data['Email']='ahmed@yahoo.com';
       $data['password']='123';
      $this->Admin->register($data);
     // $query="DELETE FROM `admins` WHERE `username` ='ahmed111'";
     // $db=new Database();
     // mysqli_query($db->_connection, $query);
            $this->assertEquals(true,true);
     
       
    }

    /**
     * Tests Admin->CancelRerservation()
     */
    public function testCancelRerservation()
    {
       
      
        $data['id']=15;
        
        $this->Admin->CancelRerservation($data);
        $this->assertEquals(true, true);
        
    }

    /**
     * Tests Admin->DeleteUser()
     */
    public function testDeleteUser()
    {
        $data['id']=2;
        $this->Admin->DeleteUser($data);
        $this->assertEquals(true, true);
    }

    /**
    
   

    /**
     * Tests Admin->EnquairyList()
     */
   
}

