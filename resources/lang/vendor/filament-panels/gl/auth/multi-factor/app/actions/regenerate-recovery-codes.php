<?php

return [

    'label' => 'Xerar novos códigos de recuperación',

    'modal' => [

        'heading' => 'Xerar novos códigos de recuperación da aplicación de autenticación',

        'description' => 'Se perdes os teus códigos de recuperación, podes rexeralos aquí. Os teus códigos de recuperación antigos quedarán invalidados inmediatamente.',

        'form' => [

            'code' => [

                'label' => 'Introduce o código de 6 díxitos da aplicación de autenticación',

                'validation_attribute' => 'código',

                'messages' => [

                    'invalid' => 'O código introducido non é válido.',

                    'rate_limited' => 'Demasiados intentos. Por favor, inténtao máis tarde.',

                ],

            ],

            'password' => [

                'label' => 'Ou ben, introduce o teu contrasinal actual',

                'validation_attribute' => 'contrasinal',

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Xerar códigos de recuperación',
            ],

        ],

    ],

    'notifications' => [

        'regenerated' => [
            'title' => 'Xeráronse novos códigos de recuperación da aplicación de autenticación',
        ],

    ],

    'show_new_recovery_codes' => [

        'modal' => [

            'heading' => 'Novos códigos de recuperación',

            'description' => 'Garda os seguintes códigos de recuperación nun lugar seguro. Só se mostrarán unha vez, e necesitaralos se perdes o acceso á túa aplicación de autenticación:',

            'actions' => [

                'submit' => [
                    'label' => 'Pechar',
                ],

            ],

        ],

    ],

];
