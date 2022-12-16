<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class FirstController
{
    public function homepage(): Response
    {
        return new Response(
            '<html><body><h1>Welcome</h1></body></html>'
        );
    }
}