<?php 
// src/Form/ArticleType.php
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


/********************* FORMULAIRE NOUVEL UTILISATEUR ***************************/
class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             
            ->add('nom', TextType::class, ['label' => 'Nom','required' => true,])
            ->add('email', EmailType::class, ['label' => 'Email','required' => true,])
            ->add('password', PasswordType::class, ['label' => 'Mot de passe','required' => true,]) 
            ->add('cp', IntegerType::class, ['label' => 'Code postal'])
            ->add('ville', TextType::class, ['label' => 'Ville'])
            ->add('telephone', TelType::class, ['label' => 'Téléphone'])
            ->add('acceptation', RadioType::class, ['label' => 'J\'ai lu et accepté la Politique de confidentialité', 'required' => true,])

            ->add('enregistrer', SubmitType::class, [
                'attr' => ['class' => 'enregistrer'],
            ]);

        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
  
}
