<?php

namespace AgileRetrospective\Application\Controller;

use AgileRetrospective\Infrastructure\Repository\AgilistRepositoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class AgilistController
{
    /** @var AgilistRepositoryInterface */
    private $agilistRepository;

    /** @var SerializerInterface */
    private $serializer;

    /**
     * @param AgilistRepositoryInterface $agilistRepository
     * @param SerializerInterface        $serializer
     */
    public function __construct(AgilistRepositoryInterface $agilistRepository, SerializerInterface $serializer)
    {
        $this->agilistRepository = $agilistRepository;
        $this->serializer        = $serializer;
    }

    /**
     * @Route("/agilists")
     */
    public function agilist(): Response
    {
        $users = $this->agilistRepository->findAll();

        return JsonResponse::fromJsonString($this->serializer->serialize($users, 'json'));
    }
}
