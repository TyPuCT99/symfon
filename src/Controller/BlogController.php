<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/")
     *
     * @return Response
     * @throws \Exception
     */
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [ 'f'=>'f']);
    }
    public function login()
    {
        return $this->render('blog/login.html.twig', []);
    }
    public function list()
    {
        return $this->render('/blog/list.html.twig', []);
    }
    public function about()
    {
        return $this->render('/blog/about.html.twig', []);
    }
}