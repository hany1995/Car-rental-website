<?php
date_default_timezone_set('Africa/Cairo');
require 'PHPMailer/PHPMailerAutoload.php';


if(!class_exists("./database.php"))
{
    include_once './database.php';
}

class reservation {
    private $location;
    private $returnLocation;
    public $pickUpDate;
    private $pickUpTime;
    public $returnDate;
    private $returnTime;
    private $username;
    private $price;
    public $startDate;
    public $endDate;
    public $NumOfDays;
    private $felo;
    public $currentDate;
    
        private $totalprice;

    
   
    
    public function UserReserve($data)
    {
        
        $this->location = $data['location'];
        $this->returnLocation = $data['returnLocation'];
        $this->pickUpDate = $data['pickUpDate'];
         $this->pickUpTime = $data['pickUpTime'];
        $this->returnDate = $data['returnDate'];
         $this->returnTime = $data['returnTime'];
         $this->startDate = strtotime($this->pickUpDate);
         $this->endDate = strtotime($this->returnDate);
         $this->NumOfDays=  ceil(abs($this->endDate - $this->startDate)/86400);
         $this->currentDate = strtotime(date("m/d/y"));
        
           session_start();
         
        if (isset($_SESSION['username'])) 
            {
                    $this->username=  $_SESSION['username'];
    
        }
        if($this->returnDate < $this->pickUpDate || $this->startDate < $this->currentDate)
        {
            throw new Exception('Choose appropriate date , please');
        }
        
        
    
        $query = "insert into `reserve` (`location`, `returnLocation`, `pickUpDate`, `returnDate`,`id`,`pickUpTime`,`returnTime`,`selectCar`,`username`,`price`,`NumOfDays`) values('$this->location','$this->returnLocation','$this->pickUpDate','$this->returnDate','','$this->pickUpTime','$this->returnTime','','$this->username','$this->price','$this->NumOfDays')";
        $db = new Database();
        $sql =  $db->Insert($query);
        //$sql=  mysql_query($query);
        if($sql)
        {
            header('Location:chooseCar.php')  ;      
            
        }
    else {
            throw new Exception('Noo');
         }   
    }
     public function AddTotalPrice($i)
    {         $query = "SELECT `price` , `NumOfDays` FROM `reserve` order by id desc limit 1";
               $db = new Database();
               $q= mysqli_query($db->_connection, $query);

         //$sql = mysql_query($query);
         $z= mysqli_fetch_assoc($q);
		$np = $z['NumOfDays'];
                $pp = $z['price'];
                //$this->s=$p;
        //$this->price=  *$np+50*$i;
                $this->totalprice = 50*$i*$np + $pp;
        
                //$this->price = $this->s * 10;
        $query2="update `reserve` set TotalPrice = '$this->totalprice' order by id desc limit 1 ";
                 mysqli_query($db->_connection,$query2);
          
        $this->ExtraPrice=50*$i*$np;
        $query3="update `reserve` set ExtrasPrice = '$this->ExtraPrice' order by id desc limit 1 ";
                 mysqli_query($db->_connection,$query3);
                /* if($sql2)
        {
                    $this->AddCar();

        }
    else {
            throw new Exception('cannot determine your price');
         } */  

    }
    public function Update($data)
    { 
       $this->location = $data['location'];
        $this->returnLocation = $data['returnLocation'];
        $this->pickUpDate = $data['pickUpDate'];
         $this->pickUpTime = $data['pickUpTime'];
        $this->returnDate = $data['returnDate'];
         $this->returnTime = $data['returnTime'];
         $this->startDate = strtotime($this->pickUpDate);
         $this->endDate = strtotime($this->returnDate);
         $this->NumOfDays=  ceil(abs($this->endDate - $this->startDate)/86400);
         $this->currentDate = strtotime(date("m/d/y"));
        
           session_start();
         
        if (isset($_SESSION['username'])) 
            {
                    $this->username=  $_SESSION['username'];
    
        }
        if($this->returnDate < $this->pickUpDate || $this->startDate < $this->currentDate)
        {
            throw new Exception('Choose appropriate date , please');
        }
        
        
    
        $query = "update `reserve` set location ='$this->location',returnLocation = '$this->returnLocation', pickUpDate ='$this->pickUpDate',pickUpTime='$this->pickUpTime',returnDate='$this->returnDate',returnTime='$this->returnTime',NumOfDays = '$this->NumOfDays' order by id desc limit 1";
        $db = new Database();
        $sql=  mysqli_query($db->_connection ,$query);
        if($sql)
        {
            header('Location:chooseCar.php')  ;      
            
        }
    else {
            throw new Exception('Cannot Update');
         }   
    }
    

