<?php 
$course = "Matemáticas";
$tags = [
    "php", //0
    "laravel", //1
    "htmls", //2
    "java" //3
];
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
        <strong>Etiquetas:</strong>
        <ul>
            <?php foreach ($tags as $tag): ?>
                <li><?= $tag ?></li>
            <?php endforeach; ?>
        </ul>    
   </p>      

</body>
</html>