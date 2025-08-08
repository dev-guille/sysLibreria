<?php
    require_once 'config/database.php';
    require_once 'controllers/ClienteController.php';
    require_once 'controllers/LibroController.php';

    /* Crearmos instancia de los controladores */
    $clienteController = new ClienteController($conexion);
    $libroController = new LibroController($conexion);

    /* Incluir cabecera */
    require 'views/layout/header.php';

    /* Mostramos los listados */
    /* $clienteController->listarClientes();
    $libroController->listarLibros(); */

    /* Determinar la acción a a realizar */
    $action = $_GET['action'] ?? 'inicio';

    switch($action){
        case 'listar_clientes':
            $clienteController->listarClientes();
            break;
        case 'crear_clientes':
            $clienteController->crearNuevoCliente();
            break;
        case 'listar_libros':
            $libroController->listarLibros();
            break;
    }

    /* Incluir footer */
    require 'views/layout/footer.php';
?>