<?php

class Controlador
{
    private $lista;

    public function __construct()
    {
        $this->lista = [];
    }

    public function getAll()
    {
        $con = new Conexion();
        $sql = "SELECT 
        id,
        nombre,
        parcela_lote_id,
        parcela_tipo_id,
        numeracion_interna,
        terreno_ancho,
        terreno_largo,
        terreno_despejado_arboles,
        ubicacion_latitud_gm,
        ubicacion_longitud_gm,
        pie,
        valor,
        activo 
        FROM parcela;";
        $rs = mysqli_query($con->getConnection(), $sql);
        if ($rs) {
            while ($tupla = mysqli_fetch_assoc($rs)) {
                $tupla['activo'] = $tupla['activo'] == 1 ? true : false;
                array_push($this->lista, $tupla);
            }
            mysqli_free_result($rs);
        }
        $con->closeConnection();
        return $this->lista;
    }

    public function postNuevo($_nuevoObjeto)
    {
        $con = new Conexion();
        //var_dump($_nuevoObjeto->nombre);
        $id = count($this->getAll()) + 1;
        $sql = "INSERT INTO parcela 
        (
        id,
        nombre,
        parcela_lote_id,
        parcela_tipo_id,
        numeracion_interna,
        terreno_ancho,
        terreno_largo,
        terreno_despejado_arboles,
        ubicacion_latitud_gm,
        ubicacion_longitud_gm,
        pie,
        valor,
        activo 
        ) 
        VALUES ($id,'$_nuevoObjeto->nombre', ,'$_nuevoObjeto->parcela_lote_id','$_nuevoObjeto->parcela_tipo_id','$_nuevoObjeto->numeracion_interna','$_nuevoObjeto->terreno_ancho',
        '$_nuevoObjeto->terreno_largo','$_nuevoObjeto->terreno_despejado_arboles','$_nuevoObjeto->ubicacion_latitud_gm',
        '$_nuevoObjeto->ubicacion_longitud_gm','$_nuevoObjeto->pie','$_nuevoObjeto->valor' true)";
        // echo $sql;
        //ejecutar sql
        $rs = [];
        try {
            $rs = mysqli_query($con->getConnection(), $sql);
        } catch (\Throwable $th) {
            $rs = null;
        }
        // var_dump($rs);
        //cerar conexion
        $con->closeConnection();
        //rs -> resultado de la ejecucion de la query
        if ($rs) {
            return true;
        }
        return null;
    }

    public function patchEncenderApagar($_id, $_accion)
    {
        $con = new Conexion();
        $sql = "UPDATE parcela SET activo = $_accion WHERE id = $_id;";
        // echo $sql;
        //ejecutar sql
        $rs = [];
        try {
            $rs = mysqli_query($con->getConnection(), $sql);
        } catch (\Throwable $th) {
            $rs = null;
        }
        // var_dump($rs);
        //cerar conexion
        $con->closeConnection();
        //rs -> resultado de la ejecucion de la query
        if ($rs) {
            return true;
        }
        return null;
    }

    public function putNombreById($_nombre, $_id)
    {
        $con = new Conexion();
        $sql = "UPDATE parcela SET nombre = '$_nombre' WHERE id = $_id;";
        // echo $sql;
        //ejecutar sql
        $rs = [];
        try {
            $rs = mysqli_query($con->getConnection(), $sql);
        } catch (\Throwable $th) {
            $rs = null;
        }
        // var_dump($rs);
        //cerar conexion
        $con->closeConnection();
        //rs -> resultado de la ejecucion de la query
        if ($rs) {
            return true;
        }
        return null;
    }

    public function deleteById($_id)
    {
        $con = new Conexion();
        $sql = "DELETE FROM parcela WHERE id = $_id;";
        //echo $sql;
        //ejecutar sql
        $rs = [];
        try {
            $rs = mysqli_query($con->getConnection(), $sql);
        } catch (\Throwable $th) {
            $rs = null;
        }
        // var_dump($rs);
        //cerar conexion
        $con->closeConnection();
        //rs -> resultado de la ejecucion de la query
        if ($rs) {
            return true;
        }
        return null;
    }
}