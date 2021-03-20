<?php
// src/Controller/FormController.php
namespace App\Controller;


use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
#use App\Service\MessageGenerator;



class UserController extends AbstractController
{
     # Fonction inscription
    /**
     * @Route("/inscription", name="inscription")
     */
    public function create(Request $request, UserPasswordEncoderInterface $encoder)
    {

        $user = new User();
        $user->setRoles(['ROLE_USER']);

        # création d'un nouvel objet form
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        #Si "submit" ET tout valide
        if ($form->isSubmitted() && $form->isValid()) { 

            # Encodage du mot de passe
            $user->setPassword(
                $encoder->encodePassword(
                    $user, $user->getPassword()
                )
            );

            # Insertion dans la BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }
        # Passer le formulaire à la vue
        return $this->render('/user/inscription.html.twig', ['Formulaire' => $form->createView()]);
    }

/***************************/   
    # AFFICHAGE PROFIL

    /**
     * @Route("/profil", name="profil" )
     */
    public function show(Request $request)
    {
       # Selection des données ds la bdd
        $repository = $this->getDoctrine()->getRepository(User::class);
        $user = $repository->findBy(['id'=> 1]);

    # Passer le formulaire à la vue
    return $this->render('/user/profil.html.twig', ['monprofil'=>$user]);
    
    }

    

    
}
