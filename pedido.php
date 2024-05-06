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
$ruta_imagen = "https://www.google.com/imgres?q=hamburguesas&imgurl=https%3A%2F%2Fresizer.glanacion.com%2Fresizer%2Fv2%2Fhamburguesa-blt-de-john-john-burger-bacon-lettuce-RHVGX3MHVRB7VGEXBEVCCZHW5I.jpg%3Fauth%3D53776ee5a203ae1fbe457df3473f7c2d9470016ad51a458c73c5b950966a4f57%26width%3D768%26quality%3D70%26smart%3Dfalse&imgrefurl=https%3A%2F%2Fwww.lanacion.com.ar%2Flifestyle%2Fes-experto-en-hamburguesas-y-revela-el-error-mas-comun-al-hacerlas-caseras-que-ingredientes-no-debes-nid21092022%2F&docid=fwwqUYStROiUGM&tbnid=ATmIqgW7rhsjMM&vet=12ahUKEwj65Pfm-_mFAxWsupUCHRqRCjQQM3oECGUQAA..i&w=768&h=768&hcb=2&ved=2ahUKEwj65Pfm-_mFAxWsupUCHRqRCjQQM3oECGUQAA";
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