<?php

return [

    'label' => 'Desactivar',

    'modal' => [

        'heading' => 'Desactivar códigos de verificación por correo electrónico',

        'description' => 'Estás seguro de que queres deixar de recibir códigos de verificación por correo? Desactivar esta opción eliminará unha capa adicional de seguridade da túa conta.',

        'form' => [

            'code' => [

                'label' => 'Introduce o código de 6 díxitos que che enviamos por correo electrónico',

                'validation_attribute' => 'código',

                'actions' => [

                    'resend' => [

                        'label' => 'Enviar un novo código por correo electrónico',

                        'notifications' => [

                            'resent' => [
                                'title' => 'Enviámosche un novo código por correo electrónico.',
                            ],

                            'throttled' => [
                                'title' => 'Demasiados intentos de reenvío. Agarda antes de solicitar outro código.',
                            ],

                        ],

                    ],

                ],

                'messages' => [

                    'invalid' => 'O código introducido non é válido.',

                    'rate_limited' => 'Demasiados intentos. Por favor, inténtao máis tarde.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Desactivar códigos de verificación por correo',
            ],

        ],

    ],

    'notifications' => [

        'disabled' => [
            'title' => 'Os códigos de verificación por correo foron desactivados',
        ],

    ],

];
