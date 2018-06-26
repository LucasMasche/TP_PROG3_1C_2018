<?php
class Empleado
{
    private $_id;
    private $_nombreCompleto;
    private $_cantOperaciones;
    private $_estado;
    private $_idRol;

    public function GetId()
    {
        return $this->_id;
    }
}
?>