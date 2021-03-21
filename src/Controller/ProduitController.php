<?php
// src/Controller/ProduitController.php
namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Form\ProduitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



class ProduitController extends AbstractController
{
    # Fonction ajout nouveau produit

    /**
     * @Route("/ajouter", name="ajout")
     */
    public function new(Request $request)
    {
        # Instanciation de la class Produit, $produit est un objet
        $produit = new Produit();

        # Création d'un nouvel objet form
        $form = $this->createForm(ProduitType::class, $produit);
 		$form->handleRequest($request);

        # Si "submit" ET tout valide
        if ($form->isSubmitted() && $form->isValid()) {
        
           # Insertion dans la bdd
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
        }
        # Passer le formulaire à la vue
        return $this->render('/troc-eco/ajout-troc.html.twig', ['Formulaire' => $form->createView()]);
    }
    
     # Affichage des produits de la categorie maison

    /**
     * @Route("/categorie/maison", name="maison" )
     */
    public function maison(Request $request)
    {
        // get Repository va aller au niveau des données dans la table précisée
        // SELECT query
        $repository = $this->getDoctrine()->getRepository(Produit::class);
        // a ce stade il a accès au données
        // je veux stocker dans la variable $produits TOUT mes produits
        $produits = $repository->findBy(['titre' => 'fer a repasser']);

        return $this->render('/troc-eco/categories/maison.html.twig', ['produits'=>$produits]);
    }

    # Affichage des produits de la categorie vetement

    /**
     * @Route("/categorie/vetement", name="vetement" )
     */
    public function vetement(Request $request)
    {
        // get Repository va aller au niveau des données dans la table précisée
        // SELECT query
        $repository = $this->getDoctrine()->getRepository(Categorie::class);
        // a ce stade il a accès au données
        // je veux stocker dans la variable $produits TOUT mes produits
        $produits = $repository->findBy(['nom' => 'Vetements']);

        return $this->render('/troc-eco/categories/vetement.html.twig', ['produits'=>$produits]);
    }
    
}