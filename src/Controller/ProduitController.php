<?php
// src/Controller/ProduitController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ProduitType;
use App\Entity\Produit;

#use App\Service\MessageGenerator;
// 1-import mon service

/********** CREATION de LA PAGE  ajouter un troc ***********/
class ProduitController extends AbstractController
{
/******* FONCTION NOUVEL utilisateur GRACE AU FORMULAIRE *******/
    /**
     * @Route("/produit", name="produit")
     */
    public function new(Request $request)
    {
        $produit = new Produit();#Instanciation de la class Product. $product est un objet

        //création d'un nouvel objet form dont j'ai appelé la creation par la function par defaut buildForm ds le fichier UtilisateurType.php
        $form = $this->createForm(ProduitType::class, $produit);
 		$form->handleRequest($request);

        // Si "submit" ET tout valide
        if ($form->isSubmitted() && $form->isValid()) {
        
            // alors afficher le contenu de l'objet $utilisateur sur la console
             dump($produit);
             
             // $em(entity manager)je recupere le manager des données de ma table
            $em = $this->getDoctrine()->getManager();
            // Je prepare la sauvegarde/l'insertion de mon objet $utilisateur ds ma bdd (1 ligne de table)
            $em->persist($produit);
            // execution de l'SQL
            $em->flush();
        }
        //affichage page creation et son formulaire
        return $this->render('/Propose/nouveauTroc.html.twig', ['Formulaire' => $form->createView()]);
    }
    

    
}