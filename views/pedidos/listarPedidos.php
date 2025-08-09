<h2>Lista de Pedidos</h2>
<!-- <a href="index.php?action=crear_pedido_form" class="btn btn-primary">Nuevo Pedido</a>
 -->
<table class="table">
    <thead>
        <tr>
            <th>No. Orden</th>
            <th>Cliente</th>
            <th>Fecha</th>
            <th>Ver Detalles</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pedidos as $pedido): ?>
        <tr>
            <td><?= $pedido['Orden'] ?></td>
            <td><?= htmlspecialchars($pedido['Cliente']) ?></td>
            <td><?= date('d/m/Y', strtotime($pedido['Fecha'])) ?></td>
            <td><a href="">Detalles Pedidos</a></td>
            <td>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>