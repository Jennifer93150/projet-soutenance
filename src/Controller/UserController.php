<?php
// src/Controller/FormController.php
namespace App\Controller;

use App\Entity\Produit;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
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
    * @return Response
    */
    public function produit_user(ProduitRepository $repository)
    {
        $produits = new Produit();
        $user = $this->getUser();
        #$produits = $this->getUser();
        $produits->setUser($user);
        $repository = $this->getDoctrine()->getRepository(Produit::class);
        $produits = $repository->find($user);

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

    /**
     * @Route("/edit/{id<\d+>}", name="edit_profil")
     */
    public function edit(Request $request, User $user, UserPasswordEncoderInterface $encoder)
    {
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
            # Le persist devient inutile car l'objet est deja existant ds la bdd et possede donc un id
            #$em->persist($user);
            $em->flush();
            
            # Redirection au profil
            return $this->redirectToRoute('profil');
            #return new Response('Votre profil a bien été modifié !');
            
        }

        # Passer le formulaire à la vue
        return $this->render('/user/edit.html.twig', ['Formulaire' => $form->createView()]);
    
    }

    # DELETE
    
    /**
     * @Route("/delete/{id<\d+>}", name="delete_user")
     * @return Response
     */
    public function delete(User $user)
    {
       
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        # redirige la page
        # return $this->redirectToRoute('accueil');
        return new Response('Votre compte a bien été supprimé.');
    }

    
}
