<?php

return [

    'label' => 'Desactivar',

    'modal' => [

        'heading' => 'Desactivar a aplicación de autenticación',

        'description' => 'Estás seguro de que queres deixar de usar a aplicación de autenticación? Desactivala eliminará unha capa adicional de seguridade da túa conta.',

        'form' => [

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

                    'rate_limited' => 'Demasiados intentos. Por favor, inténtao máis tarde.',

                ],

            ],

            'recovery_code' => [

                'label' => 'Ou ben, introduce un código de recuperación',

                'validation_attribute' => 'código de recuperación',

                'messages' => [

                    'invalid' => 'O código de recuperación introducido non é válido.',

                    'rate_limited' => 'Demasiados intentos. Por favor, inténtao máis tarde.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Desactivar aplicación de autenticación',
            ],

        ],

    ],

    'notifications' => [

        'disabled' => [
            'title' => 'A aplicación de autenticación foi desactivada',
        ],

    ],

];