<?php
class Usuario
{
    private $_id;
    private $_nombre;
    private $_clave;
    private $_ultimoLogueo;
    private $_idEmpleado;

    public function SetNombre($nombre)
    {
        $this->_nombre = $nombre;
    }

    public function SetClave($clave)
    {
        $this->_clave = sha1($clave);
    }

    public function SetUltimoLogueo($ultimoLogueo)
    {
        $this->_ultimoLogueo = $ultimoLogueo;
    }

    public function SetIdEmpleado($idEmpleado)
    {
        $this->_idEmpleado = $idEmpleado;
    }

    public function InsertarUsuarioParametros()
    {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
        $consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO usuarios (nombre,clave,ultimo_logueo,id_empleado)VALUES(:nombre,:clave,:ultimoLogueo,:idEmpleado)");
        $consulta->bindValue(':nombre',$this->_nombre, PDO::PARAM_STR);
        $consulta->bindValue(':clave', $this->_clave, PDO::PARAM_STR);
        $consulta->bindValue(':ultimoLogueo', $this->_ultimoLogueo, PDO::PARAM_STR);
        $consulta->bindValue(':idEmpleado', $this->_idEmpleado, PDO::PARAM_INT);
        $consulta->execute();		
        return $objetoAccesoDato->RetornarUltimoIdInsertado();
    }
}
?>