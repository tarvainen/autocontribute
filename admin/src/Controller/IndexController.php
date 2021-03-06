<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class IndexController
 *
 * @package App\Controller
 * @author Atte Tarvainen <tarvainen.atte@gmail.com>
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('index/index.html.twig');
    }
}
