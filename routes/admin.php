<?php

    Route::get('/', function () {
        return 'Hello Admin';
    });

    Route::get('/dashboard', function () {
        return 'Hello dashboard';
    });
