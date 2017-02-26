<?php

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));
    Route::get('/about', array('as' => 'about', 'uses' => 'HomeController@about'));
    Route::get('/contact-us', array('as' => 'contact-us', 'uses' => 'HomeController@contact_us'));
});