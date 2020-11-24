<?php

    class baseDatos{
        public $usuarioBD="root";
        public $passwordBD="";

        public function __construct(){}

        public function conectarBD(){
            try{
                $datosBD="mysql:host=localhost;dbname=tiendaweb1";
                $conexionBD=new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
                return($conexionBD);
            }catch(PDOException $error){
                echo($error->getMessage());
            }
        }

        public function agregarDatos($consultaSQL){
            $conexionBD=$this->conectarBD();
            $consultaInsertarDatos=$conexionBD->prepare($consultaSQL);
            $resultado=$consultaInsertarDatos->execute();
            if ($resultado) {
                echo("Registro agregado con éxito  ");
            } else {
                echo("Error agregando el registro  ");
            }
        }

        public function consultarDatos($consultaSQL){
            $conexionBD=$this->conectarBD();
            $consultaBuscarDatos=$conexionBD->prepare($consultaSQL);
            $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);
            $resultado=$consultaBuscarDatos->execute();
            return($consultaBuscarDatos->fetchAll());
        }

        public function eliminarDatos($consultaSQL){
            $conexionBD=$this->conectarBD();
            $consultaEliminarDatos=$conexionBD->prepare($consultaSQL);
            $resultado=$consultaEliminarDatos->execute();
            if($resultado){
                echo("Éxito eliminando los datos");
            }else{
                echo("Error eliminando los datos");
            }
        }

        public function eliminarTodo($consultaSQL){
            $conexionBD=$this->conectarBD();
            $consultaEliminarTodo=$conexionBD->prepare($consultaSQL);
            $resultado=$consultaEliminarTodo->execute();
            if($resultado){
                echo("Éxito eliminando todos los datos");
            }else{
                echo("Error eliminando todos los datos");
            }
        }

        public function editarDatos($consultaSQL){
            $conexionBD=$this->conectarBD();
            $consultaEditarDatos=$conexionBD->prepare($consultaSQL);
            $resultado=$consultaEditarDatos->execute();
            if($resultado){
                echo("Éxito editando los datos");
            }else{
                echo("Error editando los datos");
            }
        }
    }

?>