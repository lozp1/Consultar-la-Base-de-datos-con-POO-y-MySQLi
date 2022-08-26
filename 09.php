<?php include 'includes/header.php';

# conectar a DB con Mysqli.
$db = new mysqli('localhost', 'root', 'root', 'bienesraices_crud');

# creamos el query.
$query = "SELECT titulo FROM propiedades";

# lo preparamos.
$stmt = $db->prepare($query);

# lo ejecutamos
$stmt->execute();

# creamos la variable
$stmt->bind_result($titulo);

# imprimir el resultado
while ($stmt->fetch()):
var_dump($titulo);

endwhile;

include 'includes/footer.php';
