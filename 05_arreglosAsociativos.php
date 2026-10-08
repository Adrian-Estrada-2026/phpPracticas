<?php 
$course = [
    'title'=> 'Curso profesional de PHP y Laravel',
    'subtitle' => 'Aprende PHP y Laravel desde 0',
    'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt eum .....",
    'tags' => [
        'PHP',         //0
        'Laravel',     //1
        'JavaScript',  //2
        'HTML',        //3
        'CSS',         //4
        'MySQL',       //5
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course['title'] ?></title>
</head>
<body>
    <h1>Welcome to <?= $course['title'] ?> </h1>
    <h2><?= $course ['subtitle'] ?></h2>
    <p><?= $course['description'] ?></p>
    
   <p>
        <strong>Etiquetas:</strong>
        <ul>
            <?php foreach ($course ['tags'] as $tag): ?>
                <li><?= $tag ?></li>
            <?php endforeach; ?>
        </ul>    
   </p>      

</body>
</html>