<?php

return [

    'title' => 'Авторизоваться',

    'heading' => 'Войдите в свой аккаунт',

    'actions' => [

        'authenticate' => [
            'label' => 'Войти',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'Адрес электронной почты',
        ],

        'password' => [
            'label' => 'Пароль',
        ],

        'remember' => [
            'label' => 'Запомнить меня',
        ],

    ],

    'messages' => [
        'failed' => 'Неверное имя пользователя или пароль.',
        'throttled' => 'Слишком много попыток входа. Пожалуйста, попробуйте еще раз через :seconds секунд.',
    ],

];