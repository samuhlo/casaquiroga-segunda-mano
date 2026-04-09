<?php

return [

    'title' => 'Restablecer o teu contrasinal',

    'heading' => 'Esqueciches o teu contrasinal?',

    'actions' => [

        'login' => [
            'label' => 'Volver ao inicio de sesión',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'Correo electrónico',
        ],

        'actions' => [

            'request' => [
                'label' => 'Enviar correo electrónico',
            ],

        ],

    ],

    'notifications' => [

        'sent' => [
            'body' => 'Se a túa conta non existe, non recibirás o correo electrónico.',
        ],

        'throttled' => [
            'title' => 'Demasiadas solicitudes',
            'body' => 'Por favor, inténtao de novo en :seconds segundos.',
        ],

    ],

];
