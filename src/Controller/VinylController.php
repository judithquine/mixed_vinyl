<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Title: "PB and Jam"');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        $title = u(str_replace('-', ' ', $slug))->title(true);
        return new Response('Genre: '.$title);
    }

}