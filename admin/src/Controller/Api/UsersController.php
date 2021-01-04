<?php

namespace App\Controller\Api;

use App\Entity\ApplicationAssets;
use App\Entity\Features;
use App\Entity\ApplicationUsers;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    /**
     * @Route("api/user/{uid}/status/{status}", name="api_users_status")
     */
    public function userChangeStatus($uid, $status): Response
    {
        header('Access-Control-Allow-Origin: *');
        $entityManager = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $applicationUsers = $this->getDoctrine()->getRepository(ApplicationUsers::class)->findOneById($uid);
        $applicationUsers->setStatus($status);
        $entityManager->persist($applicationUsers);
        $entityManager->flush();
        return $response = new JsonResponse(['data' => 1]);
    }
}
