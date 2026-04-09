<?php

return [

    'title' => 'Rexistrarse',

    'heading' => 'Crear unha conta',

    'actions' => [

        'login' => [
            'before' => 'ou',
            'label' => 'iniciar sesión na súa conta',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'Correo electrónico',
        ],

        'name' => [
            'label' => 'Nome',
        ],

        'password' => [
            'label' => 'Contrasinal',
            'validation_attribute' => 'contrasinal',
        ],

        'password_confirmation' => [
            'label' => 'Confirmar contrasinal',
        ],

        'actions' => [

            'register' => [
                'label' => 'Rexistrarse',
            ],

        ],

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Demasiados intentos de rexistro',
            'body' => 'Por favor, inténtao de novo en :seconds segundos.',
        ],

    ],

];
