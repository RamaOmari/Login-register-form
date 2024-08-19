<?php session_start();

$admainEmail="rama@gmail.com";
$admainPassword="123456";

$email= $_POST['email'];
$password= $_POST['password'];

$mistakes=[];
//conection with database

/*$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="luminouskey";


 $conn=mysqli_connect($db_host, $db_user, $db_pass, $db_name);*/


    

 //Validation email
 if(empty($email)){
     $mistakes[]= "Please enter your email";
 }
 //Validation password
 if(empty($password)){
    $mistakes[]= "Please enter your password";
}




if(empty($mistakes)){

    if($email== $admainEmail){
        if($password==$admainPassword){
            $_SESSION['login']="true";
            header("location: home.php");
    
        }else{
           $mistakes[]="password Invalid ";
        }
    
    }else{
        $mistakes[]="Email invalid";
    
    
    }}
    
if (!empty($mistakes)){

    $_SESSION['mistakes']=$mistakes;
    header("location: loginn.php");
}

    



?>