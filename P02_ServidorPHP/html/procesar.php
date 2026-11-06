<?php

function limpiar($dato){
    return htmlspecialchars($dato, ENT_QUOTES, "UTF-8");
}

$nombre = $_POST["nombre"] ?? "";
$correo = $_POST["correo"] ?? "";
$actividad = $_POST["nivel"] ?? "";
$turno = $_POST["turno"] ?? "";
$observaciones = trim($_POST["observaciones"] ?? "");
 
$portatil = isset($_POST["portatil"]);
$auriculares = isset($_POST["auriculares"]);
$materialEscritura = isset($_POST["materialEscritura"]);
 
$actividades = [
    "1" => "Robótica",
    "2" => "Desarrollo de videojuegos",
    "3" => "Ciberseguridad",
    "4" => "Diseño e impresión 3D"
];
 
$nombreActividad = $actividades[$actividad] ?? "No especificada";
 
$turnos = [
    "Manana" => "Mañana",
    "Tarde" => "Tarde"
];
 
$nombreTurno = $turnos[$turno] ?? "No especificado";

$materiales = [];
if ($portatil) {
    $materiales[] = "Ordenador portátil";
}
if ($auriculares) {
    $materiales[] = "Auriculares";
}
if ($materialEscritura) {
    $materiales[] = "Material de escritura";
}
 
$textoMateriales = $materiales ? implode(", ", $materiales) : "Sin material adicional";
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de la inscripción</title>
    <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
    <div class="contenedor">
        <h1>Resultado de la inscripción</h1>
 
        <p class="descripcion">
            El servidor ha recibido los datos enviados desde el formulario
        </p>
 
        <div class="resultado">
            <div class="dato">
                <span class="etiqueta">Nombre y apellidos:</span>
                <span><?= limpiar($nombre) ?></span>
            </div>
 
            <div class="dato">
                <span class="etiqueta">Correo electrónico:</span>
                <span><?= limpiar($correo) ?></span>
            </div>
 
            <div class="dato">
                <span class="etiqueta">Actividad:</span>
                <span><?= limpiar($nombreActividad) ?></span>
            </div>
 
            <div class="dato">
                <span class="etiqueta">Turno:</span>
                <span><?= limpiar($nombreTurno) ?></span>
            </div>
 
            <div class="dato">
                <span class="etiqueta">Material seleccionado:</span>
                <span><?= limpiar($textoMateriales) ?></span>
            </div>
 
            <?php if ($observaciones !== ""): ?>
                <div class="dato">
                    <span class="etiqueta">Observaciones:</span>
                    <span><?= limpiar($observaciones) ?></span>
                </div>
            <?php endif; ?>
        </div>
 
        <div class="botones">
            <a href="index.html" class="boton-enlace">Volver al formulario</a>
        </div>
 
        <p class="nota">
            Esta pagina se ha generado en el servidor mediante PHP y POST
        </p>
    </div>
</body>
</html>