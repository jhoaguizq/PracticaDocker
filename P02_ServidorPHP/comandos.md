## HTML

## Enviar los datos mediante POST 
<form action="procesar.php" method="POST">
 
## Añadir observaciones opcionales 
<label for="observaciones">Observaciones:</label>
<textarea id="observaciones" name="observaciones" rows="4"></textarea>

## PHP

##  Recoger un dato enviado mediante POST
$nombreVariable = $_POST["nombre"] ?? "";
 
## Comprobar si se ha seleccionado la casilla
$portatil = isset($_POST["portatil"]);
 
## Mostrar las observaciones solo si tienen contenido
if ($observaciones != "") {
    echo '<p>Observaciones: ' . limpiar($observaciones) . '</p>';
}

## Comandos Docker
 
## Construir la imagen
docker build -t p02-php:latest .
 
## Crear y arrancar el contenedor
docker run -d --name formulario-web -p 8080:80 p02-php:latest

## Detener el contenedor
docker stop formulario-web
 
## Comprobar que está detenido
docker ps -a
 
## Volver a iniciar el contenedor
docker start formulario-web
 
## Eliminar el contenedor
docker rm formulario-web
 
## Eliminar la imagen
docker rmi p02-php:latest