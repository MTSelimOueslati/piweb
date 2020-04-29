<?php

namespace EspritApiBundle\Controller;


use AssociationsBundle\Entity\Association;
use EspritApiBundle\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;

class EspritApiController extends Controller
{
    public function allAction(){
        $tasks = $this->getDoctrine()->getManager()
            ->getRepository('EspritApiBundle:Task')
            ->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($tasks);
        return new JsonResponse($formatted);
    }

    public function findAction($id){
        $tasks = $this->getDoctrine()->getManager()
            ->getRepository('EspritApiBundle:Task')
            ->find($id);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($tasks);
        return new JsonResponse($formatted);
    }

    public function newAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $task = new Task();
        $task->setName($request->get('name'));
        $task->setStatus($request->get('status'));
        $em->persist($task);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($task);
        return new JsonResponse($formatted);

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

    public function allAssociationsAction(){
        $association = $this->getDoctrine()->getManager()
            ->getRepository('EspritApiBundle:Association')
            ->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($association);
        return new JsonResponse($formatted);
    }

    public function findAssociationAction($id){
        $association = $this->getDoctrine()->getManager()
            ->getRepository('EspritApiBundle:Association')
            ->find($id);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($association);
        return new JsonResponse($formatted);
    }

}
