<?php
require_once 'GymDB.php';
class Dias
{
    private $numDia;
    private $fecha;

    function __construct($numDia = 0, $fecha = "")
    {
        $this->numDia = $numDia;
        $this->fecha = $fecha;
    }

    public function insertDay1($ej1, $ej2, $ej3, $ej4, $ej5, $ej6, $ej7)
    {
        $conexion = GymDB::connectDB();
        $insercion = "INSERT INTO dia1 (fecha, press_plano_mancuernas, aperturas_inclinado, purestrength_por_separado, flexiones, curl_mancuernas_tumbado, dominadas_agarre_cerrado, barra_romana) 
        VALUES ('" . date('Y-m-d H:i:s') . "', '$ej1', '$ej2', '$ej3', '$ej4', '$ej5', '$ej6', '$ej7')";
        $conexion->exec($insercion);
    }

    public function insertDay2($ej1, $ej2, $ej3, $ej4, $ej5, $ej6, $ej7)
    {
        $conexion = GymDB::connectDB();
        $insercion = "INSERT INTO dia1 (fecha, press_plano_mancuernas, aperturas_inclinado, purestrength_por_separado, flexiones, curl_mancuernas_tumbado, dominadas_agarre_cerrado, barra_romana) 
        VALUES ('" . date('Y-m-d H:i:s') . "', '$ej1', '$ej2', '$ej3', '$ej4', '$ej5', '$ej6', '$ej7')";
        $conexion->exec($insercion);
    }

    public function insertDay3($ej1, $ej2, $ej3, $ej4, $ej5, $ej6, $ej7)
    {
        $conexion = GymDB::connectDB();
        $insercion = "INSERT INTO dia1 (fecha, press_plano_mancuernas, aperturas_inclinado, purestrength_por_separado, flexiones, curl_mancuernas_tumbado, dominadas_agarre_cerrado, barra_romana) 
        VALUES ('" . date('Y-m-d H:i:s') . "', '$ej1', '$ej2', '$ej3', '$ej4', '$ej5', '$ej6', '$ej7')";
        $conexion->exec($insercion);
    }

    public function insertDay4($ej1, $ej2, $ej3, $ej4, $ej5, $ej6, $ej7)
    {
        $conexion = GymDB::connectDB();
        $insercion = "INSERT INTO dia1 (fecha, press_plano_mancuernas, aperturas_inclinado, purestrength_por_separado, flexiones, curl_mancuernas_tumbado, dominadas_agarre_cerrado, barra_romana) 
        VALUES ('" . date('Y-m-d H:i:s') . "', '$ej1', '$ej2', '$ej3', '$ej4', '$ej5', '$ej6', '$ej7')";
        $conexion->exec($insercion);
    }

    public function insertDay5($ej1, $ej2, $ej3, $ej4, $ej5, $ej6, $ej7)
    {
        $conexion = GymDB::connectDB();
        $insercion = "INSERT INTO dia1 (fecha, press_plano_mancuernas, aperturas_inclinado, purestrength_por_separado, flexiones, curl_mancuernas_tumbado, dominadas_agarre_cerrado, barra_romana) 
        VALUES ('" . date('Y-m-d H:i:s') . "', '$ej1', '$ej2', '$ej3', '$ej4', '$ej5', '$ej6', '$ej7')";
        $conexion->exec($insercion);
    }
    // public function delete()
    // {
    //     $conexion = GymDB::connectDB();
    //     $borrado = "DELETE FROM articulos WHERE codigo=$this->codigo";
    //     $conexion->exec($borrado);
    // }
    // public function update()
    // {
    //     $conexion = GymDB::connectDB();
    //     $actualiza = "UPDATE articulos SET titulo='$this->titulo', fecha=now(), contenido='$this->contenido' WHERE codigo='$this->codigo'";
    //     $conexion->exec($actualiza);
    // }
    // public static function getArticulos()
    // {
    //     $conexion = GymDB::connectDB();
    //     $seleccion = "SELECT * FROM articulos ORDER BY fecha DESC";
    //     $consulta = $conexion->query($seleccion);
    //     $articulos = [];
    //     while ($registro = $consulta->fetchObject()) {
    //         $articulos[] = new Dias($registro->codigo, $registro->titulo, $registro->fecha, $registro->contenido);
    //     }
    //     return $articulos;
    // }
    // public static function getArticuloById($id)
    // {
    //     $conexion = GymDB::connectDB();
    //     $seleccion = "SELECT * FROM articulos WHERE codigo='$id'";
    //     $consulta = $conexion->query($seleccion);
    //     $registro = $consulta->fetchObject();
    //     $articulo = new Dias($registro->codigo, $registro->titulo, $registro->fecha, $registro->contenido);
    //     return $articulo;
    // }

    
    public function getFecha()
    {
        return $this->fecha;
    }
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
        return $this;
    }
    public function getNumDia()
    {
        return $this->numDia;
    }
    public function setNumDia($numDia)
    {
        $this->numDia = $numDia;
        return $this;
    }
}
