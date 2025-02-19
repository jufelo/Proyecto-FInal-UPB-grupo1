<?php
    class Usuarios{
        private $conexion;
        function __construct(){
            require_once('conexion.php');
            $this->conexion = new Conexion();
            $this->conexion->conectar();
        }

        function registrarUsuario(){
            $nombre = htmlentities(trim(strip_tags(stripcslashes($_POST['nombre']))), ENT_NOQUOTES, "UTF-8");
            $apellido = htmlentities(trim(strip_tags(stripcslashes($_POST['apellido']))), ENT_NOQUOTES, "UTF-8");
            $cedula = htmlentities(trim(strip_tags(stripcslashes($_POST['cedula']))), ENT_NOQUOTES, "UTF-8");
            $correo = htmlentities(trim(strip_tags(stripcslashes($_POST['correo']))), ENT_NOQUOTES, "UTF-8");
            $telefono = htmlentities(trim(strip_tags(stripcslashes($_POST['telefono']))), ENT_NOQUOTES, "UTF-8");
            $direccion = htmlentities(trim(strip_tags(stripcslashes($_POST['direccion']))), ENT_NOQUOTES, "UTF-8");
            $contrasena = htmlentities(trim(strip_tags(stripcslashes($_POST['contrasena']))), ENT_NOQUOTES, "UTF-8");
            $sql = "INSERT INTO Pro_usuarios(nombre, apellido, cedula, correo, telefono, direccion, contrasena)VALUES(?,?,?,?,?,?,?);";
            $stmt = $this->conexion->conexion->prepare($sql);
            $stmt->bind_param("ssisiss", $nombre, $apellido, $cedula, $correo, $telefono, $direccion, $contrasena);
            $stmt->execute();
            $stmt->close();
            $this->conexion->cerrar();
            header('location: login.php');
            die();
        }

        function ingresarUsuario(){
            $correo = htmlentities(trim(strip_tags(stripcslashes($_POST['correo']))), ENT_NOQUOTES, "UTF-8");
            $contrasena = htmlentities(trim(strip_tags(stripcslashes($_POST['contrasena']))), ENT_NOQUOTES, "UTF-8");
            $sql = "SELECT nombre, apellido FROM Pro_usuarios WHERE correo = ? AND contrasena = ?;";
            $stmt = $this->conexion->conexion->prepare($sql);
            $stmt->bind_param("ss",$correo, $contrasena);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($row = $result->fetch_assoc()){
                echo "Bienvenido " . $row['nombre'] . " " . $row['apellido'] . " a la aplicación";
            }
            else{
                echo "Usuario o contraseña incorrectos";
            }
            $stmt->close();
            $this->conexion->cerrar();
        }
    }

?>