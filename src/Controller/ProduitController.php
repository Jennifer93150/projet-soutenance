<?php
// src/Controller/ProduitController.php
namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\File;




class ProduitController extends AbstractController
{
    # Fonction ajout nouveau produit

    /**
     * @Route("/ajouter", name="ajout", methods={"GET","POST"})
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
           /** @var UploadedFile $brochureFile */
           $brochureFile = $form->get('photo')->getData();

           # cette condition est nécessaire car le champ 'brochure' n'est pas obligatoire
           # donc le fichier PDF ne doit être traité que lorsqu'un fichier est téléchargé
           if ($brochureFile) {
               $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
               # cela est nécessaire pour inclure en toute sécurité le nom du fichier dans l'URL
               #$safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
               $newFilename = $originalFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

               // Move the file to the directory where brochures are stored
               try {
                   $brochureFile->move(
                       $this->getParameter('brochures_directory'),
                       $newFilename
                   );
               } catch (FileException $e) {
                   // ... handle exception if something happens during file upload
               }

               // updates the 'brochureFilename' property to store the PDF file name
               // instead of its contents
               $produit->setPhoto($newFilename);
               $produit->setPhoto(new File($this->getParameter('brochures_directory').'/'.$produit->getPhoto())
            );
           }

        # le code dessous c ajouter user_id a la table des que user entre un produit  
        # $produit.user=$session.getUser
        # possibilité de modifier le contenu du formulaire ici

           # Insertion dans la bdd
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();

            return $this->redirectToRoute('accueil');
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
     * @Route("/categorie/jardin", name="Jardin" )
     */
    public function jardin(ProduitRepository $produitRepository)
    {
        return $this->render('/troc-eco/categories/jardin.html.twig', ['produits'=>$produitRepository->findBy(['categorie' => 2])]);
    }

     # Affichage categorie MAISON

    /**
     * @Route("/categorie/maison", name="Maison" )
     */
    public function maison(ProduitRepository $produitRepository)
    {
        # methode optimisée
        return $this->render('/troc-eco/categories/maison.html.twig', ['produits'=>$produitRepository->findBy(['categorie' => 3])]);
    }

     # Affichage categorie PUERICULTURE

    /**
     * @Route("/categorie/puericulture", name="Puericulture" )
     */
    public function puericulture(ProduitRepository $produitRepository)
    {
        # methode optimisée
        return $this->render('/troc-eco/categories/puericulture.html.twig', ['produits'=>$produitRepository->findBy(['categorie' => 4])]);
    }

    # Affichage categorie MULTIMEDIA

    /**
     * @Route("/categorie/multimedia", name="Multimedia" )
     */
    public function multimedia(ProduitRepository $produitRepository)
    {
        # methode optimisée
        return $this->render('/troc-eco/categories/multimedia.html.twig', ['produits'=>$produitRepository->findBy(['categorie' => 5])]);
    }

    # Affichage categorie MULTIMEDIA

    /**
     * @Route("/categorie/livre", name="Livre" )
     */
    public function livre(ProduitRepository $produitRepository)
    {
        # methode optimisée
        return $this->render('/troc-eco/categories/livre.html.twig', ['produits'=>$produitRepository->findBy(['categorie' => 6])]);
    }


}