<?php
// src/Controller/FormController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ConnexionType;
use App\Entity\Utilisateur;
#use App\Service\MessageGenerator;
// 1-import mon service

/********** PAGE CREATION DE COMPTE UTILISATEUR ***********/
class ConnexionController extends AbstractController
{
/******* FONCTION NOUVEL utilisateur GRACE AU FORMULAIRE *******/
    /**
     * @Route("/creation", name="creation")
     */
    public function new(Request $request)
    {
        $utilisateur = new Utilisateur();

        //création d'un nouvel objet form dont j'ai appelé la creation par la function par defaut buildForm ds le fichier UtilisateurType.php
        $form = $this->createForm(ConnexionType::class, $utilisateur);
 		$form->handleRequest($request);

        // Si "submit" ET tout valide
        if ($form->isSubmitted() && $form->isValid()) {
        
            // alors afficher le contenu de l'objet $utilisateur sur la console
             dump($utilisateur);
             
             // $em(entity manager)je recupere le manager des données de ma table
            $em = $this->getDoctrine()->getManager();
            // Je prepare la sauvegarde/l'insertion de mon objet $utilisateur ds ma bdd (1 ligne de table)
            $em->persist($utilisateur);
            // execution de l'SQL
            $em->flush();
        }
        //affichage page creation et son formulaire
        return $this->render('/Connexion/connexion.html.twig', ['Formulaire' => $form->createView()]);
    }

    

}