<?php



Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function () {
    Route::resource('dashboard', 'DashboardController');
    Route::resource('portofolio', 'PortofolioController');
});
