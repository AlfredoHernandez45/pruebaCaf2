<?php

require_once('usuario.php');
require_once('conexion.php');


class CrudUsuario {
	private $conexion;
	
	public function __construct() {
		$this->conexion = Db::conectar();
	}
	// public function __construct() {
	//     // Establecer la conexión a la base de datos
	//     $this->conn = new mysqli('localhost', 'root', '', 'ventas_dos');

	//     // Verificar si hubo un error en la conexión
	//     if ($this->conn->connect_error) {
	//         die('Error de conexión: ' . $this->conn->connect_error);
	//     }
	// }

	public function insertar($usuario) {
		$correo = $usuario->getCorreo();
		$password = $usuario->getPassword();
		$nombre = $usuario->getNombre();

		// Escapar los valores para prevenir inyección de SQL
		$correo = $this->conn->real_escape_string($correo);
		$password = $this->conn->real_escape_string($password);
		$nombre = $this->conn->real_escape_string($nombre);

		// Crear la consulta SQL para la inserción
		$sql = "INSERT INTO usuarios (correo, password, nombre) VALUES ('$correo', '$password', '$nombre')";
		$stmt = $this->conexion->prepare($sql);
		$stmt->bindParam(1, $correo);
		$stmt->bindParam(2, $password);
		$stmt->bindParam(3, $nombre);

		try {
			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo 'Error al insertar el usuario: ' . $e->getMessage();
			return false;
		}

		// Ejecutar la consulta y verificar si tuvo éxito
		// if ($this->conn->query($sql) === TRUE) {
		//     return true;
		// } else {
		//     echo 'Error al insertar el usuario: ' . $this->conn->error;
		//     return false;
		// }
	}

	public function obtenerPorCorreo($correo) {

		// $sql = "SELECT * FROM usuarios WHERE correo = '$correo'";
        

		// Escapar el correo para prevenir inyección de SQL
		// $correo = $this->conn->real_escape_string($correo);

		// Crear la consulta SQL para obtener el usuario por su correo
		$sql = "SELECT * FROM usuarios WHERE correo = '$correo'";
		$stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(1, $correo);

		// Ejecutar la consulta y obtener el resultado
		// $result = $this->conn->query($sql);

		// Verificar si se encontró un resultado
		// if ($result->num_rows > 0) {
		// 	// Obtener la fila del resultado como un array asociativo
		// 	$row = $result->fetch_assoc();

		// 	// Crear un objeto Usuario con los datos obtenidos
		// 	$usuario = new Usuario();
		// 	$usuario->setCorreo($row['correo']);
		// 	$usuario->setPassword($row['password']);
		// 	$usuario->setNombre($row['nombre']);

		// 	return $usuario;
		// } else {
		// 	return null;
		// }

		try {
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                $usuario = new Usuario();
                $usuario->setCorreo($row['correo']);
                $usuario->setPassword($row['password']);
                $usuario->setNombre($row['nombre']);

                return $usuario;
            } else {
                return null;
            }
        } catch (PDOException $e) {
            echo 'Error al obtener el usuario: ' . $e->getMessage();
            return null;
        }
	}

	public function obtenerTodos() {
		// Crear la consulta SQL para obtener todos los usuarios
		// $sql = "SELECT * FROM usuarios";

		// // Ejecutar la consulta y obtener el resultado
		// $result = $this->conn->query($sql);

		// // Crear un array para almacenar los usuarios
		// $usuarios = array();

		// // Verificar si se encontraron resultados
		// if ($result->num_rows > 0) {
		// 	// Recorrer cada fila del resultado
		// 	while ($row = $result->fetch_assoc()) {
		// 		// Crear un objeto Usuario con los datos de cada fila
		// 		$usuario = new Usuario();
		// 		$usuario->setCorreo($row['correo']);
		// 		$usuario->setPassword($row['password']);
		// 		$usuario->setNombre($row['nombre']);

		// 		// Agregar el usuario al array de usuarios
		// 		$usuarios[] = $usuario;
		// 	}
		// }

		// return $usuarios;
		$sql = "SELECT * FROM usuarios";
        $stmt = $this->conexion->prepare($sql);

        try {
            $stmt->execute();

            $usuarios = array();

            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $usuario = new Usuario();
                    $usuario->setCorreo($row['correo']);
                    $usuario->setPassword($row['password']);
                    $usuario->setNombre($row['nombre']);

                    $usuarios[] = $usuario;
                }
            }

            return $usuarios;
        } catch (PDOException $e) {
            echo 'Error al obtener los usuarios: ' . $e->getMessage();
            return array();
        }
	}

	public function cerrarConexion() {
		// Cerrar la conexión a la base de datos
		$this->conn->close();
	}
}

// Ejemplo de uso del CRUD de Usuario
// $crudUsuario = new CrudUsuario();

// // Insertar un nuevo usuario
// $usuarioNuevo = new Usuario();
// $usuarioNuevo->setCorreo('ejemplo@correo.com');
// $usuarioNuevo->setPassword('contraseña123');
// $usuarioNuevo->setNombre('Nombre Apellido');

// if ($crudUsuario->insertar($usuarioNuevo)) {
// 	echo 'Usuario insertado correctamente';
// } else {
// 	echo 'Error al insertar el usuario';
// }

// // Obtener un usuario por su correo
// $correoUsuario = 'ejemplo@correo.com';
// $usuarioObtenido = $crudUsuario->obtenerPorCorreo($correoUsuario);

// if ($usuarioObtenido) {
// 	echo 'Usuario encontrado: ' . $usuarioObtenido->getNombre();
// } else {
// 	echo 'Usuario no encontrado';
// }

// // Obtener todos los usuarios
// $usuarios = $crudUsuario->obtenerTodos();

// if (!empty($usuarios)) {
// 	foreach ($usuarios as $usuario) {
// 		echo 'Correo: ' . $usuario->getCorreo() . ', Nombre: ' . $usuario->getNombre();
// 	}
// } else {
// 	echo 'No se encontraron usuarios';
// }

// // Cerrar la conexión a la base de datos
// $crudUsuario->cerrarConexion();

?>
