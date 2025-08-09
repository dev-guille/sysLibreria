<?php

    class DetallePedidoModel {
        private $conexion;

        public function __construct($conexion) {
            $this->conexion = $conexion;
        }

        public function agregarDetalle($Cantidad, $PedidoID, $ISBN) {
            $sql = "INSERT INTO detallespedido (Cantidad, PedidoID, ISBN) 
                    VALUES (?, ?, ?)";
            try {
                $stmt = $this->conexion->prepare($sql);
                return $stmt->execute([$Cantidad, $PedidoID, $ISBN]);
            } catch(PDOException $error) {
                throw new Exception("Error al agregar detalle: " . $error->getMessage());
            }
        }
    }
?>