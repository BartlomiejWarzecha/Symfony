<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use function Symfony\Component\String\u;


class VinylControler
{
    #[Route('/')]
    public function homepage() : Response
    {
        return new Response('Title: PB and Jams');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null) : Response
    {

        if($slug) {
            $title = u(str_replace('-', '', $slug))->title(true);
        }else{
            $title = 'All Genres';
        }
        return new Response('Genre = '.$title );
    }

}