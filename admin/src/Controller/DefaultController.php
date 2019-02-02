<?php
declare(strict_types = 1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController
 *
 * @package App\Controller
 * @author Atte Tarvainen <tarvainen.atte@gmail.com>
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/health", name="health")
     *
     * @return JsonResponse
     */
    public function healthAction(): JsonResponse
    {
        return $this->json(['message' => 'OK']);
    }
}
