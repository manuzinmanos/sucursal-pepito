<?php
// Función para obtener el contador de un producto
function obtenerContador($producto) {
    $archivo_contador = "contador_" . strtolower(str_replace(" ", "_", $producto)) . ".txt";
    if (file_exists($archivo_contador)) {
        return intval(file_get_contents($archivo_contador));
    } else {
        return 0;
    }
}

$productos = array(
    "Hamburguesas" => array("cantidad" => 10, "imagen" => "hamburguesa.jpg"),
    "Papafritas" => array("cantidad" => 20, "imagen" => "papafritas.jpg"),
    "Gaseosa" => array("cantidad" => 30, "imagen" => "gaseosa.jpg"),
    "Combo a elección" => array("cantidad" => 15, "imagen" => "combo.jpg")
);

echo "<h2>Stock Disponible</h2>";
echo "<div class='stock'>";
foreach ($productos as $producto => $detalles) {
    echo "<div class='producto'>";
    echo "<img src='img/{$detalles['imagen']}' alt='{$producto}' class='imagen'>";
    echo "<p>{$producto}: {$detalles['cantidad']} unidades</p>";
    echo "<p>Veces pedido: " . obtenerContador($producto) . "</p>";
    echo "</div>";
}
echo "</div>";
?>