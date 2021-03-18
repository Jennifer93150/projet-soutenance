<?php 
// src/Form/ArticleType.php
namespace App\Form;

use App\Entity\Utilisateur;
#use App\Entity\Produit;
#use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


/********************* FORMULAIRE NOUVEL UTILISATEUR ***************************/
class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             
            ->add('nom', TextType::class, ['label' => 'Nom','required' => true,])
            ->add('email', EmailType::class, ['label' => 'Email','required' => true,])
            ->add('password', TextType::class, ['label' => 'Mot de passe','required' => true,]) 
            #->add('confirmation_mdp', EmailType::class, ['label' => 'email','required' => true,]) ->add('confirmation_mdp', TextType::class, ['label' => 'confirmation_mdp','required' => true,])
            #->add('accept_politique', CheckboxType::class, ['label' => 'accept_politique', 'required' => true])
            ->add('cp', IntegerType::class, ['label' => 'Code postal','required' => true,])
            ->add('ville', TextType::class, ['label' => 'Ville','required' => true,])
            ->add('telephone', IntegerType::class, ['label' => 'code postal','required' => true,])
            /* NE PAS OUBLIER LES ENTITY QUI Y SONT LIEES*/

            ->add('enregistrer', SubmitType::class, [
                'attr' => ['class' => 'enregistrer'],
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
