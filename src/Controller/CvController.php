<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;

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
        return $this->getView();
    }

    /**
     * @Route("/pdf", name="pdf")
     */
    public function pdf()
    {
        /* @var $pdf \Knp\Snappy\Pdf */
        $pdf = $this->get('knp_snappy.pdf');

        return new PdfResponse($pdf->getOutputFromHtml($this->getView()->getContent()), 'cv.pdf');
    }

    /**
     * @return \Symfony\Component\BrowserKit\Response
     */
    private function getView()
    {
        $data = ['data' => $this->getParameter('data_person')];
        return $this->render('cv/index.html.twig', $data);
    }

}
