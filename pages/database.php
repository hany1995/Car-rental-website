<?php
require './DataBaseConnection.php';
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author Tamer
 */
class Database {
    public  $_connection;
    public  function __construct() {
        $this->_connection = DataBaseConnection::getInstance();
    }

     public function Select($sql) {
         $result=array();
         
         $rs =mysqli_query($this->_connection,$sql);

         while($row = mysqli_fetch_assoc($rs)){
             $result[]=$row;
         }
        return $result ;
    }

    public function Insert($sql){
        
        if ( mysqli_query($this->_connection,$sql))
            return TRUE;
        else 
            return FALSE;
       
    }
    
    public function Delete($sql){
    
        if ( mysqli_query($this->_connection,$sql))
            return TRUE;
        else
            return FALSE;
         
    }
}
?>
