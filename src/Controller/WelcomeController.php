<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;//By using calling this file, we can call the twig page. ex: return $this->render('welcome.html.twig');
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;//To use annotation, we need to install annotations 

class WelcomeController extends AbstractController
{
    /**
     * @Route("/welcome")
     */
    public function homepage(): Response
    {
        return $this->render('welcome.html.twig', [
            'day' => date('l'),// It shows the day
            'scripttag'=> '<script>console.log("This is a script tag from WelcomeController.php")</script>'
        ]);
    }
}