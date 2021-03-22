<?php
// src/Controller/ProduitController.php
namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
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
            
        # $produit.user=$session.getUser
        # possibilité de modifier le contenu du formulaire ici

           # Insertion dans la bdd
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
        }
        # Passer le formulaire à la vue
        return $this->render('/troc-eco/ajout-troc.html.twig', ['Formulaire' => $form->createView()]);
    }
    
    
    # Affichage DE TS LES PRODUITS CATEGORIE VETEMENT

    /**
     * @Route("/categorie/vetement", name="Vetements" )
     */
    public function vetement(ProduitRepository $produitRepository)
    {
        return $this->render('/troc-eco/categories/vetement.html.twig', ['produits'=>$produitRepository->findBy(['categorie' => 1])]);
    }
    
    # Affichage categorie JARDIN

    /**
     * @Route("/categorie/jardin", name="jardin" )
     */
    public function jardin(ProduitRepository $produitRepository)
    {
        return $this->render('/troc-eco/categories/jardin.html.twig', ['produits'=>$produitRepository->findBy(['categorie' => 2])]);
    }

     # Affichage categorie MAISON

    /**
     * @Route("/categorie/maison", name="maison" )
     */
    public function maison(ProduitRepository $produitRepository)
    {
        # methode optimisée
        return $this->render('/troc-eco/categories/maison.html.twig', ['produits'=>$produitRepository->findBy(['categorie' => 3])]);
    }

     # Affichage categorie PUERICULTURE

    /**
     * @Route("/categorie/puericulture", name="puericulture" )
     */
    public function puericulture(ProduitRepository $produitRepository)
    {
        # methode optimisée
        return $this->render('/troc-eco/categories/puericulture.html.twig', ['produits'=>$produitRepository->findBy(['categorie' => 4])]);
    }

    # Affichage categorie MULTIMEDIA

    /**
     * @Route("/categorie/multimedia", name="multimedia" )
     */
    public function multimedia(ProduitRepository $produitRepository)
    {
        # methode optimisée
        return $this->render('/troc-eco/categories/multimedia.html.twig', ['produits'=>$produitRepository->findBy(['categorie' => 5])]);
    }

    # Affichage categorie MULTIMEDIA

    /**
     * @Route("/categorie/livre", name="livre" )
     */
    public function livre(ProduitRepository $produitRepository)
    {
        # methode optimisée
        return $this->render('/troc-eco/categories/livre.html.twig', ['produits'=>$produitRepository->findBy(['categorie' => 6])]);
    }


}