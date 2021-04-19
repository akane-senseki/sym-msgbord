<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Employee;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $e = $em->getRepository(Employee::class)->findAll();
        // replace this example code with whatever you need
        return $this->render('msg/index.html.twig', [
            "employees" => $e ,
        ]);
    }
}
