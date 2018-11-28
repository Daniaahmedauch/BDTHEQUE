<?php



Route::get('/',function () {
    return view('pagedaccueil');
    
});



Route::get('/', 'Bedetheque@getBedetheque');


