<?php

return [

    'title' => 'ورود',

    'heading' => 'ورود به حساب کاربری شما',

    'actions' => [

        'authenticate' => [
            'label' => 'ورود',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'آدرس ایمیل',
        ],

        'password' => [
            'label' => 'رمزعبور',
        ],

        'remember' => [
            'label' => 'مرا به خاطر بسپار',
        ],

    ],

    'messages' => [
        'failed' => 'مشخصات وارد شده با اطلاعات ما سازگار نیست.',
        'throttled' => 'شما بیش از حد مجاز درخواست ورود داشته‌اید. لطفاً :seconds ثانیه دیگر تلاش کنید.',
    ],

];