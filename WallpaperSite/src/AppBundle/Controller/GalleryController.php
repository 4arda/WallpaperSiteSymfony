<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GalleryController extends Controller
{
    /**
     * @Route("/gallery", name="gallery")
     */
    public function indexAction(Request $request)
    {
        $images = [
            'skyline.jpg',
            'skyline1.jpg',
            'skyline2.jpg',
            'skyline3.jpg',
            'skyline4.jpg',
            'skyline5.jpg',
            'skyline6.jpg',
        ];

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $images,
            $request->query->getInt('page', 1)/*page number*/,
            4/*limit per page*/
        );

        return $this->render('gallery/index.html.twig', [
            'images' => $pagination
        ]);
    }
}
