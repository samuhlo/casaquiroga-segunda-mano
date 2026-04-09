<?php

return [

    'title' => 'Verifica o teu enderezo de correo electrónico',

    'heading' => 'Verifica o teu enderezo de correo electrónico',

    'actions' => [

        'resend_notification' => [
            'label' => 'Reenviar',
        ],

    ],

    'messages' => [
        'notification_not_received' => 'Non recibiches o correo electrónico que enviamos?',
        'notification_sent' => 'Enviámosche un correo electrónico a :email con instrucións sobre como verificar o teu enderezo de correo electrónico.',
    ],

    'notifications' => [

        'notification_resent' => [
            'title' => 'Reenviamos o correo electrónico.',
        ],

        'notification_resend_throttled' => [
            'title' => 'Demasiados intentos de reenvío',
            'body' => 'Por favor, inténtao de novo en :seconds segundos.',
        ],

    ],

];
