<?php 

require '02_Course.php';

$course = new Course (
    title:'Curso profesional de php y laravel',
    subtitle:'Aprende php y laravel desde 0',
    description:'Lorem elipsium ......................................',
    tags:['PHP','Laravel','JavaScript']
);
// Luego de un curso contruido podemos actualizarlo


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course ->title ?></title>
</head>
<body>
    <?= $course ?>
</body>
</html>