<?php
namespace App\Controllers;

use App\Models\HechosModel;
use App\Models\Hecho_ConocimientoModel;
use App\Models\ConocimientoModel;

class ConsultarController extends BaseController
{
    public function mostrarBeneficio()
    {
       $hechoModel = new HechosModel();
       $data['hechos'] = $hechoModel->findAll();

       return view('consultar_view', $data);
    }

    public function consultarProducto()
    {
        $hechosSeleccionados = $this->request->getPost('hechos');

        $hechoModel = new Hecho_ConocimientoModel();
        $conocimientoModel = new ConocimientoModel();

        $resultados = [];

        foreach ($hechosSeleccionados as $idHecho) {
            //Traer las relaciones de ese hecho
            $relaciones = $hechoModel->where('id_hecho', $idHecho)->findAll();

            foreach ($relaciones as $rel) {
                $conocimiento = $conocimientoModel->find($rel['id_conocimiento']);

                //validar contra el umbral
                if ($rel['peso'] >= $conocimiento['umbral']) {
                    $resultados[] = $conocimiento;
                }
            }
        }

        return view('resultados', ['conocimientos' => $resultados]);
    }
}