<?php

return [

    'label' => 'Configurar',

    'modal' => [

        'heading' => 'Configurar códigos de verificación por correo electrónico',

        'description' => 'Terás que introducir o código de 6 díxitos que che enviamos por correo electrónico cada vez que inicies sesión ou realices accións sensibles. Revisa o teu correo electrónico para atopar o código de 6 díxitos e completar a configuración.',

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
                'label' => 'Activar códigos de verificación por correo electrónico',
            ],

        ],

    ],

    'notifications' => [

        'enabled' => [
            'title' => 'Activáronse os códigos de verificación por correo electrónico',
        ],

    ],

];
