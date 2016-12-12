<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Employe;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class LectureCtrlController extends Controller
{
    /**
     * @Route(
     *     path= "/index/",
     *     name= "lectureCtrl_index"
     * )
     */
    public function indexAction()
    {

        $employe = new Employe(1, "Dupont", "Jean", new \DateTime('01-02-1988'));
        $formulaire = $this->createFormBuilder($employe)
                           ->add('num', NumberType::class)
                           ->add('nom', TextType::class)
                           ->add('prenom', TextType::class)
                           ->add('dateNaissance', DateType::class)
                           ->add('Enregistrer', SubmitType::class)
                           ->getForm();

        return $this->render('AppBundle:LectureCtrl:view.html.twig', array('leFormulaire' => $formulaire->createView()));
    }

    /**
     * @Route(
     *     path= "/afficheEmpParam",
     *     name= "lectureCtrl_ afficheEmpParam"
     * )
     */
    public function afficheEmpParamAction()
    {

        $employe = new Employe(1, "Dupont", "Jean", new \DateTime('01-02-1997'), "RALLYE", array('106', 'A110', 'R5'));
        $formulaire = $this->createFormBuilder($employe)
            ->add('num', NumberType::class)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('dateNaissance', DateType::class, array("years" => range(1950, date('Y'))))
            ->add('Enregistrer', SubmitType::class)
            ->getForm();

        return $this->render('@App/LectureCtrl/affichageEmpParam.html.twig', array('leFormulaire' => $formulaire->createView(), "sport" => $employe->getSport(), "autos" => $employe->getVoitures()));
    }


}
