<?php
    class LibroModel{
        private $conexion;

        public function __construct($conexion){
            $this->conexion = $conexion;
        }

        public function obtenerTodosLosLibros(){
            $sqlSelect = "select * from libros";

            try{
                $consultaLibros= $this->conexion->query($sqlSelect);
                return $consultaLibros->fetchAll(PDO::FETCH_ASSOC);
            }
            catch(PDOException $error){
                echo "Error en consultar libros: " . $error->getMessage();
            }
        }
    }
?>