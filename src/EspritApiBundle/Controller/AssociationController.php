<?php

namespace EspritApiBundle\Controller;

use AssociationsBundle\Entity\Association;
use AssociationsBundle\Form\AssociationType;
use EspritApiBundle\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class AssociationController extends Controller
{
    public function ajouterAssociationAction(Request $request)
    {
        $assocation = new Association();
        $form = $this->createForm(AssociationType::class,$assocation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();

            $file = $form->get('logo')->getData();
            $filename= md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('photos_directory'), $filename);
            $assocation->setLogo($filename);
            $em-> persist($assocation);
            $em -> flush();
            return $this->redirectToRoute('associations_afficherAssociation');
        }
        return $this -> render("@Associations/Association/ajoutA.html.twig",array('form'=>$form->createView()));

    }

    public function afficherAssociationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $association = $em->getRepository("AssociationsBundle:Association")->findAll();
        return $this->render("@Associations/Association/afficheA.html.twig",array('association'=>$association));
    }

    public function afficherAssociationClientAction()
    {
        $em = $this->getDoctrine()->getManager();
        $association = $em->getRepository("AssociationsBundle:Association")->findAll();
        return $this->render("@Associations/Association/afficheAClient.html.twig",array('association'=>$association));
    }

    public function modifierAssociationAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $p =$em->getRepository('AssociationsBundle:Association')->find($id);
        $form = $this->createForm(AssociationType::class,$p);
        $form->handleRequest($request);
        if ($form->isSubmitted())
        {


            $file = $form->get('logo')->getData();
            $filename= md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('photos_directory'), $filename);
            $p->setLogo($filename);
            $em-> persist($p);
            $em -> flush();
            return $this->redirectToRoute('associations_afficherAssociation');
        }
        return $this -> render("@Associations/Association/modifA.html.twig",array('form'=>$form->createView()));

    }

    public function supprimerAssociationAction($id)
    {
        $em = $this -> getDoctrine() -> getManager();
        $association = $this -> getDoctrine() -> getRepository(Association::class) -> find($id);
        $em -> remove($association);
        $em -> flush();
        return $this -> redirectToRoute("associations_afficherAssociation");
    }

    public function showDetailsAction($id){
        $em = $this->getDoctrine()->getManager();
        $p=$em->getRepository('AssociationsBundle:Association')->find($id);
        return $this->render('@Associations/Association/detailA.html.twig',array(
            'name'=>$p->getName(),
            'description'=>$p->getDescription(),
            'logo'=>$p->getLogo(),
            'location'=>$p->getLocation(),
            'website'=>$p->getWebsite(),
            'id'=>$p->getId()
        ));
    }

    public function showDetailsAdminAction($id){
        $em = $this->getDoctrine()->getManager();
        $p=$em->getRepository('AssociationsBundle:Association')->find($id);
        return $this->render('@Associations/Association/detailsAadmin.html.twig',array(
            'name'=>$p->getName(),
            'description'=>$p->getDescription(),
            'logo'=>$p->getLogo(),
            'location'=>$p->getLocation(),
            'website'=>$p->getWebsite(),
            'id'=>$p->getId()
        ));
    }

    public function newAssociationAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $association = new Association();
        $association->setName($request->get('name'));
        $association->setDescription($request->get('description'));
        $association->setLogo($request->get('logo'));
        $association->setLocation($request->get('location'));
        $association->setWebsite($request->get('website'));
        $em->persist($association);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($association);
        return new JsonResponse($formatted);

    }

}
