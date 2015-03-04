<?php

namespace Jupiter\IdcBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EnderecoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipo')
            ->add('logradouro')
            ->add('cep')
            ->add('complemento')
            ->add('cliente')
            ->add('bairro')
            ->add('cidade')
            ->add('estado')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jupiter\IdcBundle\Entity\Endereco'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jupiter_idcbundle_endereco';
    }
}
