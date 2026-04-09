<?php

return [

    'label' => 'Configurar',

    'modal' => [

        'heading' => 'Configurar a aplicación de autenticación',

        'description' => <<<'BLADE'
            Necesitarás unha aplicación como Google Authenticator (<x-filament::link href="https://itunes.apple.com/us/app/google-authenticator/id388497605" target="_blank">iOS</x-filament::link>, <x-filament::link href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2" target="_blank">Android</x-filament::link>) para completar este proceso.
            BLADE,

        'content' => [

            'qr_code' => [

                'instruction' => 'Escanea este código QR coa túa aplicación de autenticación:',

                'alt' => 'Código QR para escanear cunha aplicación de autenticación',

            ],

            'text_code' => [

                'instruction' => 'Ou introduce este código manualmente:',

                'messages' => [
                    'copied' => 'Copiado',
                ],

            ],

            'recovery_codes' => [

                'instruction' => 'Garda os seguintes códigos de recuperación nun lugar seguro. Só se mostrarán unha vez, e necesitaralos se perdes o acceso á túa aplicación de autenticación:',

            ],

        ],

        'form' => [

            'code' => [

                'label' => 'Introduce o código de 6 díxitos da aplicación de autenticación',

                'validation_attribute' => 'código',

                'below_content' => 'Necesitarás introducir o código de 6 díxitos da túa aplicación de autenticación cada vez que inicies sesión ou realices accións sensibles.',

                'messages' => [

                    'invalid' => 'O código introducido non é válido.',

                    'rate_limited' => 'Demasiados intentos. Por favor, inténtao máis tarde.',

                ],

            ],

        ],

        'actions' => [

            'submit' => [
                'label' => 'Activar aplicación de autenticación',
            ],

        ],

    ],

    'notifications' => [

        'enabled' => [
            'title' => 'A aplicación de autenticación foi activada',
        ],

    ],

];
