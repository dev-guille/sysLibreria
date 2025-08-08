<?php
    require_once (__DIR__ . '/../models/ClienteModel.php');

    class ClienteController{
        private $model;

        public function __construct($conexion){
            $this->model = new ClienteModel($conexion);
        }

        /* Listar todos los CLientes */
        public function listarClientes(){
            try{
                $clientes = $this->model->obtenerTodosLosClientes();
                require_once (__DIR__ . '/../views/clientes/listarClientes.php');
            }
            catch(Exception $error){
                "Error al mostrar clientes: " . $error->getMessage();
            }
        }

        /* Crear un nuevo cliente */
        public function crearNuevoCliente(){
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                try{
                    $this->model->crearCliente($_POST['Nombre'], $_POST['Telefono']);
                    header('Location: index.php?action=listar_clientes');
                    exit;
                }
                catch(Exception $error){
                    echo "Error al crear un nuevo cliente " . $error->getMessage();
                }
            }
            else{
                require_once (__DIR__ . '/../views/clientes/crearCliente.php');
            }
        }
    }
?>