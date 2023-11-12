<?php
    require_once "conexion.php"; // Agrega esta línea para incluir el archivo que contiene la clase Conexion

    class ModeloBlog {
        /** Mostrar contenido de la tabla: blog */
        static public function mdlMostrarBlog($tabla) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");  // Preparo consulta
        $stmt->execute();   // Ejecuto consulta
        return $stmt->fetch();     // Obtengo resultado y lo devuelvo en un array asociativo
        //$stmt->close();
        $stmt = null;
    }

    /** Mostrar categorias */
    static public function mdlMostrarCategorias($tabla) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");  // Preparo consulta
        $stmt->execute();   // Ejecuto consulta
        return $stmt->fetchAll();     // Obtengo resultado y lo devuelvo en un array asociativo
        //$stmt->close();
        $stmt = null;
    }
    static public function mdlMostrarConInnerjoin( $tabla1, $tabla2,$desde,$cantidad ) {

        $stmt = Conexion::conectar()->prepare("SELECT $tabla1.*,$tabla2.*, DATE_FORMAT(fecha_articulo, '%d.%m.%Y') AS fecha_articulo FROM $tabla1 INNER JOIN $tabla2 ON $tabla1.id_categoria = $tabla2.id_cat ORDER BY $tabla2.id_articulo DESC LIMT $cantidad,$desde");

        $stmt -> execute();

        return $stmt -> fetchAll(); 
        
        $stmt =null;
    }
    /** kostrar total de articulos */
    static public function mdlMostrarTotalArticulos($tabla1){
        $stmt = Conexion::conectar()->prepare("SELEST * FROM $tabla1");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }
}
?>