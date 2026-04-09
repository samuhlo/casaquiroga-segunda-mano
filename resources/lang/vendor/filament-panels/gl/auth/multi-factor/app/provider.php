<?php

return [

    'management_schema' => [

        'actions' => [

            'label' => 'Aplicación de autenticación',

            'below_content' => 'Emprega unha aplicación segura para xerar un código temporal para verificar o inicio de sesión.',

            'messages' => [
                'enabled' => 'Habilitada',
                'disabled' => 'Deshabilitada',
            ],

        ],

    ],

    'login_form' => [

        'label' => 'Usa un código da túa aplicación de autenticación',

        'code' => [

            'label' => 'Introduce o código de 6 díxitos da aplicación de autenticación',

            'validation_attribute' => 'código',

            'actions' => [

                'use_recovery_code' => [
                    'label' => 'Usa un código de recuperación no seu lugar',
                ],

            ],

            'messages' => [

                'invalid' => 'O código introducido non é válido.',

            ],

        ],

        'recovery_code' => [

            'label' => 'Ou ben, introduce un código de recuperación',

            'validation_attribute' => 'código de recuperación',

            'messages' => [

                'invalid' => 'O código de recuperación introducido non é válido.',

            ],

        ],

    ],

];
