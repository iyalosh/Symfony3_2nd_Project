<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Depannage;
use AppBundle\Entity\Specialite;
use AppBundle\Form\DepannageType;
use AppBundle\Form\SpecialiteType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/depannage/new", name="depannage_new")
     */
    public function depannageNewAction(Request $request){
        $form =$this->createForm(DepannageType::class, new Depannage());

        return $this->render('results.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/specialite/new", name="specialite_new")
     */
    public function specialiteNewAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('');
        $form =$this->createForm(SpecialiteType::class, $specialite = new Specialite());

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($specialite);
            $em->flush();
        }

        return $this->render('results.html.twig', array('form' => $form->createView()));
    }
}
