<?php
date_default_timezone_set('Africa/Cairo');

class enquiry 
{  
    private $subject;
    private $name;
    private $date;


    private $felo;
    
    
    public function setdata($data)
            
    {
        session_start();

        if (isset($_SESSION['username'])) 
            {
                    $this->name=  $_SESSION['username'];
    
        }
        $this->subject = $data['subject'];
        
        $this->date= date("Y-m-d H:i:s", time());
        
     
    }
         public function connectToDB() 
    {
            include_once 'database.php';
        //$kos = "vars.php";
        $this->felo = database::getInstance();
       
        //$this->felo = new database();
        
        //$this->felo = new database($kos);
       
        
    }
    public function MakeEnquiry()
    {
        $query = "insert into `enquiry` (`id`,`subject`, `enquiryDate`,`username`) values('','$this->subject','$this->date','$this->name') ";
        $sql=  mysql_query($query);
        if($sql)
        {
            header('Location:index.php')  ;      
            
        }
    else {
            throw new Exception('cannot make enquiry');
         }   
    }
    
    function close()
    {
        $this->felo->close();
    }   
}
