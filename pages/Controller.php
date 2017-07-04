<?php

if(isset($_POST['submit'])AND $_POST ['submit']== "Submit" )
   {
       $data['FirstName']=$_POST['firstname'];
       $data['LastName']=$_POST['lastname'];
       $data['username']=$_POST['username'];
       $data['Email']=$_POST['email'];
       $data['password']=$_POST['password'];
       
       
       try {
           include './Admin.php';
           $s = new Admin;
           $s->register($data);
           
           } 
       catch (Exception $ex) {
 echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="usermanagment.php" title="">Back </a></head>';
           
       }
}
if(isset($_POST['submit'])AND $_POST ['submit']== "Delete" )
{
     $data['id']=$_POST['id'];

       try {
           
           include './Admin.php';
          $fy = new Admin;
          $fy->CancelRerservation($data);
           
           
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="usermanagment.php" title="">Back </a></head>';       }}
       
       if(isset($_POST['submit'])AND $_POST ['submit']== "delete" )
{
     $data['id']=$_POST['id'];

       try {
           
           include './Admin.php';
          $fy = new Admin;
          $fy->DeleteUser($data); 
           
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="usermanagment.php" title="">Back </a></head>';       }}
       
       
       if(isset($_POST['submit'])AND $_POST ['submit']== "List" )
{
    try{
        include './Admin.php';
        $ft = new Admin;
       // $ft->connectToDB();
        $ft->ReservetionList("reserve");
        
        
    } catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="usermanagment.php" title="">Back </a></head>';
}}
    if(isset($_POST['submit'])AND $_POST ['submit']== "LIST" )
{
    try {
        include './Admin.php';
        $fd = new Admin;
        //$fd->connectToDB();
        $fd->UserList("users");
        } 
      catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="usermanagment.php" title="">Back </a></head>';        
}}



if(isset($_POST['submit'])AND $_POST ['submit']== "Add" )
   {
       $data['modelName']=$_POST['modelName'];
       $data['price']=$_POST['price'];
       $data['color']=$_POST['color'];
       
       
       try {
           include './Cars.php';
           $n=new Cars;
           //$n->connectToDB();
           
           $n->AddCar($data);
           
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="usermanagment.php" title="">Back </a></head>';           
   }}
   
   
   
   
   
   if ($_POST)
{
if(isset($_POST['submit'])AND $_POST ['submit']== "Login" )
{
   $username =  $_POST['username'];
   $password =  $_POST['password'];
   try 
   {
       include './Person.php'; 
       $ff = new Person;
       $ff->setdataforlogin($username, $password);
       $ff->getData();
       
       
       
       //$login = new login($username, $password);
      if($ff->login == 1)
          {
          session_start();
          $_SESSION['username']=$username;
          header('Location:usermanagment.php');
          }
       else if($ff->login == 2)
       {
          session_start();
          $_SESSION['username']=$username;
          header('Location:index.php');
       }
       else if ($ff->login == 3)
       {
           session_start();
          $_SESSION['username']=$username;
          header('Location:usermanagment.php');
       }
      /* else
       {
           echo 'error sweety';
       }*/
   } 
   catch (Exception $ex) 
   {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="login.php" title="">Back </a></head>';   }
   
   
}





if(isset($_POST['submit'])AND $_POST ['submit']== "Reigester" )
   {
       $data['firstname']=$_POST['firstname'];
       $data['lastname']=$_POST['lastname'];
       $data['username']=$_POST['username'];
       $data['email']=$_POST['email'];
       $data['password']=$_POST['password'];
       $data['mobnum']=$_POST['mobnum'];
       $data['ssn']=$_POST['ssn'];
       $data['BoD']=$_POST['BoD'];
       
       try {
           include './User.php';
           $s = new User;
           $s->register($data);
           
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="Reigister.php" title="">Back </a></head>';           
       }
}





if(isset($_POST['submit'])AND $_POST ['submit']== "lIst" )
{
    try{
        include 'Cars.php';
        $fb = new Cars;
        //$fb->connectToDB();
        $fb->CarList("cars");
        
    } catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="usermanagment.php" title="">Back </a></head>';
    }
}
if(isset($_POST['submit'])AND $_POST ['submit']== "Enquairy List" )
{
    try{
        include './Admin.php';
        $fb = new Admin;
        //$fb->connectToDB();
        $fb->EnquairyList("enquiry");
        
    } catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="usermanagment.php" title="">Back </a></head>';
    }
}





if(isset($_POST['submit'])AND $_POST ['submit']== "DElete" )
{

     $data['id']=$_POST['id'];

       try {
           
           include './Cars.php';
          $fy = new Cars;
          //$fy->connectToDB();
          $fy->DeleteCar($data);
          
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="usermanagment.php" title="">Back </a></head>';       }}
               
               
               
               
if(isset($_POST['submit'])AND $_POST ['submit']== "Edit" )
   {    
       $data['location']=$_POST['location'];
       $data['returnLocation']=$_POST['returnLocation'];
       $data['pickUpDate']=$_POST['pickUpDate'];
       $data['returnDate']=$_POST['returnDate'];
       $data['returnTime']=$_POST['returnTime'];
       $data['pickUpTime']=$_POST['pickUpTime'];
      
       
     try {
           include './reservation.php';
          $s= new reservation;
          //$s->connectToDB();
          $s->Update($data);
           
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="editreserve.php" title="">Back </a></head>';           
       }
   }
   if(isset($_POST['submit'])AND $_POST ['submit']== "Continue" )
   {    
       $data['location']=$_POST['location'];
       $data['returnLocation']=$_POST['returnLocation'];
       $data['pickUpDate']=$_POST['pickUpDate'];
       $data['returnDate']=$_POST['returnDate'];
       $data['returnTime']=$_POST['returnTime'];
       $data['pickUpTime']=$_POST['pickUpTime'];
       
     try {
           include './reservation.php';
           
          $f= new reservation;
          //$f->Date();
          //$f->Date();
           //$f->Date();
            $f->UserReserve($data);          
} 
       catch (Exception $ex) {
            echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";
    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();

               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="index.php" title="">Back To Home</a></head>';

           
       }
   }
   if(isset($_POST['submit'])AND $_POST ['submit']== "Select" )
{
    try {
        include './Cars.php';
        include './reservation.php';
        include_once './database.php';
        $f=new Cars;
        $s=new reservation;
        $db = new Database;
        //$f->connectToDB();
           $query = 'select `modelName` , `price` from `cars` where `carID` = 4';
           $sql1= mysqli_query($db->_connection ,$query);
           $fetch1= mysqli_fetch_assoc($sql1);
           //$fetch2 = mysql_fetch_assoc($sql1);
           $x = $fetch1['modelName'];
           $p = $fetch1['price'];
           $f->RentCar($x);
           $s->AddPrice($p);
           
           
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="chooseCar.php" title="">Back </a></head>';           
       }
}
if(isset($_POST['submit'])AND $_POST ['submit']== "SeLect" )
{
    try {
        include './Cars.php';
        include './reservation.php';
        include_once './database.php';
        $f=new Cars;
        $s=new reservation;
        $db = new Database;
        //$f->connectToDB();
           $query = 'select `modelName` , `price` from `cars` where `carID` = 2';
           $sql1= mysqli_query($db->_connection ,$query);
           $fetch1= mysqli_fetch_assoc($sql1);
           //$fetch2 = mysql_fetch_assoc($sql1);
           $x = $fetch1['modelName'];
           $p = $fetch1['price'];
           $f->RentCar($x);
           $s->AddPrice($p);
           
           
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="chooseCar.php" title="">Back </a></head>';                      
       }
}
if(isset($_POST['submit'])AND $_POST ['submit']== "sElect" )
    
{
  try {
        include './Cars.php';
        include './reservation.php';
        include_once './database.php';
        $f=new Cars;
        $s=new reservation;
        $db = new Database;
        //$f->connectToDB();
           $query = 'select `modelName` , `price` from `cars` where `carID` = 15';
           $sql1= mysqli_query($db->_connection ,$query);
           $fetch1= mysqli_fetch_assoc($sql1);
           //$fetch2 = mysql_fetch_assoc($sql1);
           $x = $fetch1['modelName'];
           $p = $fetch1['price'];
           $f->RentCar($x);
           $s->AddPrice($p);
           
           
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="chooseCar.php" title="">Back </a></head>';                      
       }
}
if(isset($_POST['submit'])AND $_POST ['submit']== "select" )
    
{
   try {
        include './Cars.php';
        include './reservation.php';
        include_once './database.php';
        $f=new Cars;
        $s=new reservation;
        $db = new Database;
        //$f->connectToDB();
           $query = 'select `modelName` , `price` from `cars` where `carID` = 6';
           $sql1= mysqli_query($db->_connection ,$query);
           $fetch1= mysqli_fetch_assoc($sql1);
           //$fetch2 = mysql_fetch_assoc($sql1);
           $x = $fetch1['modelName'];
           $p = $fetch1['price'];
           $f->RentCar($x);
           $s->AddPrice($p);
           
           
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="chooseCar.php" title="">Back </a></head>';                      
       }
}
if(isset($_POST['submit'])AND $_POST ['submit']== "selecT" )
    
{
   try {
        include './Cars.php';
        include './reservation.php';
        include_once './database.php';
        $f=new Cars;
        $s=new reservation;
        $db = new Database;
        //$f->connectToDB();
           $query = 'select `modelName` , `price` from `cars` where `carID` = 7';
           $sql1= mysqli_query($db->_connection ,$query);
           $fetch1= mysqli_fetch_assoc($sql1);
           //$fetch2 = mysql_fetch_assoc($sql1);
           $x = $fetch1['modelName'];
           $p = $fetch1['price'];
           $f->RentCar($x);
           $s->AddPrice($p);
           
           
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="chooseCar.php" title="">Back </a></head>';                      
       }
}
if(isset($_POST['submit'])AND $_POST ['submit']== "sElEct" )
    
{
   try {
        include './Cars.php';
        include './reservation.php';
        include_once './database.php';
        $f=new Cars;
        $s=new reservation;
        $db = new Database;
        //$f->connectToDB();
           $query = 'select `modelName` , `price` from `cars` where `carID` = 8';
           $sql1= mysqli_query($db->_connection ,$query);
           $fetch1= mysqli_fetch_assoc($sql1);
           //$fetch2 = mysql_fetch_assoc($sql1);
           $x = $fetch1['modelName'];
           $p = $fetch1['price'];
           $f->RentCar($x);
           $s->AddPrice($p);
           
           
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="chooseCar.php" title="">Back </a></head>';                      
       }
}
if(isset($_POST['submit'])AND $_POST ['submit']== "selEct" )
    
{
    try {
        include './Cars.php';
        include './reservation.php';
        include_once './database.php';
        $f=new Cars;
        $s=new reservation;
        $db = new Database;
        //$f->connectToDB();
           $query = 'select `modelName` , `price` from `cars` where `carID` = 9';
           $sql1= mysqli_query($db->_connection ,$query);
           $fetch1= mysqli_fetch_assoc($sql1);
           //$fetch2 = mysql_fetch_assoc($sql1);
           $x = $fetch1['modelName'];
           $p = $fetch1['price'];
           $f->RentCar($x);
           $s->AddPrice($p);
           
           
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="chooseCar.php" title="">Back </a></head>';                      
       }
}
if(isset($_POST['submit'])AND $_POST ['submit']== "seleCt" )
    
{
  try {
        include './Cars.php';
        include './reservation.php';
        include_once './database.php';
        $f=new Cars;
        $s=new reservation;
        $db = new Database;
        //$f->connectToDB();
           $query = 'select `modelName` , `price` from `cars` where `carID` = 10';
           $sql1= mysqli_query($db->_connection ,$query);
           $fetch1= mysqli_fetch_assoc($sql1);
           //$fetch2 = mysql_fetch_assoc($sql1);
           $x = $fetch1['modelName'];
           $p = $fetch1['price'];
           $f->RentCar($x);
           $s->AddPrice($p);
           
           
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="chooseCar.php" title="">Back </a></head>';                      
       }
}
if(isset($_POST['submit'])AND $_POST ['submit']== "seleCT" )
    
{
   try {
        include './Cars.php';
        include './reservation.php';
        include_once './database.php';
        $f=new Cars;
        $s=new reservation;
        $db = new Database;
        //$f->connectToDB();
           $query = 'select `modelName` , `price` from `cars` where `carID` = 11';
           $sql1= mysqli_query($db->_connection ,$query);
           $fetch1= mysqli_fetch_assoc($sql1);
           //$fetch2 = mysql_fetch_assoc($sql1);
           $x = $fetch1['modelName'];
           $p = $fetch1['price'];
           $f->RentCar($x);
           $s->AddPrice($p);
           
           
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="chooseCar.php" title="">Back </a></head>';                      
       }
}
if(isset($_POST['submit'])AND $_POST ['submit']== "selECT" )
    
{ try {
        include './Cars.php';
        include './reservation.php';
        include_once './database.php';
        $f=new Cars;
        $s=new reservation;
        $db = new Database;
        //$f->connectToDB();
           $query = 'select `modelName` , `price` from `cars` where `carID` = 12';
           $sql1= mysqli_query($db->_connection ,$query);
           $fetch1= mysqli_fetch_assoc($sql1);
           //$fetch2 = mysql_fetch_assoc($sql1);
           $x = $fetch1['modelName'];
           $p = $fetch1['price'];
           $f->RentCar($x);
           $s->AddPrice($p);
           
           
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="chooseCar.php" title="">Back </a></head>';                      
       }
}
if(isset($_POST['submit'])AND $_POST ['submit']== "seLECT" )
    
{
    try {
        include './Cars.php';
        include './reservation.php';
        include_once './database.php';
        $f=new Cars;
        $s=new reservation;
        $db = new Database;
        //$f->connectToDB();
           $query = 'select `modelName` , `price` from `cars` where `carID` = 13';
           $sql1= mysqli_query($db->_connection ,$query);
           $fetch1= mysqli_fetch_assoc($sql1);
           //$fetch2 = mysql_fetch_assoc($sql1);
           $x = $fetch1['modelName'];
           $p = $fetch1['price'];
           $f->RentCar($x);
           $s->AddPrice($p);
           
           
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="chooseCar.php" title="">Back </a></head>';                      
       }
}
if(isset($_POST['submit'])AND $_POST ['submit']== "sELeCT" )
    
{
   try {
        include './Cars.php';
        include './reservation.php';
        include_once './database.php';
        $f=new Cars;
        $s=new reservation;
        $db = new Database;
        //$f->connectToDB();
           $query = 'select `modelName` , `price` from `cars` where `carID` = 14';
           $sql1= mysqli_query($db->_connection ,$query);
           $fetch1= mysqli_fetch_assoc($sql1);
           //$fetch2 = mysql_fetch_assoc($sql1);
           $x = $fetch1['modelName'];
           $p = $fetch1['price'];
           $f->RentCar($x);
           $s->AddPrice($p);
           
           
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="chooseCar.php" title="">Back </a></head>';                      
       }
}



if(isset($_POST['submit'])AND $_POST ['submit']== "Book Now" )
{
    try{
        include './reservation.php';
        $fb = new reservation;
        $fb->generateReserveReceipt();
        $fb->sendMail();
        $fb->sendMailToAdmin();
    } catch (Exception $ex) {
        $ex->getMessage();

}}
if(isset($_POST['submit'])AND $_POST ['submit']== "MAKE ENQUIRY" )
   {
       $data['subject']=$_POST['subject'];
       echo $_SESSION['username'];
       try {
           include 'enquiry.php';
          $en=new enquiry;
          $en->setdata($data);
          $en->MakeEnquiry();
           } 
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="chooseExtras.php" title="">Back </a></head>';                      
       }
}
if(isset($_POST['submit'])AND $_POST ['submit']== "Continue to checkout")
{
    try {
           include './Extras.php';
        include './reservation.php';
        
            $f=new Extras;
            $x = $_POST['checkbox_extras'];
            $f->RentExtraItem($x);  
            $i=1;
           $s=new reservation;
           if($x)
           {
           $s->AddTotalPrice($i);
           }
        }
                    
           
       catch (Exception $ex) {
echo"<h1 style='color:blue;text-allign:center;' > Sorry</h1>";

    echo "<h1 style='color:blue;text-allign:center;' /h1>",$ex->getMessage();
               echo '</br></br></br>';
               echo ' <html lang="en-US"><head><a href="BookNow.php" title="">Back </a></head>';                      
       } 
    
}



if(isset($_POST['submit'])AND $_POST ['submit']== "View My Profile" )
{
    try{
        include './User.php';
        $fb = new User;
        $fb->UserProfile();
    } catch (Exception $ex) {
        $ex->getMessage();

}}


       }