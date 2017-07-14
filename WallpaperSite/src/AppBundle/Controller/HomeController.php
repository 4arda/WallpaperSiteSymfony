<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        $bmw = [
            'm3.jpg',
            'm31.jpg',
            'm32.jpg',
            'm33.jpg',
            'm34.jpeg',
            'm35.jpg',
            'm36.jpg',
        ];

        $shelby = [
            'shelby.jpeg',
            'shelby1.jpg',
            'shelby2.jpg',
            'shelby3.jpg',
            'shelby4.jpg',
            'shelby5.jpg',
        ];

        $skyline = [
            'skyline5.jpg',
            'skyline1.jpg',
            'skyline6.jpg',
            'skyline4.jpg',
            'skyline3.jpg',
            'skyline.jpg',
            'skyline2.jpg',
        ];

        $images = array_merge($bmw, $shelby, $skyline);

        shuffle($images);

        $randomisedImages = array_slice($images, 0, 8);

        return $this->render('home/index.html.twig', [
            'randomised_images' => $randomisedImages,
            'bmw' => array_slice($bmw, 0, 2),
            'shelby' => array_slice($shelby, 0, 2),
            'skyline' => array_slice($skyline, 0, 2),
        ]);
    }
}