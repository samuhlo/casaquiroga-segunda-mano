<?php

return [

    'title' => 'Restablecer o teu contrasinal',

    'heading' => 'Restablecer o teu contrasinal',

    'form' => [

        'email' => [
            'label' => 'Restablecer contrasinal',
        ],

        'password' => [
            'label' => 'Contrasinal',
            'validation_attribute' => 'contrasinal',
        ],

        'password_confirmation' => [
            'label' => 'Confirmar contrasinal',
        ],

        'actions' => [

            'reset' => [
                'label' => 'Restablecer contrasinal',
            ],

        ],

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Demasiados intentos de restablecemento',
            'body' => 'Por favor, inténtao de novo en :seconds segundos.',
        ],

    ],

];
