<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Clientes;

class ControllerClientes extends Controller
{
    public function cargarClientes()
    {
        //crear objeto Clientes
        $clien = new Clientes();
        //buscar datos y cargar el resultado en un objeto de php (array)
        $resultado['resultado'] = $clien->findAll(); //select * from clientes
        return view('vista_clientes', $resultado);
    }

    public function guardarCliente()
    {
        //recibir los datos del formulario
        $codigo = $this->request->getVar('txt_codigo');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $fecha_na = $this->request->getVar('txt_fecha_nacimiento');
        $fecha_sus = $this->request->getVar('txt_fecha_suscripcion');
        $correo = $this->request->getVar('txt_correo');
        $tel = $this->request->getVar('txt_tel');

        //para almacenar los datos en la tabla de la base de datos
        //es neceesario instanciar la clase del modelo
        $cliente = new Clientes();
        $datos = [
            'cliente_id' => $codigo,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'fecha_nacimiento' => $fecha_na,
            'fecha_suscripcion' => $fecha_sus,
            'correo_electronico' => $correo,
            'telefono_movil' => $tel
        ];
        //metodo para insertar datos
        $cliente->insert($datos);
        //mensaje para indicar si se pudo almacenar o existe algún problema
        
        return $this->cargarClientes();
    }

    public function eliminarCliente($codigo = null)
    {
        //echo "Se eliminará el registro con código".$codigo;
        //instanciar la clase del modelo
        $cliente = new Clientes();
        $cliente->delete($codigo);
        //mensaje de confirmación

        //cargar de nuevo los datos del formulario
        return $this->cargarClientes();
    }

    public function localizarCliente($codigo = null)
    {
        //echo "codigo a buscar para cargar datos a formulario: ". $codigo;
        //instancia de la clase modelo
        $cliente = new Clientes();
        $datosCliente['datosCliente'] = $cliente->where('cliente_id', $codigo)->first();
        return view('frm_actualizar_cliente', $datosCliente);
    }

    public function modificarCliente(){
        //recibir los datos del formulario
        $codigo = $this->request->getVar('txt_codigo');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $fecha_na = $this->request->getVar('txt_fecha_nacimiento');
        $fecha_sus = $this->request->getVar('txt_fecha_suscripcion');
        $correo = $this->request->getVar('txt_correo');
        $tel = $this->request->getVar('txt_tel');
        //instanciar la clase y trasladar los datos a un array
        $cliente = new Clientes();
        $datos = [
            //'cliente_id' => $codigo,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'fecha_nacimiento' => $fecha_na,
            'fecha_suscripcion' => $fecha_sus,
            'correo_electronico' => $correo,
            'telefono_movil' => $tel
        ];
        //elemento que vamos a modificar (llave primaria) y datos que queremos modificar
        $cliente->update($codigo,$datos);
        return $this->cargarClientes();

    }
}
