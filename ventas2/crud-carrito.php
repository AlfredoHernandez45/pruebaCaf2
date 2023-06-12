<?php
require_once('conexion.php');
require_once('carrito.php');

class CrudCarrito {
	public function __construct() {}

	public function insertar($carrito) {
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO carrito (id_compra, cveArticulo, cantidadProducto, precio, subtotal) VALUES (:idCompra, :cveArticulo, :cantidadProducto, :precio, :subtotal)');
		$insert->bindValue('idCompra', $carrito->getIdCompra());
		$insert->bindValue('cveArticulo', $carrito->getCveArticulo());
		$insert->bindValue('cantidadProducto', $carrito->getCantidadProducto());
		$insert->bindValue('precio', $carrito->getPrecio());
		$insert->bindValue('subtotal', $carrito->geSubtotal());
		$insert->execute();
	}

	public function mostrar() {
		$db = Db::conectar();
		$listaCarrito = [];
		$select = $db->query('SELECT * FROM carrito');

		foreach ($select->fetchAll() as $carrito) {
			$myCarrito = new Carrito();
			$myCarrito->setIdCompra($carrito['id_compra']);
			$myCarrito->setCveArticulo($carrito['cveArticulo']);
			$myCarrito->setCantidadProducto($carrito['cantidadProducto']);
			$myCarrito->getPrecio($carrito['precio']);
			$myCarrito->geSubtotal($carrito['subtotal']);
			$listaCarrito[] = $myCarrito;
		}

		return $listaCarrito;
	}

	public function eliminar($idCarrito) {
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM carrito WHERE idCarrito = :idCarrito');
		$eliminar->bindValue('idCarrito', $idCarrito);
		$eliminar->execute();
	}

	public function obtenerCarrito($idCarrito) {
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM carrito WHERE idCarrito = :idCarrito');
		$select->bindValue('idCarrito', $idCarrito);
		$select->execute();

		$carrito = $select->fetch();
		$myCarrito = new Carrito();
		$myCarrito->setIdCarrito($carrito['idCarrito']);
		$myCarrito->setIdCompra($carrito['id_compra']);
		$myCarrito->setCveArticulo($carrito['cveArticulo']);
		$myCarrito->setCantidadProducto($carrito['cantidadProducto']);

		return $myCarrito;
	}

	public function actualizar($carrito) {
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE carrito SET id_compra = :idCompra, cveArticulo = :cveArticulo, cantidadProducto = :cantidadProducto WHERE idCarrito = :idCarrito');
		$actualizar->bindValue('idCarrito', $carrito->getIdCarrito());
		$actualizar->bindValue('idCompra', $carrito->getIdCompra());
		$actualizar->bindValue('cveArticulo', $carrito->getCveArticulo());
		$actualizar->bindValue('cantidadProducto', $carrito->getCantidadProducto());
		$actualizar->execute();
	}
}
?>