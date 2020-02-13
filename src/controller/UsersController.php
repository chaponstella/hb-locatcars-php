<?php


namespace App\Controller;

class UsersController extends AbstractController {
    
    public function index() {

        $users = $this->container->getUserManager()->findAll();


        echo $this->container->getTwig()->render('/users/index.html.twig', [
            'users' => $users, // On envoie la variable $users à notre template. Il la recevra nommée "users".
        ]);
    }

    public function show(int $id) {

        $user = $this->container->getUserManager()->findOneById($id);


        echo $this->container->getTwig()->render('/users/show.html.twig', [
            'users' => $user, // On envoie la variable $users à notre template. Il la recevra nommée "users".
        ]);    
    }
}
