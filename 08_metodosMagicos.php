<?php 

require '02_Course.php';

$course = new Course (
    title:'Curso profesional de php y laravel',
    subtitle:'Aprende php y laravel desde 0',
    description:'Lorem elipsium ......................................',
    tags:['PHP','Laravel','JavaScript']
);
// Luego de un curso contruido podemos actualizarlo

$course ->addTag('Frameworks');
$course ->addTag('Desarrollo de software');
$course ->addTag('');
$course ->addTag('HTML');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course ->title ?></title>
</head>
<body>
    <h1>Welcome to <?= $course->title ?> </h1>
    <h2><?= $course ->subtitle ?></h2>
    <p><?= $course->description ?></p>
    
   <p>
        <strong>Tags:</strong>
        <ul>
            <?php foreach ($course ->tags as $tag): ?>
                <li><?= $tag ?></li>
            <?php endforeach; ?>
        </ul>    
   </p>      

</body>
</html>