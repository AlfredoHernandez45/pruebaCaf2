<?php
  header("Content-Type: text/css; charset: UTF-8");
?>
* {
  margin: 0;
  padding: 0;
  color: #707070;
  font-family: "Open Sans", sans-serif;
  font-display: fallback;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body h1 {
  font-size: 48px;
  font-weight: 400;
  line-height: 160%;
  margin-bottom: 30px;
}
body h2, body h3, body h4, body h5, body h6 {
  font-weight: 700;
  line-height: 160%;
}
body p, body span {
  font-size: 18px;
  font-weight: 400;
  line-height: 140%;
}
body.no_scroll {
  overflow: hidden;
  overflow-y: hidden;
}
body.no-scroll {
  overflow: hidden;
}
body .img-responsive {
  display: block;
  max-width: 100%;
}
body .content {
  width: 95%;
  max-width: 1280px;
  margin: 0 auto;
}
body .content:before {
  display: table;
  content: "";
  clear: both;
}
body .content:after {
  display: table;
  content: " ";
  clear: both;
}
body a {
  cursor: pointer;
  text-decoration: none;
}
body a:hover {
  text-decoration: none;
}
body a:focus {
  text-decoration: none;
}

.cafe_index {
  background-image: url("css/fondo-taza.png");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  padding: 230px 0;
}
.cafe_index h1 {
  font-size: 48px;
  font-weight: 700;
  line-height: 160%;
  margin-bottom: 30px;
  color: #fff;
}
.cafe_index p {
  font-size: 18px;
  font-weight: 400;
  line-height: 160%;
  margin-bottom: 50px;
  color: #fff;
  width: 100%;
  max-width: 600px;
}
.cafe_index .btns {
  width: 100%;
  max-width: 600px;
  display: flex;
  justify-content: space-evenly;
}
.cafe_index .btns a {
  border: 1px solid #fff;
  color: #fff;
  font-size: 16px;
  font-weight: 600;
  padding: 15px 20px;
  border-radius: 10px;
}
.cafe_index .btns a:hover {
  border: 1px solid #fff;
  background-color: #fff;
  color: #000;
}

html, body {
  height: 100%;
}

.main_carrito {
  background-image: url(../img/fondo-taza.png);
  position: relative;
  z-index: 1;
  height: 100%;
}
.main_carrito .carrito {
  margin-top: 80px;
  padding: 40px;
}
.main_carrito .carrito .body_carrito {
  display: flex;
  gap: 80px;
}
.main_carrito .carrito .body_carrito .catalago_productos {
  width: 100%;
  max-width: 70%;
}
.main_carrito .carrito .body_carrito .catalago_productos h2 {
  color: #fff;
  font-size: 28px;
  padding-bottom: 30px;
  border-bottom: 1px solid #fff;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos {
  display: grid;
  grid-template-columns: 1fr;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto {
  padding: 50px 0;
  display: flex;
  justify-content: space-evenly;
  border-bottom: 1px solid #fff;
  position: relative;
  z-index: 1;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto::before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #b37639;
  opacity: 0.65;
  z-index: -1;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .image_producto {
  width: 100%;
  display: block;
  margin: auto;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .image_producto img {
  width: 100%;
  display: block;
  margin: auto;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .descripcion_producto {
  width: 100%;
  margin-left: 50px;
  display: block;
  margin: auto 0px auto 50px;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .descripcion_producto h3 {
  color: #fff;
  font-size: 20px;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .descripcion_producto p {
  color: #fff;
  font-size: 18px;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .cantidad_producto {
  display: block;
  margin: auto;
  width: 100%;
  max-width: 70px;
}
/* .main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .cantidad_producto p {
  color: #fff;
  font-size: 18px;
  text-align: center;
} */
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .cantidad_producto input {
  display: block;
  margin: auto;
  width: 100%;
  max-width: 300px;
  font-size: 18px;
  font-weight: 800;
  text-align: center;
  color: #fff;
  background-color: #fff0;
  border: 1px solid #fff;
  padding: 15px;
} 

.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .precio_producto {
  width: 100%;
  display: block;
  margin: auto;
}
.main_carrito .carrito .body_carrito .catalago_productos .item_productos .producto .precio_producto p {
  color: #fff;
  font-size: 18px;
  text-align: center;
}
.main_carrito .carrito .body_carrito .catalago_precios {
  width: 100%;
  max-width: 30%;
}
.main_carrito .carrito .body_carrito .catalago_precios h2 {
  color: #fff;
  font-size: 28px;
  padding-bottom: 30px;
  text-align: center;
  border-bottom: 1px solid #fff;
}
.main_carrito .carrito .body_carrito .catalago_precios .sub_total {
  padding: 50px 0;
  border-bottom: 1px solid #fff;
  display: grid;
  grid-template-columns: 1fr 1fr;
}
.main_carrito .carrito .body_carrito .catalago_precios .sub_total label {
  color: #fff;
  font-size: 20px;
  font-weight: 700;
}
.main_carrito .carrito .body_carrito .catalago_precios .sub_total p {
  color: #fff;
  font-size: 18px;
  font-weight: 400;
}
.main_carrito .carrito .body_carrito .catalago_precios .total_precio {
  margin: 30px 0;
  display: grid;
  grid-template-columns: 1fr 1fr;
}
.main_carrito .carrito .body_carrito .catalago_precios .total_precio label {
  color: #fff;
  font-size: 20px;
  font-weight: 700;
}
.main_carrito .carrito .body_carrito .catalago_precios .total_precio p {
  color: #fff;
  font-size: 18px;
  font-weight: 400;
}
.main_carrito .carrito .body_carrito .catalago_precios .fin_compra button {
  padding: 20px 50px;
  display: block;
  margin: auto;
  background-color: #996633;
}
.main_carrito .carrito .body_carrito .catalago_precios .fin_compra button a {
  color: #fff;
}

/*# sourceMappingURL=mainstyle.css.map */
