<?php 
// src/Form/ArticleType.php
namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
            /*->add('type', ChoiceType::class, [
                'label' => 'Type',
                'choices' => [
                     'J\'ajoute' => 'Ajout',
                     'Je recherche' => 'Recherche',
                   
                 ],
                'expanded' => true,
                'multiple' => false
        ])*/
            # SELECT CATEGORIES
            ->add('nom', EntityType::class, [
                'label' => "Choisissez une catégorie", 
                'class' => Categorie::class, 
                'choice_label' => 'nom',
                'mapped' => false]) 
           
            ->add('photo', FileType::class, ['label' => 'photo'])

            ->add('titre',TextType::class, ['label' => 'titre','required' => true,])
            ->add('description', TextType::class, ['label' => 'description','required' => true,])
            
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
            'data_class' => Produit::class,
        ]);
    }
}