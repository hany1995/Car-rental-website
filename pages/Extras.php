<?php

class Extras {
    public $ExtraItem;
    public $Extraprice;
    public $felo;
    

    
    
    public function AddExtra($data)
    {
        $this->ExtraItem = $data['ExtraItem'];
        $this->Extraprice = $data['Extraprice'];
        $query = "insert into `Extras` (`Extra`,`Extraprice`) values('$this->ExtraItem','$this->Extraprice') ";
        $db=new Database();
        $sql=  mysqli_query($db->_connection,$query);
        if($sql)
        {
            header('Location:usermanagment.php')  ;      
            
        }
    else {
            throw new Exception('cannot add  Extra item');
         }   
    }
    
    public function RentExtraItem($x)
    {
        
        $this->ExtraItem=$x;
        $query = "update `reserve` set ExtrasType = '$this->ExtraItem'order by id desc limit 1 ";
        $db= new Database();
        $sql=  mysqli_query($db->_connection,$query);
        if($sql)
        {
            header('Location:BookNow.php');
        }
    else {
            throw new Exception('cannot select  car');
         }   
    }
    
    
}
