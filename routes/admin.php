<?php



Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'auth'
], function () {
    Route::resource('dashboard', 'DashboardController');
    Route::resource('portofolio', 'PortofolioController');
});
