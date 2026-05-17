<?php
// Arreglo de productos en PHP
$productos = [
    [
        "id" => 1,
        "nombre" => "Laptop",
        "descripcion" => "Laptop de alto rendimiento",
        "precio" => 800,
        "imagen" => "imagenes/laptops.png"
    ],
    [
        "id" => 2,
        "nombre" => "Celular",
        "descripcion" => "Smartphone moderno",
        "precio" => 500,
        "imagen" => "imagenes/celulares.png"
    ],
    [
        "id" => 3,
        "nombre" => "Audífonos",
        "descripcion" => "Audífonos inalámbricos",
        "precio" => 100,
        "imagen" => "imagenes/audifonos.png"
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Tienda Online</title>

<style>
body {
    font-family: Arial;
    background: #f4f4f4;
    text-align: center;
}

h1 {
    color: #333;
}

.productos {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.producto {
    background: white;
    padding: 15px;
    border-radius: 10px;
    width: 200px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}

.producto img {
    width: 100%;
}

button {
    background: green;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
}

button:hover {
    background: darkgreen;
}

#carrito {
    margin-top: 30px;
    background: white;
    padding: 15px;
    border-radius: 10px;
    width: 300px;
    margin-left: auto;
    margin-right: auto;
}
</style>

</head>

<body>

<h1>🛍️ Tienda Online</h1>

<div class="productos">
<?php foreach($productos as $producto): ?>
    <div class="producto">
        <img src="<?= $producto['imagen'] ?>">
        <h3><?= $producto['nombre'] ?></h3>
        <p><?= $producto['descripcion'] ?></p>
        <p><strong>$<?= $producto['precio'] ?></strong></p>

        <button onclick="agregarCarrito('<?= $producto['nombre'] ?>', <?= $producto['precio'] ?>)">
            Agregar al carrito
        </button>
    </div>
<?php endforeach; ?>
</div>

<div id="carrito">
    <h2>🛒 Carrito</h2>
    <ul id="listaCarrito"></ul>
    <p><strong>Total: $<span id="total">0</span></strong></p>
</div>

<script>
let total = 0;

function agregarCarrito(nombre, precio) {
    const lista = document.getElementById("listaCarrito");

    const item = document.createElement("li");
    item.textContent = nombre + " - $" + precio;
    lista.appendChild(item);

    total += precio;
    document.getElementById("total").textContent = total;
}
</script>

</body>
</html>