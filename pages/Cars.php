<?php


if(!class_exists("./database.php"))
{
    include_once './database.php';
}

class Cars 
{
     private $modelName;
    private $price;
    private $color;
    public $Date;




    public function AddCar($data)
    {
        $this->modelName = $data['modelName'];
        $this->price = $data['price'];
        $this->color = $data['color'];
        $query = "insert into `cars` (`carID`,`modelName`, `price`, `Color`) values('','$this->modelName','$this->price','$this->color') ";
        $db = new Database();
        $sql=  $db->Insert($query);
        if($sql)
        {
            header('Location:usermanagment.php')  ;      
            
        }
    else {
            throw new Exception('cannot add  car');
         }   
    }
    public function RentCar($x)
    {
        $db = new Database();
        $qu = 'select `selectCar` from reserve';
        $n=mysqli_query($db->_connection, $qu);
                //mysql_query('select `selectCar` from reserve ');
       while($fetch1= mysqli_fetch_assoc($n))
       {
       
        if (in_array($x, $fetch1))
            {
                $qu1=  "select `returnDate`from reserve where selectCar='$x'";
               $db= new Database();
                $x=mysqli_query($db->_connection, $qu1);
               while ($fetch2= mysqli_fetch_assoc($x))
               {
                $tt = strtotime($fetch2['returnDate']);
                $v=$fetch2['returnDate'];
                
                $qu2="select `pickUpDate` from reserve order by id desc limit 1";
                $z=mysqli_query($db->_connection, $qu2);
                                while ($fetch3= mysqli_fetch_assoc($z))
                {
                 $uu = strtotime($fetch3['pickUpDate']);
                 if($uu < $tt)
                   {
                     $l="This Car is not available in this Time !! it will be available after  '$v'";
                    throw new Exception($l);
                    
                }
                
            
    }}}}
        
              $this->carType=$x;
        $query = "update `reserve` set selectCar = '$this->carType' order by id desc limit 1 ";
        $sql=  mysqli_query($db->_connection ,$query);
        if($sql)
        {
            header('Location:chooseExtras.php')  ;      
        }
    else {
            throw new Exception('cannot select  car');
         }   
    }
    public function CarList($tablename)
    {
                $this->tablename = $tablename;

        $query = "SELECT * FROM `$this->tablename` ORDER by `CarID`";
        $db = new Database();
        if(!$sql = mysqli_query($db->_connection ,$query))
        {
            throw new Exception("ERROR");
        }
        
        else 
        {
            echo("<table border=1>");
        $first_row = true;
        while ($row = mysqli_fetch_assoc($sql)) 
                {
        if ($first_row) 
        {
        $first_row = false;
        // Output header row from keys.
        echo '<tr>';
        foreach($row as $key => $field) 
            {
            echo '<th>' . htmlspecialchars($key) . '</th>';
            }
        echo '</tr>';
        }
        echo '<tr>';
         foreach($row as $key => $field) 
        {
         echo '<td>' . htmlspecialchars($field) . '</td>';
        }
        echo '</tr>';
                }
        echo("</table>");
        }
    }
    public function DeleteCar($data)
        {        $this->id=$data['id'];

            $query="DELETE FROM `cars` WHERE `carID` ='$this->id'";
            $db = new Database();
            $sql=  $db->Delete($query);
            if($sql)
            {

                
                header("location:usermanagment.php");         
                
            }
            else 
            {
                throw new Exception("Error");
            }
        }
}
 
