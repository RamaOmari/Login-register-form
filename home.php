<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

 <!-- Font Awesome library-->
 <link href="css/all.min.css" rel="stylesheet">
<link href="css/all.css" rel="stylesheet">
<!--  google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Noto+Nastaliq+Urdu:wght@400..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">



    <!-- css file-->
<link href="css/patient.css"  type=" text/css"     rel="stylesheet">
</head>
<body>
    
</body>
</html>



<?php session_start();

if(isset($_SESSION['login'])){ ?>
<div class="contener">

 <div class="r"> <i class="fa-regular fa-moon"></i><?php echo "رمضان كريم"; ?> </div>
 <div class="e"> 
 <p><a href="logout.php" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Logout</a></p>
 </div>
 

    

</div>
 
<?php
}else{
    header("location: loginn.php");
}
?>



