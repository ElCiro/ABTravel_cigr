<?php
    class ControladorBlog{
        /** Mostrar el contenido tabla: blog */
        static public function ctrMostrarBlog(){
            $tabla = "blog_cigr";

            $respuesta = ModeloBlog::mdlMostrarBlog($tabla);

            return $respuesta; 
        }

    /** Mostrar el contenido tabla: categorias */
    static public function ctrMostrarCategorias() {
        $tabla = "categorias_cigr";
        $respuesta = ModeloBlog::mdlMostrarCategorias($tabla);

        return $respuesta;
    }

    /* mostrar articulos y categorias */
static public function ctrMostrarConInnerjoin($cantidad, $desde) {
    $tabla1 = "categorias";
    $tabla2 = "articulos";
    $respuesta=ModeloBlog::mdlMostrarConInnerjoin($tabla1, $tabla2, $desde, $cantidad);

    return $respuesta;
    }

    /** mostrar total articulos */
    static public function ctrMostrarTotalArticulos(){
        $tabla1 = "articulos";

        $respuesta = ModeloBlog::mdlMostrarTotalArticulos($tabla1);

        return $respuesta;
    }
}