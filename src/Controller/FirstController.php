<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;//To use annotation, we need to install annotations 

class FirstController
{
    /**
     * @Route("/first")
     */
    public function homepage(): Response
    {
        return new Response(
            '<html><body><h1>First Page</h1></body></html>'
        );
    }
}