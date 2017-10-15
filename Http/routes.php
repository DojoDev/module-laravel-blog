<?php

Route::group(['middleware' => 'web', 'prefix' => 'blog', 'namespace' => 'DojoDev\Blog\Http\Controllers'], function()
{
   Route::get('/','PostsController@index');
});
