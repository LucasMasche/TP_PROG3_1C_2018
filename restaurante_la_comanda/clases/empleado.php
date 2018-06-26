<?php
class Empleado
{
    private $_id;
    private $_nombreCompleto;
    private $_cantOperaciones;
    private $_estado;
    private $_idRol;

    public function SetNombreCompleto($nombreCompleto)
    {
        $this->_nombreCompleto = $nombreCompleto;
    }

    public function SetCantOperaciones($cantOperaciones)
    {
        $this->_cantOperaciones = $cantOperaciones;
    }
    
    public function SetEstado($estado)
    {
        $this->_estado = $estado;
    }
    
    public function SetIdRol($idRol)
    {
        $this->_idRol = $idRol;
    }

    public function InsertarEmpleadoParametros()
    {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
        $consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO empleados (nombre_completo,cant_operaciones,estado,id_rol)VALUES(:nombreCompleto,:cantOperaciones,:estado,:idRol)");
        $consulta->bindValue(':nombreCompleto',$this->_nombreCompleto, PDO::PARAM_STR);
        $consulta->bindValue(':cantOperaciones', $this->_cantOperaciones, PDO::PARAM_INT);
        $consulta->bindValue(':estado', $this->_estado, PDO::PARAM_STR);
        $consulta->bindValue(':idRol', $this->_idRol, PDO::PARAM_INT);
        $consulta->execute();		
        return $objetoAccesoDato->RetornarUltimoIdInsertado();
    }
}
?>