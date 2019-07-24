<?php

namespace App\Controller;
use App\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class UserController extends AbstractController
{
 /**
 * @Route("/register", name="api_register", methods={"POST"})
 */
public function register(ObjectManager $om, UserPasswordEncoderInterface $passwordEncoder, Request $request)
{

   $user = new User();

   $email                  = $request->request->get("email");
   $password               = $request->request->get("password");
   $passwordConfirmation   = $request->request->get("password_confirmation");

   return $this->json([
	   'email' => $email,
	   'password' => $password,
	   'password_confirmation' => $passwordConfirmation
   ]);
}
  
}
