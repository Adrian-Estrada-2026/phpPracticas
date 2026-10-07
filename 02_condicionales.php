<?php 
$course = "Matemáticas";
$archived =false; //false
$status = $archived ? "Archivado" : "Activo";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $course; ?></title>
</head>
<body>
    <h1>Welcome to <?= $course ?> </h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt eum, doloremque quis repellendus quasi suscipit magni necessitatibus veniam. Temporibus aliquam a asperiores fuga vitae adipisci enim magni dignissimos dolorem impedit.</p>
   
   
   <p>
    Este curso esta <?= $status ?>.
   </p>      

</body>
</html>