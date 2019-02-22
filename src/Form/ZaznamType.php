<?php

namespace App\Form;
use App\Entity\Zaznam;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ZaznamType extends AbstractType
{
    public function buildForm ( FormBuilderInterface $builder , array $options )
    {
        $builder

            -> add('osobne_cislo' ,NumberType :: class )
            -> add('meno' ,TextType :: class )
            -> add('heslo' ,TextType :: class )
            ->add('datumCasOdchodu', DateType::class, ["widget"=>"single_text","format"=>"dd-MM-yyyy"])
            ->add('datumCasPrichodu', DateType::class, ["widget"=>"single_text","format"=>"dd-MM-yyyy"])

        ;


    }

    public function configureOptions ( OptionsResolver $resolver )
    {
        $resolver -> setDefaults ( array (
            'data_class' => Zaznam::class ,
            'csrf_protection' => false,
            'empty_data' => new Zaznam(),
        ));
    }

    public function getBlockPrefix()
    {
        return "";
    }
}