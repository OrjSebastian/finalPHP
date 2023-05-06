<?php
// Imprimir los valores del formulario
    echo "<p>Valores del formulario:</p>";
    echo "<ul>";
	echo "<li>El valor en el ID es: " . $_POST["id"] . "</li>";
    echo "<li>El valor en Nombres es: " . $_POST["nombres"] . "</li>";
    echo "<li>El valor en Apellidos es: " . $_POST["apellidos"] . "</li>";
    echo "<li>El valor en Edad es: " . $_POST["edad"] . "</li>";
    echo "<li>El valor en Correo es: " . $_POST["correo"] . "</li>";
    echo "</ul>";
	echo "---------------------------------------------------------------------------------<br>";

//Conexión a la base de datos
$host = "localhost";
$port = "5432";
$dbname = "trabajoPHP";
$user = "postgres";
$password = "123456";

$db = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

//Obtener los valores del formulario
$id = $_POST["id"];
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$edad = $_POST["edad"];
$correo = $_POST["correo"];

//Insertar los valores en la tabla 'estudiante'
$query = "INSERT INTO estudiantes (id, nombres, apellidos, edad, correo) VALUES ('$id', '$nombres', '$apellidos', '$edad', '$correo')";
$result = pg_query($db, $query);

echo "Los datos han sido insertados correctamente en la tabla estudiantes.";

?>
