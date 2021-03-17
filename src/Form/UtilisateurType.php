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

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, ['label' => 'email','required' => true,]) 
            ->add('mot_de_passe', TextType::class, ['label' => 'mot_de_passe','required' => true,])
            ->add('nom', TextType::class, ['label' => 'nom', 'required' => true,])
            
            ->add('email', EmailType::class, ['label' => 'email','required' => true,]) ->add('mot_de_passe', TextType::class, ['label' => 'mot_de_passe','required' => true,])
            
            /*->add('products', EntityType::class, [
                'class' => Product::class,
                'choice_label' => 'products',])*/

            ->add('save', SubmitType::class, [
                'attr' => ['class' => 'save'],
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