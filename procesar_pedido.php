<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el producto y la cantidad del formulario
    $producto = $_POST["producto"];

    // Incrementar el contador del producto en el archivo correspondiente
    $archivo_contador = "contador_" . strtolower(str_replace(" ", "_", $producto)) . ".txt";
    if (file_exists($archivo_contador)) {
        $contador = intval(file_get_contents($archivo_contador));
        $contador++;
        file_put_contents($archivo_contador, $contador);
    } else {
        file_put_contents($archivo_contador, "1");
    }

    // Redireccionar de vuelta a la página principal
    header("Location: index.html");
    exit();
}
?>