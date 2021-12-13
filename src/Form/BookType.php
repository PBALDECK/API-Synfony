<?php

namespace App\Form;

use App\Entity\Author;
use App\Entity\Book;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
                'required' => false
            ])
            ->add('isAvailable', CheckboxType::class, [
                'label' => "Disponible ?"
            ])
            ->add('description')
            ->add('price')
            ->add('categories', EntityType::class, [
                'label' => 'Categories',
                'class' => Category::class,
                'choice_label' => 'name',
                'multiple' => true
            ])
            ->add('author', EntityType::class, [
                'label' => 'Autheur',
                'class' => Author::class,
                'choice_label' => 'lastname',
                'multiple' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
