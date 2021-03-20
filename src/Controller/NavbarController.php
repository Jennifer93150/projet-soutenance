<?php
// src/Controller/FormController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class NavbarController extends AbstractController
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

    /**
    * @Route("/recherche", name="recherche")
    */
    public function recherche()
    {
    
        return $this->render('/troc-eco/recherche.html.twig');
    }

    /**
    * @Route("/categories", name="categories")
    */
    public function categories()
    {
    
        return $this->render('/troc-eco/categories.html.twig');
    }

    /**
    * @Route("/annonces", name="annonces")
    */
    public function annonces()
    {
    
        return $this->render('/troc-eco/annonces.html.twig');
    }


    /**
    * @Route("/profil", name="profil")
    */
    public function profil()
    {
    
        return $this->render('/user/profil.html.twig');
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
