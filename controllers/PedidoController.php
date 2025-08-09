<?php
require_once (__DIR__ . '/../models/PedidoModel.php');
require_once (__DIR__ . '/../models/DetallePedidoModel.php');


class PedidoController {
    private $pedidoModel;
    private $detalleModel;
    
    public function __construct($conexion) {
        $this->pedidoModel = new PedidoModel($conexion);
        $this->detalleModel = new DetallePedidoModel($conexion);
    }
    
    public function listarPedidos() {
        $pedidos = $this->pedidoModel->obtenerTodosLosPedidos();
        require_once (__DIR__ . '/../views/pedidos/listarPedidos.php');
    }

    public function crearPedidosyDetalles() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                // Crear el pedido principal
                $pedidoId = $this->pedidoModel->crearPedido(
                    $_POST['cliente_id'],
                    date('Y-m-d H:i:s')
                );

                // Agregar detalles del pedido
                foreach ($_POST['libros'] as $libro) {
                    if ($libro['isbn'] && $libro['cantidad'] > 0) {
                        $this->detalleModel->agregarDetalle(
                            $pedidoId,
                            $libro['Cantidad'],
                            $libro['PedidoID'],
                            $libro['ISBN']
                        );
                    }
                }

                /* header('Location: index.php?action=ver_pedido&id='.$pedidoId); */
                exit;
            } catch (Exception $e) {
                die("Error al crear pedido: " . $e->getMessage());
            }
        }
    }
}
?>