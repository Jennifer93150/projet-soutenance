<?php
// src/Controller/ProduitController.php
namespace App\Controller;


use App\Entity\Message;
use App\Form\MessageType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class MessageController extends AbstractController
{
    
    # Fonction envoi message

    /**
     * @Route("/message", name="message", methods={"GET","POST"})
     */
    public function new(Request $request, UserInterface $user): Response
    {
        # Création d'un nouvel object vide
        $message = new Message();

        # (via la methode getUser() de la classe Produit), je recupere le user du produit qui sera ajouté
        $user = $this->getUser();
        
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
            
            # Grace à ça l'id de user qui aura ajouté le produit sera indiqué ds la bdd  
            $message->setUser($user);

            # Insertion dans la bdd
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            # Notification de confirmation
            
            return $this->redirectToRoute('profil');
        }

        # Passer le formulaire à la vue
        return $this->render('/user/message.html.twig', ['Formulaire' => $form->createView()]);
    }
    
}