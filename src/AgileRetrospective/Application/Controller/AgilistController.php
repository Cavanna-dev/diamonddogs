<?php

namespace AgileRetrospective\Application\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use AgileRetrospective\Domain\Repository\InMemoryAgilistRepository;

class AgilistController
{
    private $agilistsRepo;

    public function __construct(InMemoryAgilistRepository $repo)
    {
        $this->agilistsRepo = $repo;
    }

    /**
     * @Route("/agilists")
     */
    public function agilists(): Response
    {
        $users = $this->agilistsRepo->findAll();

        return new JsonResponse($users);
    }

}
