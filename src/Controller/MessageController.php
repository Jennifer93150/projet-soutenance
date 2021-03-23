<?php
// src/Controller/ProduitController.php
namespace App\Controller;

use App\Entity\User;
use App\Entity\Message;
use App\Form\MessageType;
use App\Repository\MessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\User\UserInterface;

class MessageController extends AbstractController
{
    /*public function index()
    {
    // usually you'll want to make sure the user is authenticated first
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

    // returns your User object, or null if the user is not authenticated
    // use inline documentation to tell your editor your exact User class
    /** @var \App\Entity\User $user */
    #$user = $this->getUser();

    // Call whatever methods you've added to your User class
    // For example, if you added a getFirstName() method, you can use that.
    #return new Response('Well hi there '.$user->getNom());
    #}*/


    # Fonction envoi message

    /**
     * @Route("/message", name="message", methods={"GET","POST"})
     */
    public function new(Request $request, AuthenticationUtils $authenticationUtils)
    {
        # Création d'un nouvel object vide
        $message = new Message();
        
        #$user = $this->getUser();
        #$message->setNom($user);
        #$message->setUser($this->getUser());

        # Création d'un nouvel objet form
        $form = $this->createForm(MessageType::class, $message);
 		$form->handleRequest($request);

        #$message= $this->getUser();
        
        # Si "submit" ET tout valide
        if ($form->isSubmitted() && $form->isValid()) {
          
            # $form->getData() contient les valeurs soumises
            #$message = $form->getData();
            $date= new \DateTime('NOW');
           
            $message->setDate($date);
            
            $nom = $authenticationUtils->getLastUsername();
        # le code dessous c ajouter user_id a la table des que user entre un produit  
        #$produit.user->$_SESSION.getUser
        # possibilité de modifier le contenu du formulaire ici

            
           # Insertion dans la bdd
            $em = $this->getDoctrine()->getManager();
            #$em->persist($user = $this->getUser());
            $em->persist($message);
            $em->flush();

            # Notification de confirmation
            return $this->addFlash('success', 'Félicitations ! Votre message nous a bien ete transmis.');
            return $this->redirectToRoute('profil');
        }

        # Passer le formulaire à la vue
        return $this->render('/user/message.html.twig', ['Formulaire' => $form->createView()]);
    }
    
}