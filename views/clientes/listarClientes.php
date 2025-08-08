<h2>Lista de Clientes</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Telefono</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td> <?php echo htmlspecialchars($cliente['ClienteID']) ?> </td>
                <td> <?php echo htmlspecialchars($cliente['Nombre']) ?> </td>
                <td> <?php echo htmlspecialchars($cliente['Telefono']) ?> </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>