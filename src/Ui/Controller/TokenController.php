<?php

namespace DiamondDogs\Ui\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/api")
 */
class TokenController extends Controller
{
    /**
     * @Route("/tokens")
     * @Method("GET")
     */
    public function newToken(Request $request)
    {
        return $this->json(array('data' => 123));
    }
}