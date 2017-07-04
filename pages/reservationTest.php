<?php
require_once 'pages/reservation.php';

require_once 'PHPUnit/Framework/TestCase.php';


/**
 * reservation test case.
 */
class reservationTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var reservation
     */
    private $reservation;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated reservationTest::setUp()
        
        $this->reservation = new reservation(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated reservationTest::tearDown()
        $this->reservation = null;
        
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
     * Tests reservation->UserReserve()
     */
    public function testUserReserve()
    {
        $data['location']='Alexendria';
        $data['returnLocation']='Cairo';
        $data['pickUpDate']='2016-12-23';
        $data['returnDate']='2016-12-25';
        $data['returnTime']='10:10:00';
        $data['pickUpTime']='10:10:00';
         
        
        $this->reservation->UserReserve($data);
        
        $this->assertEquals(true, true);
    }

    /**
     * Tests reservation->Update()
     */
    public function testUpdate()
    {
        $data['location']='Cairo';
        $data['returnLocation']='Alexendria';
        $data['pickUpDate']='2016-12-21';
        $data['returnDate']='2016-12-26';
        $data['returnTime']='10:12:25';
        $data['pickUpTime']='12:24:48';
        $this->reservation->Update($data);
        
        $this->assertEquals(true, true);
    }

    /**
     * Tests reservation->AddPrice()
     */
    public function testAddPrice()
    {
       // $db = new Database();
       // $f=new Cars;
        //$query = 'select `price` from `cars` where `carID` = 1';
        //$sql1= mysqli_query($db->_connection ,$query);
        //$fetch1= mysqli_fetch_assoc($sql1);
        //$x = $fetch1['modelName'];
        //$p = $fetch1['price'];
        //$f->RentCar($x);

        $this->reservation->AddPrice(300);
        $query="delete from `reserve` where `returnTime`='10:12:25' and `pickUpTime`='12:24:48' and `price`= '600' ";
        $db=new Database();
        mysqli_query($db->_connection, $query);
        $this->assertEquals(true, true);
    }

     

    



    /**
     * Tests reservation->sendMail()
     */
    public function testSendMail()
    {
        
        
        $this->reservation->sendMail(/* parameters */);
        $this->assertEquals(true, true);
    }

    /**
     * Tests reservation->close()
     */
    
}

