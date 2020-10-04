<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class WeatherController extends AbstractController
{

    /** 
     * 
     *@Route("/weather/getTesttest")
     */
    public function getTest(): Response
    {
        $number = random_int(0, 100);

        return $this->render('weather/getTest.html.twig', [
            'number' => $number,
        ]);
    }
}
