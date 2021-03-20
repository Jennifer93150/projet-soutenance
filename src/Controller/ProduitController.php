<?php
// src/Controller/ProduitController.php
namespace App\Controller;


use App\Entity\Produit;
use App\Form\ProduitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



class ProduitController extends AbstractController
{
    # Fonction ajout nouveau produit

    /**
     * @Route("/ajout-troc", name="ajout")
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
    

    
}