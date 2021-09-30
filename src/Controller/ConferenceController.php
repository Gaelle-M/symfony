<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/conference", name="conference")
     */
    public function index(): Response
    {
         return new Response(<<<EOF
        <html>
         <body>
         <img src="/public/images/husky.gif" />
         </body>
        </html>
        EOF
         );
        }
        }
        
