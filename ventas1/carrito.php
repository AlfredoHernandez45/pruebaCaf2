<?php
class Carrito {
    private $idCarrito;
    private $idCompra;
    private $cveArticulo;
    private $cantidadProducto;

    public function __construct() {}

    public function getIdCarrito() {
        return $this->idCarrito;
    }

    public function setIdCarrito($idCarrito) {
        $this->idCarrito = $idCarrito;
    }

    public function getIdCompra() {
        return $this->idCompra;
    }

    public function setIdCompra($idCompra) {
        $this->idCompra = $idCompra;
    }

    public function getCveArticulo() {
        return $this->cveArticulo;
    }

    public function setCveArticulo($cveArticulo) {
        $this->cveArticulo = $cveArticulo;
    }

    public function getCantidadProducto() {
        return $this->cantidadProducto;
    }

    public function setCantidadProducto($cantidadProducto) {
        $this->cantidadProducto = $cantidadProducto;
    }
}
?>