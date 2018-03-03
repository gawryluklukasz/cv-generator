<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @author Łukasz Gawryluk <gawryluklukasz@gmail.com>
 */
class CvController extends Controller
{

    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $data = ['data' => $this->getParameter('data_person')];
        return $this->render('cv/index.html.twig', $data);
    }

}
