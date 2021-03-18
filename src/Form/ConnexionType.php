<?php 
// src/Form/ArticleType.php
namespace App\Form;

use App\Entity\Utilisateur;
#use App\Entity\Produit;
#use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


/********************* FORMULAIRE NOUVEL UTILISATEUR ***************************/
class ConnexionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             
            
            ->add('email', EmailType::class, ['label' => 'Email','required' => true,])
            ->add('password', TextType::class, ['label' => 'Mot de passe','required' => true,]) 
            
            /* NE PAS OUBLIER LES ENTITY QUI Y SONT LIEES*/

            ->add('connexion', SubmitType::class, [
                'attr' => ['class' => 'connexion'],
            ]);

        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }

    
}