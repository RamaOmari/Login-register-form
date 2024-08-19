<?php session_start();

//conection with database

$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="luminouskey";



$conn=mysqli_connect($db_host, $db_user, $db_pass, $db_name);



    $name= $_POST['name'];
    $email= $_POST['email'];
    $password=$_POST['password'];
    

$errors=[];

  //Validation name
    if(empty($name)){
        $errors[]=" Please enter your name";    
    }

  //Validation email
    if(empty($email)){
        $errors[]= "Please enter your email";
    }else if(!filter_var ($email , FILTER_VALIDATE_EMAIL)){
        $errors[]="not valid email";
    }

  //Validation password
    if(empty($password)){
        $errors[]= "Please enter your password";
    }
    //$password = md5($password);
 //***********
 $password=password_hash($_POST['password'], PASSWORD_DEFAULT) ;
 
 if(!empty($errors)){
    $_SESSION['errors']=$errors;
    header("location: regester.php");
    exit();
}elseif(empty($errors)){
     header("location: index.php");
}
    

   
    

$sql= "INSERT INTO patients (name,email,password)"
."VALUES('$name','$email','$password')";
mysqli_query($conn , $sql);





$_SESSION['msg']=" Added successfully";
header("location: index.php");

 



?>