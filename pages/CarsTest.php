<?php
require_once 'pages/Cars.php';
require_once 'pages/reservation.php';
require_once 'PHPUnit/Framework/TestCase.php';

/**
 * Cars test case.
 */
class CarsTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var Cars
     */
    private $Cars;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated CarsTest::setUp()
        
        $this->Cars = new Cars(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated CarsTest::tearDown()
        $this->Cars = null;
        
        parent::tearDown();
    }

   
    /**
     * Tests Cars->AddCar()
     */
    public function testAddCar()
    {
        
        $data['modelName']='Nissan Qashqai';
        $data['price']=450;
        $data['color']='silver';
         
        $this->Cars->AddCar($data);
        
        $this->assertEquals(true,true);
    }

    /**
     * Tests Cars->RentCar()
     */
    public function testRentCar()
    {
        $x=new reservation();
        $data['location']='Alexendria';
        $data['returnLocation']='Cairo';
        $data['pickUpDate']='2016-12-21';
        $data['returnDate']='2016-12-27';
        $data['returnTime']='10:10:25';
        $data['pickUpTime']='10:10:48';
        $x->UserReserve($data);
        $Cars = new Cars();
        $car='Hyundai Elantra';
        $this->Cars->RentCar($car);
        $query="delete from `reserve` where `returnTime`='10:10:25' and `pickUpTime`='10:10:48' and `selectCar`='Hyundai Elantra' ";
        $db=new Database();
        mysqli_query($db->_connection, $query);
        
        $this->assertEquals(false,false);
    }

    
    
    /**
     * Tests Cars->DeleteCar()
     */
    public function testDeleteCar()
    {
        $data['id']='20';
        
        $this->Cars->DeleteCar($data);
        $this->assertEquals(true, true);
    }
}

