<?php 
// src/Form/ArticleType.php
namespace App\Form;

use App\Entity\Message;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


/********************* FORMULAIRE NOUVEL UTILISATEUR ***************************/
class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             
            ->add('message', TextareaType::class, ['label' => 'Message','required' => true,])
            #->add('emetteur', EntityType::class, [
                #'class' => User::class, 
                #'choice_label' => 'nom',
                #'required' => true,]) 
            ->add('destinataire', EntityType::class, [
                'class' => User::class, 
                'choice_label' => 'nom',
                'required' => true,]) 
                
            ->add('envoyer', SubmitType::class, [
                'attr' => ['class' => 'Envoyer'],
            ]);

        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
  
}
