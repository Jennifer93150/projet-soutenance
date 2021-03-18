<?php 
// src/Form/ArticleType.php
namespace App\Form;

use App\Entity\Produit;
#use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'choices' => [
                     'Je propose' => 2,
                     'Je recherche' => 1,
                   
                 ],
                'expanded' => true,
                'multiple' => false
        ])
           
            #->add('categorie', ChoiceType::class, ['label' => 'categorie','required' => true,]) 
            /*->add('codepostal', IntegerType::class, ['label' => 'code postal','required' => true,]) */
           /* ->add('ville', TextType::class, ['label' => 'ville','required' => true,])*/
            #->add('telephone', IntegerType::class, ['label' => 'telephone', 'required' => true,])
            ->add('photo', FileType::class, ['label' => 'photo','required' => true,])

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