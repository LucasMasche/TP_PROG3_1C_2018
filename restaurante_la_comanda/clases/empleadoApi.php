<?php
require_once 'empleado.php';
require_once 'IApiUsable.php';
class EmpleadoApi extends Empleado implements IApiUsable
{
    public function TraerUno($request, $response, $args)
    {

    }
    public function TraerTodos($request, $response, $args)
    {
        
    } 
    public function CargarUno($request, $response, $args)
    {
        $objDelaRespuesta= new stdclass();
        
        $ArrayDeParametros = $request->getParsedBody();
        //var_dump($ArrayDeParametros);
        $nombreCompleto= $ArrayDeParametros['nombreCompleto'];
        $cantOperaciones= 0;
        $estado= 'activo';
        $idRol= $ArrayDeParametros['idRol'];
        
        $miEmpleado = new Empleado();
        $miEmpleado->SetNombreCompleto($nombreCompleto);
        $miEmpleado->SetCantOperaciones($cantOperaciones);
        $miEmpleado->SetEstado($estado);
        $miEmpleado->SetIdRol($idRol);
        $miEmpleado->InsertarEmpleadoParametros();
        $objDelaRespuesta->respuesta="Se creó el empleado";
        return $response->withJson($objDelaRespuesta, 200);
    }
    public function BorrarUno($request, $response, $args)
    {
        
    }
    public function ModificarUno($request, $response, $args)
    {
        
    }
}
?>