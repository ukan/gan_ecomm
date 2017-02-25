<?php

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));
});