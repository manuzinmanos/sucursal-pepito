let pedidos = [];

function mostrarFormulario() {
    document.getElementById("formulario").style.display = "block";
}

function agregarPedido() {
    const producto = document.getElementById("producto").value;
    const cantidad = parseInt(document.getElementById("cantidad").value);
    const combo = document.getElementById("combo").checked;

    const pedido = {
        producto: producto,
        cantidad: cantidad,
        combo: combo
    };

    pedidos.push(pedido);
    mostrarPedidoActual();
}

function mostrarPedidoActual() {
    let html = "<h2>Pedido Actual</h2>";
    html += "<ul>";
    pedidos.forEach((pedido, index) => {
        html += `<li>${pedido.cantidad} ${pedido.producto}`;
        if (pedido.combo) {
            html += " (Combo)";
        }
        html += `<button onclick="eliminarPedido(${index})">Eliminar</button></li>`;
    });
    html += "</ul>";

    document.getElementById("pedidoActual").innerHTML = html;
}

function eliminarPedido(index) {
    pedidos.splice(index, 1);
    mostrarPedidoActual();
}