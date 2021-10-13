<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BranchController extends AbstractController
{
    /**
     * @Route("/branch", name="branch")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller, Have a nice day!',
            'path' => 'src/Controller/BranchController.php',
        ]);
    }
}