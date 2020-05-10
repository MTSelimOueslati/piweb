<?php

namespace EspritApiBundle\Controller;


use AppBundle\Entity\User;
use AssociationsBundle\Entity\Association;
use EspritApiBundle\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;

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



    public function newUserAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        $user = new User();
        $user->setUsername($request->get('username'));
        $user->setUsernameCanonical($request->get('username'));
        $user->setEmail($request->get('email'));
        $user->setEmailCanonical($request->get('email'));
        $user->setPassword($request->get('password'));
        $user->setEnabled("1");
        $bcrypt = new BCryptPasswordEncoder(13);
        $pwd = $bcrypt->encodePassword($user->getPassword(), 10);
        $user->setPassword($pwd);
        $em->persist($user);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($user);
        return new JsonResponse($formatted);
    }

}
