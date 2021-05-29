<?php

namespace App\Controller;

class TallerController extends AppController
{

    public function display() {

        $Vehiculos = $this->getTableLocator()->get('Vehiculos');

        $vehiculos = $Vehiculos->find()->all();

        $this->set('vehiculos', $vehiculos);

        return $this->render('/Pages/taller');
    }


}



?>
