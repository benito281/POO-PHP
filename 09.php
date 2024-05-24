<?php
//CONEXIÓN A BD
$db = new mysqli('localhost', 'root', 'piRKy2475na?m','task_personal');

//CREACIÓN DE CONSULTA
$query = "SELECT task_name, task_description FROM tasks";
//PREPARACIÓN DE CONSULTA
$stmt = $db->prepare($query);
//EJECUCIÓN
$stmt->execute();
//CREAMOS LA VARIABLE
$stmt->bind_result($task_name, $task_description);
//ASIGNAMEOS EL RESULTADO
$stmt->fetch();
//IMPRIMIR RESULTADO
echo var_dump($task_name);
echo var_dump($task_description);

/* while ($row) :
    echo var_dump($row);
endwhile; */
//echo var_dump($resultado->fetch_assoc());



?>