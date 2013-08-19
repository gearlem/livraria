<?php

namespace LivrariaAdmin\Form;

use Zend\Form\Form;

class Login extends Form {
    
    public function __construct($name = null) {
        parent::__construct('user');
        
        $this->setAttribute('method', 'post');        
        #$this->setInputFilter(new CategoriaFilter);        
        
        $this->add(array(
           'name' => 'email',
            'options' => array(
                'type' => 'email',
                'label' => 'Email'
            ), 
            'attributes' => array(
                'id' => 'email',
                'placeholder' => 'Entre com o e-mail'
            )
        ));
        $this->add(array(
           'name' => 'password',
            'options' => array(
                'type' => 'Password',
                'label' => 'Password'
            ),
            'attributes' => array(
                'id' => 'password',
                'type' =>'password'
            )
        ));
        $this->add(array(
           'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => 'Login',
                'class' => 'btn btn-primary'
            )
        ));
               
    }
    
}
