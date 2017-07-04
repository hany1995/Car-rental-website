<?php
include_once './Person.php';
include './interface.php';
if(!class_exists("./database.php"))
{
    include_once './database.php';
}
//include_once './database.php';;
class User extends Person implements interace{
    
    private $mobnum;
    private $ssn;
    private $BoD;
    public $hish ;
    public $login;
    public $userName;






    public function register($data) {
        
        $this->firstname = $data['firstname'];
        $this->lastname = $data['lastname'];
        $this->username = $data['username'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->mobnum = $data['mobnum'];
        $this->ssn = $data['ssn'];
        $this->BoD = $data['BoD'];
        $query = "insert into `users` (`firstname`, `lastname`, `username`, `email`, `password`, `mobile_number`, `ssn`, `BoD`,`id`) values('$this->firstname','$this->lastname','$this->username','$this->email','$this->password','$this->mobnum','$this->ssn','$this->BoD','') ";
        $db= new database();
        
        $db->Insert($query);
        if($query)
        {
            header('Location:login.php')  ;      
            
        }
    else {
            throw new Exception('Not Registered');
         }   
    
        
    } 
   
    
 public function UserProfile()
    {
                session_start();

     if (isset($_SESSION['username'])) 
            {
                    $this->userName=  $_SESSION['username'];
    
        }
        $query = "SELECT * FROM `users` where `username`= '$this->userName' ";
        $db = new Database();
        if(!$sql = mysqli_query($db->_connection, $query))
        {
            throw new Exception("ERROR");
        }
        else 
        {
            echo ' <html lang="en-US"><head><a href="index.php" title="">Home</a></head>';
            echo '</br><span ><a class="sign_button" href="logout.php" title="">Logout</a></span>';
            echo"<h1 style='color:black;text-allign:center;' >Yor Information :</h1>";
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
                    echo"<h1 style='color:black;text-allign:center;' >Yor Last Reservation :</h1>";
                    
                     $query1 = "SELECT * FROM `reserve`  where `username`= '$this->userName' and `id` > 224  ";
        $db = new Database();
       $sql1 = mysqli_query($db->_connection, $query1);
                    
                    echo("<table border=10  style='margin:auto;padding:3px'>");
        $first_row = true;
        while ($row = mysqli_fetch_assoc($sql1)) 
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
    }}

