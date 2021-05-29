<?php

namespace App\Controller;

class TallerController extends AppController
{

    public function display() {

        $Vehiculos = $this->getTableLocator()->get('Vehiculos');
        $Clientes = $this->getTableLocator()->get('Clientes');
        $Reparaciones = $this->getTableLocator()->get('Reparaciones');

        $vehiculos = $Vehiculos->find()->all();

        $this->set('vehiculos', $vehiculos);

        $vehiculoId = $this->request->getQuery('vehiculo') ? $this->request->getQuery('vehiculo') : "";

        $this->set('vehiculoId', $vehiculoId);

        $vehiculoInfo = null;

        if ($vehiculoId != "") {
            $vehiculoInfo = $Vehiculos->find()->where(["id =" => $vehiculoId])->first();
        }
        $this->set('vehiculoInfo', $vehiculoInfo);

        $clienteInfo = null;

        if ($vehiculoInfo != null && $vehiculoInfo["clientes_id"]) {
            $clienteInfo = $Clientes->find()->where(["id =" => $vehiculoInfo["clientes_id"]])->first();
        }
        $this->set('clienteInfo', $clienteInfo);

        $reparacionesInfo = null;

        if ($vehiculoInfo != null && $vehiculoInfo["id"]) {
            $reparacionesInfo = $Reparaciones->find()->where(["vehiculos_id =" => $vehiculoInfo["id"]])->all();
        }
        $this->set('reparacionesInfo', $reparacionesInfo);

        return $this->render('/Pages/taller');
    }


}



?>
