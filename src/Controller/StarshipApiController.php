<?php

namespace App\Controller;

use App\Model\Starship;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(LoggerInterface $logger): Response
    {
        $starships = new Starship(
            1,
            'USS LeafyCruiser (NCC-0001)',
            'Garden',
            'Jean-Luc Pickles',
            'under construction',
        );

        $logger->info('Starship collection retrieved');

        return $this->json($starships);
    }
}
