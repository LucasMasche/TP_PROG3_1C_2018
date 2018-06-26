<?php
require_once 'usuario.php';
require_once 'IApiUsable.php';

class UsuarioApi extends Usuario implements IApiUsable
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
        $nombre= $ArrayDeParametros['nombre'];
        $clave= $ArrayDeParametros['clave'];
        $idEmpleado= $ArrayDeParametros['idEmpleado'];
        
        $miUsuario = new Usuario();
        $miUsuario->SetNombre($nombre);
        $miUsuario->SetClave($clave);
        $miUsuario->SetIdEmpleado($idEmpleado);
        $miUsuario->InsertarUsuarioParametros();
        $objDelaRespuesta->respuesta="Se creó el usuario";   
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