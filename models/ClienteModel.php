<?php
    class ClienteModel{
        private $conexion;

        public function __construct($conexion){
            $this->conexion = $conexion;
        }

        /* Función para obtener todos los clientes */
        public function obtenerTodosLosClientes(){
            $sqlSelect = "select * from clientes";

            try{
                $consultaClientes = $this->conexion->query($sqlSelect);
                return $consultaClientes->fetchAll(PDO::FETCH_ASSOC);
            }
            catch(PDOException $error){
                echo "Error en consultar clientes: " . $error->getMessage();
            }
        }

        /* Función para crear un nuevo cliente */
        public function crearCliente($nombre, $telefono){
            $sqlInsert = "insert into clientes(Nombre, Telefono) values (?, ?)";

            try{
                $insertarCliente = $this->conexion->prepare($sqlInsert);
                return $insertarCliente->execute([$nombre, $telefono]);
            }
            catch(Exception $error){
                echo "Error al crear un nuevo cliente " . $error->getMessage();
            }
        }
    }
?>