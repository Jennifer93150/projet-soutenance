<?php
// src/Controller/FormController.php
namespace App\Controller;

use App\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
     
    
    # JE CREER MES ROUTES VERS MES PAGES HTML
    
  
    /**
    * @Route("/", name="accueil")
    */
    public function accueil()
    {
    
        return $this->render('/troc-eco/index.html.twig');
    }

    /**
    * @Route("/ajout-troc", name="ajout")
    */
    public function ajout()
    {
    
        return $this->render('/troc-eco/ajout-troc.html.twig');
    }

    # Affichage des categories dans page Recherche

    /**
     * Page categorie : Affiche les catégories des produits
    * @Route("/recherche", name="recherche")
    */
    public function recherche(Request $request)
    {
        # Selection des données ds la bdd
        $repository = $this->getDoctrine()->getRepository(Categorie::class);
        # je stock ds la var $cateegories TOUTES mes categories
        $categories = $repository->findAll();

        # Envoi à la vue
        return $this->render('/troc-eco/recherche.html.twig', ['noscategories'=>$categories]);
        
    }

    /**
    * @Route("/annonces", name="annonces")
    */
    public function annonces()
    {
    
        return $this->render('/troc-eco/annonces.html.twig');
    }

    /**
    * @Route("/message", name="message")
    */
    public function message()
    {
    
        return $this->render('/user/messages.html.twig');
    }

    /**
    * @Route("/contact", name="contact")
    */
    public function contact()
    {
    
        return $this->render('/troc-eco/contact.html.twig');
    }

    /**
    * @Route("/politique", name="politique")
    */
    public function politique()
    {
    
        return $this->render('/troc-eco/politique.html.twig');
    }
    
}
