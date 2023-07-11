<?php

return [

    'title' => 'Login',

    'heading' => 'Accedi al tuo account',

    'actions' => [

        'authenticate' => [
            'label' => 'Accedi',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'Indirizzo Email',
        ],

        'password' => [
            'label' => 'Password',
        ],

        'remember' => [
            'label' => 'Ricordami',
        ],

    ],

    'messages' => [
        'failed' => 'I tuoi dati di accesso non sono corretti.',
        'throttled' => 'Troppi tentativi di accesso. Riprova tra :seconds secondi.',
    ],

];