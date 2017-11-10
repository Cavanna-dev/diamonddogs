<?php

namespace DiamondDogs\Ui\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 */
class LuckyController
{
    /**
     * @Route("/")
     */
    public function gateway()
    {
        return new JsonResponse(array('data' => 123));
    }
}