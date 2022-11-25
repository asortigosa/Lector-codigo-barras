<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LectorCodigoBarrasController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('lector_codigo_barras/index.html.twig', [
            'controller_name' => 'LectorCodigoBarrasController',
        ]);
    }

    #[Route('/leer/codigos', name: 'app_leer_codigos')]
    public function leerCodigosBarras(): Response
    {
        //Array PHP que guarda que números de los cuatro a comprobar ha introducido el usuario
        $numeros = $_POST;
        return $this->redirectToRoute('app_index');
    }
}

