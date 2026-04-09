<?php

return [

    'title' => 'Acceso',

    'heading' => 'Entra na túa conta',

    'actions' => [

        'register' => [
            'before' => 'ou',
            'label' => 'Crear unha conta',
        ],

        'request_password_reset' => [
            'label' => 'Esqueciches o contrasinal?',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'Correo electrónico',
        ],

        'password' => [
            'label' => 'Contrasinal',
        ],

        'remember' => [
            'label' => 'Lembrarme',
        ],

        'actions' => [

            'authenticate' => [
                'label' => 'Entrar',
            ],

        ],

    ],

    'multi_factor' => [

        'heading' => 'Verifica a túa identidade',

        'subheading' => 'Para continuar co inicio de sesión, terás que verificar a túa identidade.',

        'form' => [

            'provider' => [
                'label' => 'Como queres verificarte?',
            ],

            'actions' => [

                'authenticate' => [
                    'label' => 'Confirmar inicio de sesión',
                ],

            ],

        ],

    ],

    'messages' => [

        'failed' => 'Estas credenciais non coinciden cos nosos rexistros.',

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Demasiados intentos. Proba de novo en :seconds segundos.',
            'body' => 'Proba de novo en :seconds segundos.',
        ],

    ],

];
