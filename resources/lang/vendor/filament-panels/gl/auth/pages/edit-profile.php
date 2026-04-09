<?php

return [

    'label' => 'Perfil',

    'form' => [

        'email' => [
            'label' => 'Enderezo de correo electrónico',
        ],

        'name' => [
            'label' => 'Nome',
        ],

        'password' => [
            'label' => 'Nova contrasinal',
            'validation_attribute' => 'contrasinal',
        ],

        'password_confirmation' => [
            'label' => 'Confirmar nova contrasinal',
            'validation_attribute' => 'confirmación de contrasinal',
        ],

        'current_password' => [
            'label' => 'Contrasinal actual',
            'below_content' => 'Por seguridade, confirma o teu contrasinal para continuar.',
            'validation_attribute' => 'contrasinal actual',
        ],

        'actions' => [

            'save' => [
                'label' => 'Gardar cambios',
            ],

        ],

    ],

    'multi_factor_authentication' => [
        'label' => 'Autenticación de dous factores (2FA)',
    ],

    'notifications' => [

        'email_change_verification_sent' => [
            'title' => 'Solicitude de cambio de correo electrónico enviada',
            'body' => 'Enviouse unha solicitude para cambiar o teu enderezo de correo electrónico a :email. Revisa o teu correo para confirmar o cambio.',
        ],

        'saved' => [
            'title' => 'Cambios gardados',
        ],

        'throttled' => [
            'title' => 'Demasiados intentos. Por favor, inténtao de novo en :seconds segundos.',
            'body' => 'Por favor, inténtao de novo en :seconds segundos.',
        ],

    ],

    'actions' => [

        'cancel' => [
            'label' => 'Volver',
        ],

    ],

];