<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/login_check", name="api_login_check", methods={"POST"})
     */
    public function login(): Response
    {
        // Ce contrôleur peut être laissé vide - il sera intercepté par le système de sécurité de Symfony
        return new Response(null, Response::HTTP_NO_CONTENT);
    }
}
