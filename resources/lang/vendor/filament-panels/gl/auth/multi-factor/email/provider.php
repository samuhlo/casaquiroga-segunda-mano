<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Códigos de verificación por correo electrónico',

            'below_content' => 'Recibe un código temporal no teu correo electrónico para verificar a túa identidade durante o inicio de sesión.',

            'messages' => [
                'enabled' => 'Activados',
                'disabled' => 'Desactivados',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Enviar un código ao teu correo electrónico',

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

            ],

        ],

    ],

];
