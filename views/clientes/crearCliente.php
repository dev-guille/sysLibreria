<h2>Crear nuevo Cliente</h2>
<form action="index.php?action=crear_clientes" method="POST">
    <div>
        <label for="">Nombre: </label>
        <input type="text" name="Nombre" required>
    </div>
    <div>
        <label for="">Telefono: </label>
        <input type="tel" name="Telefono" required>
    </div>
    <button type="submit">Crear Cliente</button>
</form>