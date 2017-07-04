<?php

class DataBaseConnection{

    public static $_connection ;
    private $_host = "localhost";
    private $_username = "root";
    private $_password = "0126657932";
    private $_database = "carrent";

    // Constructor
    private  function __construct() {
        self::$_connection = new mysqli($this->_host, $this->_username,
                        $this->_password, $this->_database);

        // Error handling
        if (mysqli_connect_error ()) {
            trigger_error("Failed to conencto to MySQL: " . mysqli_connect_error(),
                    E_USER_ERROR);
        }
    }

    // Magic method clone is empty to prevent duplication of connection
    private function __close() {
        
    }

    /*
      Get an instance of the Database
      @return Instance
     */

    public static function getInstance() {
        if (null == self::$_connection) { // If no instance then make one
           // echo 'first';
            new DataBaseConnection(); 
           // echo 'New Connection';
            return  self::$_connection;
        }
       // echo 'the same Connection';
       return  self::$_connection;
    }

}
