<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController
{
    /**
     * @Route("/data", methods={"POST"})
     */
    public function receiveData(): Response
    {
        //Receive data

        //Add to queue

        
        return new Response("OK");
    }
}