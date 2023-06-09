<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class VinylControler
{
    #[Route('/')]
    public function homepage() : Response
    {
        return new Response('Title: PB and Jams');
    }

}