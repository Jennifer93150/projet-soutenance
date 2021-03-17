<?php
// src/Controller/FormController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\UtilisateurType;
use App\Entity\Utilisateur;

#use App\Service\MessageGenerator;
// 1-import mon service

/********** CREATION PAGE CONNEXION POUR UTILISATEUR ***********/
class UtilisateurController extends AbstractController
{
/******* FONCTION NOUVEL utilisateur GRACE AU FORMULAIRE *******/
    /**
     * @Route("/creation", name="utilisateur")
     */
    public function new(Request $request)
    {
        $utilisateur = new Utilisateur();

        //création d'un nouvel objet form dont j'ai appelé la creation par la function par defaut buildForm ds le fichier UtilisateurType.php
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
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
        return $this->render('/Connexion/creation.html.twig', ['Formulaire' => $form->createView()]);
    }
    
/********** JE CREER MES ROUTES VERS MES PAGES HTML ****************/
    
    /**
    * @Route("/parent")
    */
    public function parent()
    {
       return $this->render('parent.html.twig');
    }

    /**
    * @Route("/", name="accueil")
    */
    public function accueil()
    {
    
        return $this->render('index.html.twig');
    }

    /**
    * @Route("/propose", name="propose")
    */
    public function propose()
    {
    
        return $this->render('/Propose/nouveauTroc.html.twig');
    }

    /**
    * @Route("/recherche", name="recherche")
    */
    public function produit()
    {
    
        return $this->render('/Recherche/recherche.html.twig');
    }

    /**
    * @Route("/profil", name="profil")
    */
    public function profil()
    {
    
        return $this->render('profil.html.twig');
    }
    
}