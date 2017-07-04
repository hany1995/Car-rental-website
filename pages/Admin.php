<?php
include_once './Person.php';
include './interface.php';
//include './database.php';
if(!class_exists("./database.php"))
{
    include_once './database.php';
}


class Admin extends Person implements interace {
    
    public function register($data) {
        
        $this->firstname = $data['FirstName'];
        $this->lastname = $data['LastName'];
        $this->username = $data['username'];
        $this->email = $data['Email'];
        $this->password = $data['password'];
        $query = "insert into `Admins` (`FirstName`, `LastName`, `username`, `Email`, `password`,`id`) values('$this->firstname','$this->lastname','$this->username','$this->email','$this->password','') ";
        $db = new database();
        $sql =  $db->Insert($query);
        //$sql = mysqli_query($db->_connection, $query);
        if($sql)
        {
            header('Location:usermanagment.php')  ;      
            
        }
    else {
            throw new Exception('Not Registered');
         }   
}






    public function CancelRerservation($data)
        {
        
            $this->id=$data['id'];     
            $query="DELETE FROM `reserve` WHERE `id` ='$this->id'";
            $db= new database();
            $sql=  $db->Delete($query);
        if(!$sql)
            {
                                throw new Exception("Error");

               // header("location:usermanagment.php");         
                
            }
            else 
            {
                header("location:usermanagment.php");         
            }
        }
        
        
        
        public function DeleteUser ($data)
        {
             $this->id=$data['id'];
        $query="DELETE FROM `users` WHERE `id` ='$this->id'";
$db= new database();
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
        
        
        
        public function ReservetionList($tablename)
        {
                    $this->tablename = $tablename;
$query = "SELECT * FROM `$this->tablename` ORDER by `id`";
$db= new database();
        $sql= mysqli_query($db->_connection,$query);
        if(!$sql)
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
    
    
    
    public function UserList($tablename)
    {
        $this->tablename = $tablename;
        $query = "SELECT * FROM `$this->tablename` ORDER by `id`";
        $db = new Database;
        if(!$sql = mysqli_query($db->_connection ,$query))
        {
            throw new Exception("ERROR");
        }
    else 
        {
            
        /* 
        echo "<table border=1>";
        while($row= mysql_fetch_array($sql))
         {
           print_r($row['firstname']."\t\t".$row['email']."\t\t".$row['lastname']."\t\t".$row['username']."\t\t".$row['mobile_number']."\t\t".$row['ssn']."\t\t".$row['BoD']."\t\t".$row['id']."<br");
           echo("</table>");
         }*/
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
        
     
         //echo "</table";
         //mysql_close();
     
        }
                  //return $data;
                  //r
    }

    public function EnquairyList($tablename)
        {
                    $this->tablename = $tablename;
$query = "SELECT * FROM `$this->tablename` ORDER by `id`";
$db = new Database;
        if(!$sql = mysqli_query($db->_connection,$query))
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
    
}