     /* private function Date($x,$b)
    {
          $this->startDate =$x;
          $this->endDate=$b;
        if($this->startDate > $this->endDate)
        {
            throw new Exception('Enter your date correctly !');
        }
            
    } 
       */    
    public function AddPrice($p)
    {
         $query = "SELECT `NumOfDays` FROM `reserve` order by id desc limit 1";
         $db = new Database();
         $sql = mysqli_query($db->_connection, $query);
        
        $z= mysqli_fetch_assoc($sql);
		$lp = $z['NumOfDays'];
                $this->s=$p;
        $this->price=  $this->s*$lp;
                //$this->price = $this->s * 10;
        $query2="update `reserve` set price = '$this->price' order by id desc limit 1 ";
                mysqli_query($db->_connection ,$query2);
                /* if($sql2)
        {
                    $this->AddCar();

        }
    else {
            throw new Exception('cannot determine your price');
         } */  

    }
    public function generateReserveReceipt()
    {
        $query = "SELECT * FROM reserve order by id desc limit 1 ";
        $db = new Database();
        if(!$sql = mysqli_query($db->_connection, $query))
        {
            throw new Exception("ERROR");
        }
        else 
        {
            echo ' <html lang="en-US"><head><a href="index.php" title="">Home</a></head>';
            echo ' <span ><a class="sign_button" href="logout.php" title="">Logout</a></span>';
            echo"<h1 style='color:orange;text-allign:center;' >Your Reservation :</h1>";
            echo("<table border=10  style='margin:auto;padding:3px'>");
        $first_row = true;
        while ($row = mysqli_fetch_assoc($sql)) 
                {
        if ($first_row) 
        {
        $first_row = false;
        // Output header row from keys.
        echo '<tr style="color:black">'; // table header
        foreach($row as $key => $field) 
            {
            echo '<th>' . htmlspecialchars($key) . '</th>';
            }
        echo '</tr >';
        }
        echo '<tr style="color:red;">'; //table data
         foreach($row as $key => $field) 
        {
         echo '<td style="padding:3px">' . htmlspecialchars($field) . '</td>';
        }
        
                }
        echo("</table>");
        }
    }

    public function sendMail()
    {
        $mail = new PHPMailer;
        //$mail->SMTPDebug = 2;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'tls://smtp.gmail.com:587';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'hazemmohamed585@gmail.com';                 // SMTP username
        $mail->Password = '01150012464';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->setFrom('Registration_Confirm@carRentalSystem.com', 'Car Rental System');
        
        $mail->addAddress('hazemmohamed28@live.com');               // Name is optional
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC('Registration_Confirm@carRentalSystem.com');
        $mail->addBCC('bcc@example.com');
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Registration Confrimation Mail';
        $mail->Body    = 'You have completed your reservation <b>SUCCESSFULLY!</b>';
        $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
           echo '<script type="text/javascript">alert("This is your Reservation Receipt , Please check your Mail inbox")</script>';
           echo 'message sent';
        }
    }

    public function sendMailToAdmin() {
         $mail = new PHPMailer;
        //$mail->SMTPDebug = 2;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'tls://smtp.gmail.com:587';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'hazemmohamed585@gmail.com';                 // SMTP username
        $mail->Password = '01150012464';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->setFrom('Registration_Confirm@carRentalSystem.com', 'Car Rental System');
        
        $mail->addAddress('chuckycharles32@gmail.com');               // Name is optional
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC('Registration_Confirm@carRentalSystem.com');
        $mail->addBCC('bcc@example.com');
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Registration Confrimation Mail';
        $query = "SELECT * FROM reserve order by id desc limit 1 ";
        $db = new Database;
        $sql = mysqli_query($db->_connection, $query);
        $first_row = true;
        $mail->Body    =
                '<b>A new Reservation has been added , check the reservation LIST </b> , LINK : <br></br> http://localhost/Car%20Rent/pages/login.php';
        $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
           //echo '<script type="text/javascript">alert("This is your Reservation Receipt , Please check your Mail inbox")</script>';
           echo 'message sent to admin';
        }
        
        
    }
            
   
}