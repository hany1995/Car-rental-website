<?php
include_once  './database.php';
//include_once  './DataBaseConnection.php';


 class Person {
    protected $firstname;
    protected $lastname;
    protected $username;
    protected $email;
    protected $password;
    protected $felo;
    protected $id;
     
    
    public function setdataforlogin($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }
    public function getData() {
          if($this->username == 'admin' && $this->password == '123' )
        {
            return $this->login=1;
        }
        $query = "select * from users where `username` = '$this->username' and `password` = '$this->password'";
        $db= new database();
        $sql=mysqli_query($db->_connection, $query);
        //$sql=  $db->Select($query);       
        
        if (mysqli_num_rows($sql)) {
            return $this->login=2;
        }
       
        $query2 = "select * from admins where `username` = '$this->username' and `password` = '$this->password'";
        $db2= new database();
        $sql2=mysqli_query($db2->_connection, $query2);
        if (mysqli_num_rows($sql2)) {
            return $this->login=3;
        }
        else {
            throw new Exception("please enter ur user name and password correctly !");
        }
 }}