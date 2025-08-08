<h2>Lista de Libros</h2>
    <table>
        <thead>
            <tr>
                <th>ISBN</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($libros as $libro): ?>
                <tr>
                    <td> <?php echo htmlspecialchars($libro['ISBN']) ?> </td>
                    <td> <?php echo htmlspecialchars($libro['Titulo']) ?> </td>
                    <td> <?php echo htmlspecialchars($libro['Autor']) ?> </td>
                    <td> <?php echo htmlspecialchars($libro['Precio']) ?> </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>