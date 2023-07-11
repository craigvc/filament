<?php

return [

    'title' => 'Bejelentkezés',

    'heading' => 'Bejelentkezés a fiókba',

    'actions' => [

        'authenticate' => [
            'label' => 'Bejelentkezés',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'E-mail cím',
        ],

        'password' => [
            'label' => 'Jelszó',
        ],

        'remember' => [
            'label' => 'Emlékezz rám',
        ],

    ],

    'messages' => [
        'failed' => 'Hibás e-mail cím vagy jelszó.',
        'throttled' => 'Kérjük várjon :seconds másodpercet a következő próbálkozás előtt.',
    ],

];