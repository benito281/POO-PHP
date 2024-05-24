<?php


$db = new PDO('mysql:host=localhost; dbname=task_personal;', 'root', 'piRKy2475na?m');

//CREACIÓN DE CONSULTA
$query = "SELECT task_name, task_description FROM tasks";
//PREPARACIÓN DE CONSULTA
$stmt = $db->prepare($query);
//EJECUCIÓN
$stmt->execute();
//OBTENEMOS LOS RESULTADOS
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
//ITERAMOS
foreach($resultado as $task){
    echo $task['task_name'];
    echo "<br>";
    echo $task['task_description'];
}

//echo var_dump($resultado);


?>