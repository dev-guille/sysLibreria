<?php
    require_once (__DIR__ . '/../models/LibroModel.php') ;

    class LibroController{
        private $model;

        public function __construct($conexion){
            $this->model = new LibroModel($conexion);
        }

        public function listarLibros(){
            try{
                $libros = $this->model->obtenerTodosLosLibros();
                require_once(__DIR__ . '/../views/libros/listarLibros.php') ;
            }
            catch(Exception $error){
                "Error al mostrar libros: " . $error->getMessage();
            }
        }
    }
?>