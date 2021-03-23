<?php
// src/Controller/FormController.php
namespace App\Controller;

use App\Entity\Produit;
use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\User\UserInterface;

#use App\Service\MessageGenerator;


class UserController extends AbstractController
{
     # Fonction inscription
    /**
     * @Route("/inscription", name="inscription", methods={"GET","POST"})
     */
    public function new(Request $request, UserPasswordEncoderInterface $encoder)
    {

        $user = new User();
        # chaque nouvel user aura le role user
        # grace a la methode role de la classe user
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
            
            return $this->redirectToRoute('accueil');
        }

        # Passer le formulaire à la vue
        return $this->render('/user/inscription.html.twig', ['user' => $user, 'Formulaire' => $form->createView()]);
    }

   
    # AFFICHAGE PROFIL

    /**
    * @Route("/profil", name="profil")
    * @IsGranted("IS_AUTHENTICATED_FULLY")
    */
    public function profil()
    {
        return $this->render('/user/profil.html.twig');
    }


    # Affichage les produits de user

    /**
    * @Route("/profil", name="profil")
    * @IsGranted("IS_AUTHENTICATED_FULLY")
    */
    public function produit_user()
    {
      
        $repository = $this->getDoctrine()->getRepository(Produit::class);
        $produits = $repository->findBy(['id'=>'user']);

        return $this->render('/user/profil.html.twig', ['mesproduits'=>$produits]);
    }



    /**
     * @Route("/profil", name="profil" )
     */
    /*public function show(Request $request)
    {
       # Selection des données ds la bdd
        $repository = $this->getDoctrine()->getRepository(User::class);
        $user = $repository->findBy(['id'=> 1]);

    # Passer le formulaire à la vue
    return $this->render('/user/profil.html.twig', ['monprofil'=>$user]);
    
    }*/

    # Modification du profil

     /**********************UPDATE DE LA TABLE************************/

    /**
     * @Route("/edit/{id<\d+>}")
     */
    public function edit(Request $request, User $materiel)
    {
        $form = $this->createForm(UserType::class, $materiel);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // va effectuer la requête d'UPDATE en base de données
            $this->getDoctrine()->getManager()->flush();
        }

        return $this->render('/user/edit.html.twig', ['Formulaire'=>$form->createView()]);
    }
/************************ DELETE ********************************/
    
    /**
     * @Route("/delete/{id<\d+>}")
     */
    public function delete(Request $request, User $materiel)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($materiel);
        $em->flush();

        // redirige la page
        return $this->redirectToRoute('accueil');
    }
/********************************************************************/


    
}
