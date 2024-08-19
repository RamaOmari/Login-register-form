
<?php session_start();
//conection with database
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="luminouskey";
$conn=mysqli_connect("localhost","root","","luminouskey");


$patientsQuery=mysqli_query($conn,"SELECT * FROM patients ");
$patients=mysqli_fetch_all($patientsQuery,MYSQLI_ASSOC);


?>




<!--***********************************************************************************************************************************-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients list</title>
   <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--  google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> 
    <!-- Font Awesome library-->
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">
    <!-- css file-->
    <link href="css/patient.css" rel="stylesheet">
</head>
<body>
<div class="parent">
<div class="contaner ">



<table class="table caption-top "> 

 <caption class="caption"> Patients list : </caption>



<?php
 if(isset($_SESSION['msg'])){ ?>
    <div class="alert alert-success" role="alert">
       <?php  echo $_SESSION['msg'];?>
  </div> 
  <?php 
    unset($_SESSION['msg']);
  };

?>


    <thead class="table-dark">
       <div class="info">
       <tr class="information">
            <td> #</td>
            <td>  Name  <i class="fa-solid fa-circle-user"></i> </td>
            <td> Email <i class="fa-sharp fa-thin fa-at"></i></i></td>
            <td> password <i class="fa-solid fa-lock"></i> </td>
            
        </tr>
     </div>
    </thead>
     
    <tbody>

     
     <?php foreach ($patients as $patient ){ ?>
            <tr class="done">
                
                <td> <?php echo $patient['id'];?> </td>
                <td> <?php echo $patient['name'];?> </td>
                <td> <?php echo $patient['email'] ;?> </td>
                <td> <?php echo $patient['password'];?>  </td>
               
               
            </tr>

     <?php } ?>


    
    
  
    </tbody>



</table>



</div>
    
</body>
</html>







