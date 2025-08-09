<?php
class PedidoModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerTodosLosPedidos() {
        $sql = "SELECT distinct
            P.PedidoID AS Orden,
            C.Nombre AS Cliente,
            P.fecha AS Fecha
        from detallesPedido DP
        join pedidos P ON DP.PedidoID = P.PedidoID
        join clientes C ON P.ClienteID = C.ClienteID";
        try {
            $stmt = $this->conexion->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } 
        catch(PDOException $error) {
            throw new Exception("Error al consultar pedidos: " . $error->getMessage());
        }
    }

    public function crearPedido($fecha, $ClienteID) {
        $sql = "INSERT INTO pedidos (ClienteID, fecha) VALUES (?, ?)";
        try {
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute([$fecha, $ClienteID]);
            return $this->conexion->lastInsertId();
        } catch(PDOException $error) {
            throw new Exception("Error al crear pedido: " . $error->getMessage());
        }
    }
}
?>