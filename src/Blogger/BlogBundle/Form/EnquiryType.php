<?php
// src/Blogger/BlogBundle/Form/EnquiryType.php

namespace Blogger\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class EnquiryType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('name','text', array('required'=>false));
        $builder->add('email', 'email');
        $builder->add('subject','text', array('required'=>false));
        $builder->add('body', 'textarea', array('required'=>false));
    }

    public function getName()
    {
        return 'contact';
    }
}
